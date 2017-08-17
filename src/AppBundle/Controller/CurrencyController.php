<?php

namespace AppBundle\Controller;


use AppBundle\AppBundle;
use AppBundle\Service\TaxService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Service\BankApi;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Repository\CurrencyRepository;
use AppBundle\Entity\Currency;
use AppBundle\Entity\Rate;
use ACSEO\Bundle\GraphicBundle\Graphic\Flot\Type\TimeLine;
use AppBundle\Form\TaxType;
use AppBundle\Form\QuarterReportType;
use AppBundle\Entity\Tax;
use AppBundle\Entity\Repository\RateRepository;

class CurrencyController extends Controller
{

    protected $currencyIds = [
        'usd' => 1,
        'eur' => 2,
        'rur' => 3,
        'btc' => 4,
    ];

    /**
     * @Route("/", name="currency homepage")
     */
    public function indexAction()
    {
        $currencyService = $this->get('app.currency_service');
        $bankApiService = $this->get('app.bank_api');

        $currencyList = $bankApiService->getPrivatCurrencyList();
        $btcPrice = $bankApiService->getBitcoinPrice();
        $currencyList[] = [
            "ccy" => "BTC",
            "base_ccy" => "USD",
            "buy" => $btcPrice['USD']['buy'],
            "sale" => $btcPrice['USD']['sell'],
        ];

        $updateTime = $this->get('app.currency_service')->getRateUpdateDate();
        $timeDiff = time() - strtotime($updateTime);

        if ($timeDiff > (60 * 60)) {
            $currencyService->saveRate($currencyList);
        }


        return $this->render('currency/index.html.twig', [
            'currencies' => $currencyList,
            'updateTime' => $updateTime
        ]);

    }

    /**
     * @Route(
     *     "/chart/{currency}",
     *     defaults={"currency": "usd"},
     *     name="currency chart"
     * )
     *
     */
    public function chartAction($currency)
    {

        if (!array_key_exists($currency, $this->currencyIds)) {
            throw new Exception('Currency not found!');
        }

        $buyRateData = [];
        $saleRateData = [];

        $rates = $this->getDoctrine()->getRepository(Rate::class)->findBy(
            [
                'currencyId' => $this->currencyIds[$currency]
            ],
            [
                'creationDate' => 'ASC'
            ]
        );

        foreach ($rates as $rate) {
            $buyRateData[] = [
                $rate->getCreationDate()->getTimestamp() * 1000,
                $rate->getBuyRate()
            ];
            $saleRateData[] = [
                $rate->getCreationDate()->getTimestamp() * 1000,
                $rate->getSaleRate()
            ];
        }

        $buyTimeline = new TimeLine("#buyTimeline", $buyRateData);
        $saleTimeline = new TimeLine("#saleTimeline", $saleRateData);

        return $this->render('currency/chart.html.twig', array(
            'buyTimeline' => $buyTimeline,
            'saleTimeline' => $saleTimeline,
            'currency' => $currency
        ));
    }

    /**
     * @param Request $request
     * @return Response
     * @Route(
     *     "/tax",
     *     name="tax_calculator"
     * )
     *
     */
    public function taxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $taxService = $this->get('app.tax_service');
        $currencyRepository = $this->getDoctrine()->getRepository(Currency::class);
        $form = $this->createForm(
            TaxType::class,
            null,
            [
                'currency_service' => $this->get('app.currency_service'),
                'currency_repository' => $currencyRepository
            ]
        );

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /**
             * @var Tax
             */
            $formData = $form->getData(); //data from the form

            try {
                $paymentRates = $taxService->getPaymentRates($formData);
            } catch (\Exception $e) {
                return new Response($e->getMessage());
            }

            $formData->setUser($this->getUser());
            $formData->setTaxSum($paymentRates['hryvnaTax'] + $paymentRates['currencyTax']);
            $formData->setTotalSumHrn($paymentRates['totalSumHrn']);
            $em->persist($formData);
            $em->flush();

            return $this->render(
                'currency/tax_result.html.twig',
                [
                    'hrnRate' => $paymentRates['hryvnaRate'],
                    'total' => $paymentRates['sumHryvna'] + $paymentRates['sumCurrency'],
                    'tax' => $paymentRates['hryvnaTax'] + $paymentRates['currencyTax'],
                    'formData' => $formData
                ]
            );
        }

        return $this->render('currency/tax.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @param $paymentId
     * @return RedirectResponse
     * @Route(
     *     "/tax/remove/{paymentId}",
     *     name="remove payment"
     * )
     */
    public function removePaymentAction($paymentId)
    {
        $taxRepository = $this->getDoctrine()->getRepository(Tax::class);
        $em = $this->getDoctrine()->getManager();
        $payment = $taxRepository->findOneBy(['id' => $paymentId]);
        $em->remove($payment);
        $em->flush();

        return $this->redirectToRoute('tax_history');
    }

    /**
     * @param Request $request
     * @return RedirectResponse|Response
     * @Route(
     *     "/tax/history",
     *     name="tax_history"
     * )
     */
    public function taxHistoryAction(Request $request)
    {
        $taxRepository = $this->getDoctrine()->getRepository(Tax::class);

        $currencyService = $this->get('app.currency_service');
        $availableQuarters = $currencyService->getAvailableQuarters($this->getUser());

        $taxes = $taxRepository->findBy(['user' => $this->getUser()->getId()], ['date' => 'desc']);
        $form = $this->createForm(
            QuarterReportType::class,
            null,
            [
                'available_quarters' => $availableQuarters,
                'action' => $this->generateUrl('payment_report')
            ]
        );

        if ($form->isSubmitted() && $form->isValid()) {
            // perform some action...

            return $this->redirectToRoute('payment_report');
        }


        return $this->render('currency/taxHistory.html.twig', [
            'taxes' => $taxes,
            'form' => $form->createView()
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     * @Route(
     *     "/tax/report",
     *     name="payment_report"
     * )
     */
    public function PaymentReportAction(Request $request)
    {
        $date = $request->get('quarter_report')['quarters'];

        list($year, $quarter) = explode('-', $date);

        $paymentRepository = $this->getDoctrine()->getRepository(Tax::class);
        $payments = $paymentRepository->getPaymentsByQuarter($quarter, $year, $this->getUser()->getId());

        return $this->render('currency/paymentReport.html.twig', [
            'payments' => $payments,
            'year' => $year,
            'quarter' => $quarter,
            'ssc_tax' => TaxService::MIN_SALARY * TaxService::SSC_TAX_RATE * 3
        ]);
    }

    /**
     * @Route(
     *     "/btchistory",
     *     name="btc history"
     * )
     */
    public function btcHistoryAction()
    {
        $em = $this->getDoctrine()->getManager();
        $bankApiService = $this->get('app.bank_api');
        $btcChart = $bankApiService->getBitcoinPriceChart()['values'];

        foreach ($btcChart as $price) {
            $rate = new Rate();
            $rate->setCurrencyId(4);
            $rate->setCreationDate(\DateTime::createFromFormat('U', $price['x']));
            $rate->setBuyRate($price['y']);
            $rate->setSaleRate($price['y']);
//            $em->persist($rate);
//            $em->flush();
//            $em->clear();

//            dump($rate);
        }

        echo 'DONE!';
        die;
    }


}
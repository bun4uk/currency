<?php

namespace AppBundle\Controller;


use AppBundle\AppBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
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
use AppBundle\Entity\Tax;
use AppBundle\Repository\RateRepository;

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

//        dump($currencyList);
//        dump($btcPrice);
//        die;

        $updateTime = $this->get('app.currency_service')->getRateUpdateDate();
        $timeDiff = time() - strtotime($updateTime);

//        dump($timeDiff);

        if ($timeDiff > (60 * 60)) {
            $currencyService->saveRate($currencyList);
//            dump('currency was updated');
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

//        dump($buyRateData); die;

        $buyTimeline = new TimeLine("#buyTimeline", $buyRateData);
        $saleTimeline = new TimeLine("#saleTimeline", $saleRateData);

        return $this->render('currency/chart.html.twig', array(
            'buyTimeline' => $buyTimeline,
            'saleTimeline' => $saleTimeline
        ));
    }

    /**
     * @Route(
     *     "/tax",
     *     name="tax calculator"
     * )
     *
     */
    public function taxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $bankApiService = $this->get('app.bank_api');
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
            $formData = $form->getData(); //data from form

            $hryvnaRate = $bankApiService->getCurrencyRateToHryvna(
                $currencyRepository->findOneBy(['id' => $formData->getCurrency()])->getName(),
                $formData->getDate()->format('Ymd')
            );

            $sumHryvna = $formData->getSumHrn();
            $sumCurrency = $formData->getSumForeignCurrency() * $hryvnaRate[0]['rate'];
            $hryvnaTax = $sumHryvna * 0.05;
            $currencyTax = $sumCurrency * 0.05;

            $formData->setUser($this->getUser());
            $formData->setTaxSum($hryvnaTax + $currencyTax);
            $em->persist($formData);
            $em->flush();

            return $this->render(
                'currency/tax_result.html.twig',
                [
                    'hrnRate' => $hryvnaRate[0],
                    'total' => $sumHryvna + $sumCurrency,
                    'tax' => $hryvnaTax + $currencyTax,
                    'formData' => $formData
                ]
            );
        }


        return $this->render('currency/tax.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route(
     *     "/tax/history",
     *     name="tax history"
     * )
     *
     */
    public function taxHistoryAction(Request $request)
    {
        $taxRepository = $this->getDoctrine()->getRepository(Tax::class);
        $taxes = $taxRepository->findBy(['user' => $this->getUser()->getId()], ['date'=>'desc']);


        return $this->render('currency/taxHistory.html.twig', array(
            'taxes' => $taxes,
        ));
    }

    /**
     * @Route(
     *     "/btchistory",
     *     name="btc history"
     * )
     *
     */
    public function btcHistoryAction()
    {
        $em = $this->getDoctrine()->getManager();
        $bankApiService = $this->get('app.bank_api');
        $btcChart = $bankApiService->getBitcoinPriceChart()['values'];

        foreach ($btcChart as $price) {
            $rate = new Rate();
            $rate->setCurrencyId(4);
            $rate->setCreationDate(\DateTime::createFromFormat( 'U', $price['x'] ));
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
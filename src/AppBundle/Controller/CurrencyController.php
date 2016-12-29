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
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CurrencyController extends Controller
{

    protected $currencyIds = [
        'usd' => 1,
        'euro' => 2,
        'rur' => 3,
        'btc' => 4,
    ];

    /**
     * @Route("/", name="currency homepage")
     */
    public function indexAction()
    {
        $currencyService = $this->get('app.CurrencyService');
        $bankApiService = $this->get('app.BankApi');

        $currencyList = $bankApiService->getPrivatCurrencyList();

        $updateTime = $this->get('app.CurrencyService')->getRateUpdateDate();
        $timeDiff = time() - strtotime($updateTime);

        dump( $timeDiff );

        if ($timeDiff > (60 * 60)) {
            $currencyService->saveRate($currencyList);
            dump('currency was updated');
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

        $rates = $this->getDoctrine()->getRepository(Rate::class)->findBy(['currencyId' => $this->currencyIds[$currency]]);

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
    public function taxAction()
    {
        $form = $this->createFormBuilder()
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Post'))
            ->getForm();

        return $this->render('currency/tax.html.twig', array(
            'form' => $form->createView(),
        ));


    }



}
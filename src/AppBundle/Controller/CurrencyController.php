<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Service\BankApi;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Repository\CurrencyRepository;
use AppBundle\Entity\Currency;

class CurrencyController extends Controller
{

    /**
     * @Route("/currency", name="currency homepage")
     */
    public function indexAction()
    {
        $currencyService = $this->get('app.CurrencyService');
        $bankApiService = $this->get('app.BankApi');

        $currencyList = $bankApiService->getCurrencyList();

        dump($currencyService->getRateUpdateDate($currencyList)); die;


//        $this->get('app.CurrencyService')->saveRate($currencyList);



        dump(time()); die;


        return $this->render('currency/index.html.twig', [
            'currencies' => $currencyList
        ]);

    }



}
<?php
/**
 * Created by PhpStorm.
 * User: v.bunchuk
 * Date: 01/08/2016
 * Time: 15:56
 */

namespace AppBundle\Service;

use AppBundle\Entity\Currency;
use AppBundle\Entity\Rate;
use Doctrine\ORM\EntityManagerInterface;


class CurrencyService
{

    /**
     * Entity manager
     *
     * @var EntityManagerInterface $entityManager
     */
    protected $entityManager;

    /**
     * CurrencyService constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function updateCurrentRate($currencyList)
    {
        $currencyRepository = $this->entityManager->getRepository(Currency::class);
        $currencyRepository->updateCurrentRate($currencyList);
        return true;
    }

    /**
     * @return mixed
     */
    public function getRateUpdateDate()
    {
        $currencyRepository = $this->entityManager->getRepository(Currency::class);
        return ($currencyRepository->getRateUpdateDate());
    }

    /**
     * @param null $rateList
     */
    public function saveRate($rateList = null)
    {
        $currencyRepository = $this->entityManager->getRepository(Currency::class);

        dump($rateList);

        foreach ($rateList as $rateItem) {
            $rate = new Rate();
            $rate->setBuyRate($rateItem['buy']);
            $rate->setSaleRate($rateItem['sale']);
            $rate->setCurrencyId($currencyRepository->findOneBy(
                ['name' => $rateItem['ccy']]
            )->getId());

            $this->entityManager->persist($rate);
            $this->entityManager->flush();


            dump($rate);
        }
        die;

    }

}
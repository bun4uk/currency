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
     * @var
     */
    protected $currencyRepository;

    /**
     * CurrencyService constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->currencyRepository = $entityManager->getRepository(Currency::class);
    }

    public function updateCurrentRate($currencyList)
    {
        $this->currencyRepository->updateCurrentRate($currencyList);
        return true;
    }

    /**
     * @return mixed
     */
    public function getRateUpdateDate()
    {
        return ($this->currencyRepository->getRateUpdateDate());
    }

    /**
     * @param null $rateList
     * @return bool
     */
    public function saveRate($rateList = null)
    {
        foreach ($rateList as $rateItem) {
            $rate = new Rate();
            $rate->setBuyRate($rateItem['buy']);
            $rate->setSaleRate($rateItem['sale']);
            $rate->setCurrencyId($this->currencyRepository->findOneBy(
                ['name' => $rateItem['ccy']]
            )->getId());

            $this->entityManager->persist($rate);
            $this->entityManager->flush();
        }

        return true;
    }

}
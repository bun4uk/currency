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
use AppBundle\Entity\Repository\PaymentRepository;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Repository\CurrencyRepository;
use AppBundle\Entity\User;
use AppBundle\Entity\Tax;

class CurrencyService
{

    /**
     * Entity manager
     *
     * @var EntityManagerInterface $entityManager
     */
    protected $entityManager;

    /**
     * @var CurrencyRepository
     */
    protected $currencyRepository;

    /**
     * @var PaymentRepository
     */
    protected $paymentRepository;

    /**
     * CurrencyService constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->currencyRepository = $entityManager->getRepository(Currency::class);
        $this->paymentRepository = $entityManager->getRepository(Tax::class);
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

    public function getCurrencyChoices()
    {
        $currencyList = $this->currencyRepository->getCurrencyChoices();
        $currencies = [];

        foreach ($currencyList as $key => $value) {
            //continue if BTC
            if ($value['name'] === 'BTC') {
                continue;
            }
            $currencies[$value['name']] = $value['id'];
        }

        return $currencies;
    }



    /**
     * @param User $user
     * @return array
     */
    public function getAvailableQuarters(User $user)
    {
        $paymentDates = $this->paymentRepository->getPaymentsDatesByUserId($user->getId());
        $availableQuarters = [];
        $currentYear = 1;
        $currentQuarter = 0;
        foreach ($paymentDates as $paymentDate) {
            $year = $paymentDate['date']->format('Y');
            $month = $paymentDate['date']->format('n');
            $quarter = 'I';

            switch (true) {
                case ($month <= 3):
                    $quarter = 1;
                    break;
                case ($month <= 6):
                    $quarter = 2;
                    break;
                case ($month <= 9):
                    $quarter = 3;
                    break;
                case ($month <= 12):
                    $quarter = 4;
                    break;
            }

            if ($year == $currentYear && $quarter === $currentQuarter) {
                continue;
            }

            $availableQuarters["$quarter квартал $year"] = "$year-$quarter";
            $currentYear = $year;
            $currentQuarter = $quarter;
        }

        return $availableQuarters;
    }

}
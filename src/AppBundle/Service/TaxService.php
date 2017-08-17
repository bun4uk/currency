<?php
/**
 * Created by PhpStorm.
 * User: v.bunchuk
 * Date: 01/08/2016
 * Time: 15:56
 */

namespace AppBundle\Service;

use AppBundle\Entity\Currency;
use AppBundle\Entity\Repository\PaymentRepository;
use Doctrine\ORM\EntityManagerInterface;

class TaxService
{
    const TAX_RATE = 0.05;
    const MIN_SALARY = 3200;
    const SSC_TAX_RATE = 0.22;

    /**
     * Entity manager
     *
     * @var EntityManagerInterface $entityManager
     */
    protected $entityManager;

    /**
     * @var BankApi
     */
    protected $bankApiService;

    /**
     * @var PaymentRepository
     */
    protected $paymentRepository;

    /**
     * TaxService constructor.
     * @param EntityManagerInterface $entityManager
     * @param BankApi $bankApiService
     */
    public function __construct(EntityManagerInterface $entityManager, BankApi $bankApiService)
    {
        $this->entityManager = $entityManager;
        $this->currencyRepository = $entityManager->getRepository(Currency::class);
        $this->bankApiService = $bankApiService;
    }

    /**
     * @param $formData
     * @return array
     * @throws \Exception
     */
    public function getPaymentRates($formData)
    {
        $sumCurrency = 0;
        $hryvnaRate = null;
        if ($formData->getSumForeignCurrency()) {
            try {
                $hryvnaRateResponse = $this->bankApiService->getCurrencyRateToHryvna(
                    $this->currencyRepository->findOneBy(['id' => $formData->getCurrency()])->getName(),
                    $formData->getDate()->format('Ymd')
                );
            } catch (\Exception $e) {
                throw new \Exception('Данные нацбанка о курсе валют недоступны. Приносим свои извинения.');
            }
            $sumCurrency = $formData->getSumForeignCurrency() * $hryvnaRateResponse[0]['rate'];
            $hryvnaRate = $hryvnaRateResponse[0];
        }

        $sumHryvna = $formData->getSumHrn();
        $hryvnaTax = $sumHryvna * self::TAX_RATE;
        $currencyTax = $sumCurrency * self::TAX_RATE;
        $totalSumHrn = $sumHryvna + $sumCurrency;

        return [
            'sumHryvna' => $sumHryvna,
            'hryvnaTax' => $hryvnaTax,
            'sumCurrency' => $sumCurrency,
            'currencyTax' => $currencyTax,
            'hryvnaRate' => $hryvnaRate,
            'totalSumHrn' => $totalSumHrn
        ];

    }

}
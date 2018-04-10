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
use AppBundle\Entity\Tax;

class TaxService
{
    const TAX_RATE = 0.05;
    const MIN_SALARY = 3723;
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
     * @param Tax $payment
     * @return array
     * @throws \Exception
     */
    public function getPaymentRates(Tax $payment): array
    {
        if ('HRN' != $payment->getCurrency()->getName()) {
            try {
                $hrnRateResponse = $this->bankApiService->getCurrencyRateToHryvna(
                    $this->currencyRepository->findOneBy(['id' => $payment->getCurrency()])->getName(),
                    $payment->getDate()->format('Ymd')
                );
            } catch (\Exception $e) {
                throw new \Exception('Данные нацбанка о курсе валют недоступны. Приносим свои извинения.');
            }
            $paymentSum = $payment->getPaymentSum();
            $sumHrn = $payment->getPaymentSum() * $hrnRateResponse[0]['rate'];
            $hrnRate = $hrnRateResponse[0];
        } else {
            $paymentSum = $payment->getPaymentSum();
            return [
                'paymentSum' => $paymentSum,
                'paymentSumHrn' => $paymentSum,
                'tax' => $payment->getPaymentSum() * self::TAX_RATE,
                'hrnRate' => null
            ];
        }
        return [
            'paymentSum' => $paymentSum,
            'paymentSumHrn' => $sumHrn,
            'tax' => $paymentSum * $hrnRate['rate'] * self::TAX_RATE,
            'hrnRate' => $hrnRate,
        ];

    }

}
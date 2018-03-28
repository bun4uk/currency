<?php
/**
 * Created by PhpStorm.
 * User: v.bunchuk
 * Date: 06.02.17
 * Time: 17:31
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\User;
use AppBundle\Entity\Currency;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Tax
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\PaymentRepository")
 * @ORM\Table(name="tax")
 */
class Tax
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @Assert\GreaterThanOrEqual(0)
     * @ORM\Column(type="decimal", scale=2)
     */
    private $paymentSum;

    /**
     * @ORM\ManyToOne(targetEntity="Currency", fetch="EAGER")
     * @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     */
    private $currency;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="float")
     */
    private $taxSum;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $exchangeRate;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param User $user
     *
     * @return Tax
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get userId
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set sumHrn
     *
     * @param float $paymentSum
     *
     * @return Tax
     */
    public function setPaymentSum($paymentSum)
    {
        $this->paymentSum = $paymentSum;

        return $this;
    }

    /**
     * @return float
     */
    public function getPaymentSum()
    {
        return $this->paymentSum;
    }

    /**
     * Set currency
     *
     * @param Currency $currency
     *
     * @return Tax
     */
    public function setCurrency(Currency $currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return Currency
     */
    public function getCurrency():? Currency
    {
        return $this->currency;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Tax
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set currency
     *
     * @param float $taxSum
     *
     * @return Tax
     */
    public function setTaxSum($taxSum)
    {
        $this->taxSum = $taxSum;

        return $this;
    }

    /**
     * Get currency
     *
     * @return float
     */
    public function getTaxSum()
    {
        return $this->taxSum;
    }

    /**
     * Set currency
     *
     * @param float $exchangeRate
     *
     * @return Tax
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;

        return $this;
    }

    /**
     * Get currency
     *
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }
}

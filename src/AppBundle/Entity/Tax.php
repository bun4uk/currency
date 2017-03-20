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

/**
 * Class Tax
 * @package AppBundle\Entity
 *
 * @ORM\Entity
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
     * @ORM\Column(type="decimal", scale=2)
     */
    private $sumHrn;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $sumForeignCurrency;

    /**
     * @ORM\ManyToOne(targetEntity="Currency")
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
     * @param string $sumHrn
     *
     * @return Tax
     */
    public function setSumHrn($sumHrn)
    {
        $this->sumHrn = $sumHrn;

        return $this;
    }

    /**
     * Get sumHrn
     *
     * @return string
     */
    public function getSumHrn()
    {
        return $this->sumHrn;
    }

    /**
     * Set sumForeignCurrency
     *
     * @param string $sumForeignCurrency
     *
     * @return Tax
     */
    public function setSumForeignCurrency($sumForeignCurrency)
    {
        $this->sumForeignCurrency = $sumForeignCurrency;

        return $this;
    }

    /**
     * Get sumForeignCurrency
     *
     * @return string
     */
    public function getSumForeignCurrency()
    {
        return $this->sumForeignCurrency;
    }

    /**
     * Set currency
     *
     * @param integer $currency
     *
     * @return Tax
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return integer
     */
    public function getCurrency()
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
}

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
     * @ORM\Column(type="integer")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $userId;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $sumHrn;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $sumForeignCurrency;

    /**
     * @ORM\Column(type="integer")
     * @ORM\OneToOne(targetEntity="Currency")
     * @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     */
    private $currency;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;


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
     * Set userId
     *
     * @param integer $userId
     *
     * @return Tax
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
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
}

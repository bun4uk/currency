<?php

// src/AppBundle/Entity/Rate.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Rate
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\RateRepository")
 * @ORM\Table(name="rate")
 * @ORM\HasLifecycleCallbacks()
 */
class Rate
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $currencyId;

    /**
     * @ORM\Column(type="float")
     */
    private $buyRate;

    /**
     * @ORM\Column(type="float")
     */
    private $saleRate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creationDate;

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
     * Set currencyId
     *
     * @param integer $currencyId
     *
     * @return Rate
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * Get currencyId
     *
     * @return integer
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set buyRate
     *
     * @param float $buyRate
     *
     * @return Rate
     */
    public function setBuyRate($buyRate)
    {
        $this->buyRate = $buyRate;

        return $this;
    }

    /**
     * Get buyRate
     *
     * @return string
     */
    public function getBuyRate()
    {
        return $this->buyRate;
    }

    /**
     * Set saleRate
     *
     * @param float $saleRate
     *
     * @return Rate
     */
    public function setSaleRate($saleRate)
    {
        $this->saleRate = $saleRate;

        return $this;
    }

    /**
     * Get saleRate
     *
     * @return string
     */
    public function getSaleRate()
    {
        return $this->saleRate;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreationDateValue()
    {
        $this->creationDate = new \DateTime();
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return Rate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }
}

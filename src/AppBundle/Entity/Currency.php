<?php

// src/AppBundle/Entity/Currency.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Currency
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\CurrencyRepository")
 * @ORM\Table(name="currency")
 * @ORM\HasLifecycleCallbacks
 */
class Currency
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $symbol;

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
     * Set name
     *
     * @param string $name
     *
     * @return Currency
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set rate
     *
     * @param string $symbol
     *
     * @return Currency
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }
}

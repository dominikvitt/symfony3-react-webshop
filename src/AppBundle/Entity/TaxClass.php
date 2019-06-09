<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxClass
 *
 * @ORM\Table(name="tax_class")
 * @ORM\Entity
 */
class TaxClass
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="percentage", type="decimal", precision=4, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $percentage = '0.00';



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return TaxClass
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set percentage.
     *
     * @param string $percentage
     *
     * @return TaxClass
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Get percentage.
     *
     * @return string
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    public function __toString() {
        return (string)$this->id;
    }
}

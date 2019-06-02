<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productId;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=64, nullable=false)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="sku", type="string", length=64, nullable=false)
     */
    private $sku;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=128, nullable=false)
     */
    private $location;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="stock_status_id", type="integer", nullable=false)
     */
    private $stockStatusId;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="manufacturer_id", type="integer", nullable=false)
     */
    private $manufacturerId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="shipping", type="boolean", nullable=false)
     */
    private $shipping = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $price = '0.0000';

    /**
     * @var integer
     *
     * @ORM\Column(name="tax_class_id", type="integer", nullable=false)
     */
    private $taxClassId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_available", type="date", nullable=false)
     */
    private $dateAvailable = '0000-00-00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="subtract", type="boolean", nullable=false)
     */
    private $subtract = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="minimum", type="integer", nullable=false)
     */
    private $minimum = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="viewed", type="integer", nullable=false)
     */
    private $viewed = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=false)
     */
    private $dateAdded;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false)
     */
    private $dateModified;


}


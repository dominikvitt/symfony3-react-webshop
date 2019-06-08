<?php

namespace AppBundle\Entity;

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



    /**
     * Get productId.
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set model.
     *
     * @param string $model
     *
     * @return Product
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model.
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set sku.
     *
     * @param string $sku
     *
     * @return Product
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get sku.
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set location.
     *
     * @param string $location
     *
     * @return Product
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location.
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set quantity.
     *
     * @param int $quantity
     *
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set stockStatusId.
     *
     * @param int $stockStatusId
     *
     * @return Product
     */
    public function setStockStatusId($stockStatusId)
    {
        $this->stockStatusId = $stockStatusId;

        return $this;
    }

    /**
     * Get stockStatusId.
     *
     * @return int
     */
    public function getStockStatusId()
    {
        return $this->stockStatusId;
    }

    /**
     * Set image.
     *
     * @param string|null $image
     *
     * @return Product
     */
    public function setImage($image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set manufacturerId.
     *
     * @param int $manufacturerId
     *
     * @return Product
     */
    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;

        return $this;
    }

    /**
     * Get manufacturerId.
     *
     * @return int
     */
    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    /**
     * Set shipping.
     *
     * @param bool $shipping
     *
     * @return Product
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get shipping.
     *
     * @return bool
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Set price.
     *
     * @param string $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set taxClassId.
     *
     * @param int $taxClassId
     *
     * @return Product
     */
    public function setTaxClassId($taxClassId)
    {
        $this->taxClassId = $taxClassId;

        return $this;
    }

    /**
     * Get taxClassId.
     *
     * @return int
     */
    public function getTaxClassId()
    {
        return $this->taxClassId;
    }

    /**
     * Set dateAvailable.
     *
     * @param \DateTime $dateAvailable
     *
     * @return Product
     */
    public function setDateAvailable($dateAvailable)
    {
        $this->dateAvailable = $dateAvailable;

        return $this;
    }

    /**
     * Get dateAvailable.
     *
     * @return \DateTime
     */
    public function getDateAvailable()
    {
        return $this->dateAvailable;
    }

    /**
     * Set subtract.
     *
     * @param bool $subtract
     *
     * @return Product
     */
    public function setSubtract($subtract)
    {
        $this->subtract = $subtract;

        return $this;
    }

    /**
     * Get subtract.
     *
     * @return bool
     */
    public function getSubtract()
    {
        return $this->subtract;
    }

    /**
     * Set minimum.
     *
     * @param int $minimum
     *
     * @return Product
     */
    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;

        return $this;
    }

    /**
     * Get minimum.
     *
     * @return int
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * Set sortOrder.
     *
     * @param int $sortOrder
     *
     * @return Product
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder.
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set status.
     *
     * @param bool $status
     *
     * @return Product
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set viewed.
     *
     * @param int $viewed
     *
     * @return Product
     */
    public function setViewed($viewed)
    {
        $this->viewed = $viewed;

        return $this;
    }

    /**
     * Get viewed.
     *
     * @return int
     */
    public function getViewed()
    {
        return $this->viewed;
    }

    /**
     * Set dateAdded.
     *
     * @param \DateTime $dateAdded
     *
     * @return Product
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded.
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set dateModified.
     *
     * @param \DateTime $dateModified
     *
     * @return Product
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified.
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }
}

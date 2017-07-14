<?php

namespace SaleBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Discount.
 */
class Discount implements DiscountInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var \DateTime
     */
    protected $startDate;

    /**
     * @var \DateTime
     */
    protected $endDate;

    /**
     * @var float
     */
    protected $amount;

    /**
     * @var float
     */
    protected $percentile;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var ArrayCollection
     */
    protected $products;

    public function isAvailable()
    {
        $now = new \DateTime();

        return $this->getStartDate() >= $now && $now <= $this->getEndDate();
    }

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * Gets the value of id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the value of startDate.
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets the value of startDate.
     *
     * @param \DateTime $startDate the start date
     *
     * @return self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Gets the value of endDate.
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets the value of endDate.
     *
     * @param \DateTime $endDate the end date
     *
     * @return self
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Gets the value of amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets the value of amount.
     *
     * @param float $amount the amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Gets the value of percentile.
     *
     * @return float
     */
    public function getPercentile()
    {
        return $this->percentile;
    }

    /**
     * Sets the value of percentile.
     *
     * @param float $percentile the percentile
     *
     * @return self
     */
    public function setPercentile($percentile)
    {
        $this->percentile = $percentile;

        return $this;
    }

    /**
     * Gets the value of code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets the value of code.
     *
     * @param string $code the code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets the value of product.
     *
     * @return ProductInterface
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Adds a value to products.
     *
     * @param ProductInterface $product the product
     *
     * @return self
     */
    public function addProduct(ProductInterface $product)
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
        }

        return $this;
    }

    /**
     * Removes a value from products.
     *
     * @param ProductInterface $product the product
     *
     * @return self
     */
    public function removeProduct(ProductInterface $product)
    {
        if ($this->products->contains($product)) {
            $this->products->removeElement($product);
        }

        return $this;
    }
}

<?php

namespace SaleBundle\Model;

interface DiscountInterface
{
    public function isAvailable();
    public function getId();
    public function getStartDate();
    public function setStartDate(\DateTime $startDate);
    public function getEndDate();
    public function setEndDate(\DateTime $endDate);
    public function getAmount();
    public function setAmount($amount);
    public function getPercentile();
    public function setPercentile($percentile);
    public function getCode();
    public function setCode($code);
    public function getProduct();
    public function addProduct(ProductInterface $product);
    public function removeProduct(ProductInterface $product);
}

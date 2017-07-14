<?php

namespace SaleBundle\Model;

interface ProductInterface
{
    public function getId();
    public function getPrice();
    public function setPrice($price);
    public function getReference();
    public function setReference($reference);
}

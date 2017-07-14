<?php

namespace SaleBundle\Model;

interface CustomerInterface
{
    public function getId();
    public function getReference();
    public function setReference($reference);
    public function getFirstname();
    public function setFirstname($firstname);
    public function getLastname();
    public function setLastname($lastname);
    public function getBusinessName();
    public function setBusinessName($businessName);
}

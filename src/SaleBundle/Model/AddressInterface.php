<?php

namespace SaleBundle\Model;

interface AddressInterface
{
    public function getId();
    public function getAdressee();
    public function setAdressee($adressee);
    public function getStreet1();
    public function setStreet1($street1);
    public function getStreet2();
    public function setStreet2($street2);
    public function getDetails();
    public function setDetails($details);
    public function getZipcode();
    public function setZipcode($zipcode);
    public function getCity();
    public function setCity($city);
    public function getCountry();
    public function setCountry($country);
    public function getCustomer();
    public function setCustomer(CustomerInterface $customer);
}

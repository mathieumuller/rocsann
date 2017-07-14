<?php

namespace SaleBundle\Model;

interface OrderItemInterface
{
    public function getId();
    public function getQuantity();
    public function setQuantity($quantity);
    public function getVat();
    public function setVat($vat);
    public function getProduct();
    public function setProduct(ProductInterface $product);
    public function getOrder();
    public function setOrder(OrderInterface $order);
}

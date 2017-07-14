<?php

namespace SaleBundle\Model;

interface OrderInterface
{
    const ORDER_STATUS_INIT = 0;
    const ORDER_STATUS_CART = 1;
    const ORDER_STATUS_WAITING_PAYMENT = 2;
    const ORDER_STATUS_WAITING_DELIVERY = 3;
    const ORDER_STATUS_DELIVERED = 4;
    const ORDER_STATUS_CANCELLED = 5;

    const ORDER_PAYMENT_CASH = 0;
    const ORDER_PAYMENT_CC = 1;
    const ORDER_PAYMENT_PAYPAL = 2;
    const ORDER_PAYMENT_CHECK = 3;
    const ORDER_PAYMENT_GIFT_CARD = 4;
    const ORDER_PAYMENT_GRATIS = 5;

    public function getId();
    public function getReference();
    public function setReference($reference);
    public function getStatus();
    public function setStatus($status);
    public function getValidationDate();
    public function setValidationDate(\DateTime $validationDate);
    public function getPaymentMode();
    public function setPaymentMode($paymentMode);
    public function getPaymentDate();
    public function setPaymentDate(\DateTime $paymentDate);
    public function getDeliveryMode();
    public function setDeliveryMode($deliveryMode);
    public function getDeliveryAddress();
    public function setDeliveryAddress(AddressInterface $deliveryAddress);
    public function getDeliveryDate();
    public function setDeliveryDate(\DateTime $deliveryDate);
    public function getCancellationDate();
    public function setCancellationDate(\DateTime $cancellationDate);
    public function getCustomer();
    public function setCustomer(CustomerInterface $customer);
}

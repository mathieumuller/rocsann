<?php

namespace SaleBundle\Model;

/**
 * Order.
 */
class Order implements OrderInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $reference;

    /**
     * @var int
     */
    protected $status;

    /**
     * @var \DateTime
     */
    protected $validationDate;

    /**
     * @var string
     */
    protected $paymentMode;

    /**
     * @var \DateTime
     */
    protected $paymentDate;

    /**
     * @var string
     */
    protected $deliveryMode;

    /**
     * @var AddressInterface
     */
    protected $deliveryAddress;

    /**
     * @var \DateTime
     */
    protected $deliveryDate;

    /**
     * @var \DateTime
     */
    protected $cancellationDate;

    /**
     * @var CustomerInterface
     */
    protected $customer;

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
     * Gets the value of reference.
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets the value of reference.
     *
     * @param string $reference the reference
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Gets the value of status.
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the value of status.
     *
     * @param int $status the status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets the value of validationDate.
     *
     * @return \DateTime
     */
    public function getValidationDate()
    {
        return $this->validationDate;
    }

    /**
     * Sets the value of validationDate.
     *
     * @param \DateTime $validationDate the validation date
     *
     * @return self
     */
    public function setValidationDate(\DateTime $validationDate)
    {
        $this->validationDate = $validationDate;

        return $this;
    }

    /**
     * Gets the value of paymentMode.
     *
     * @return string
     */
    public function getPaymentMode()
    {
        return $this->paymentMode;
    }

    /**
     * Sets the value of paymentMode.
     *
     * @param $paymentMode the payment mode
     *
     * @return self
     */
    public function setPaymentMode($paymentMode)
    {
        $this->paymentMode = $paymentMode;

        return $this;
    }

    /**
     * Gets the value of paymentDate.
     *
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Sets the value of paymentDate.
     *
     * @param \DateTime $paymentDate the payment date
     *
     * @return self
     */
    public function setPaymentDate(\DateTime $paymentDate)
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    /**
     * Gets the value of deliveryMode.
     *
     * @return string
     */
    public function getDeliveryMode()
    {
        return $this->deliveryMode;
    }

    /**
     * Sets the value of deliveryMode.
     *
     * @param string $deliveryMode the delivery mode
     *
     * @return self
     */
    public function setDeliveryMode($deliveryMode)
    {
        $this->deliveryMode = $deliveryMode;

        return $this;
    }

    /**
     * Gets the value of deliveryAddress.
     *
     * @return AddressInterface
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Sets the value of deliveryAddress.
     *
     * @param AddressInterface $deliveryAddress the delivery address
     *
     * @return self
     */
    public function setDeliveryAddress(AddressInterface $deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * Gets the value of deliveryDate.
     *
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Sets the value of deliveryDate.
     *
     * @param \DateTime $deliveryDate the delivery date
     *
     * @return self
     */
    public function setDeliveryDate(\DateTime $deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Gets the value of cancellationDate.
     *
     * @return \DateTime
     */
    public function getCancellationDate()
    {
        return $this->cancellationDate;
    }

    /**
     * Sets the value of cancellationDate.
     *
     * @param \DateTime $cancellationDate the cancellation date
     *
     * @return self
     */
    public function setCancellationDate(\DateTime $cancellationDate)
    {
        $this->cancellationDate = $cancellationDate;

        return $this;
    }

    /**
     * Gets the value of customer.
     *
     * @return CustomerInterface
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets the value of customer.
     *
     * @param CustomerInterface $customer the customer
     *
     * @return self
     */
    public function setCustomer(CustomerInterface $customer)
    {
        $this->customer = $customer;

        return $this;
    }
}

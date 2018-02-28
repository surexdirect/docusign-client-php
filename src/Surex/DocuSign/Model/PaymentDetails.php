<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Model;

class PaymentDetails
{
    /**
     * @var string
     */
    protected $chargeId;
    /**
     * Specifies the three-letter.
     [ISO 4217][ISO4217] currency code for the payment.

     Supported currencies are:

     * AUD Australian dollar
     * CAD Canadian dollar
     * EUR Euro
     * GBP Great Britain pund
     * USD United States dollar

     Specifying any other ISO 4217 code for payments is an error.

     [ISO4217]:          https://en.wikipedia.org/wiki/ISO_4217

     *
     * @var string
     */
    protected $currencyCode;
    /**
     * A GUID that identifies the payment gateway.
     connected to the sender's DocuSign account.

     There is no public API
     for connecting payment gateway accounts
     You must connect and manage payment gateway accounts
     through the DocuSign Admin console
     and through your chosen payment gateway.

     You can get the gateway account ID
     in the Payments section
     of the DocuSign Admin console.


     [paymentgateways]:  https://support.docusign.com/en/guides/managing-payment-gateways

     *
     * @var string
     */
    protected $gatewayAccountId;
    /**
     * @var string
     */
    protected $gatewayName;
    /**
     * A payment formula can have.
     one or more line items
     that provide detail about
     individual items in a payment request.

     The list of line items
     are returned as metadata
     to the payment gateway.

     *
     * @var PaymentLineItem[]
     */
    protected $lineItems;
    /**
     * This read-only property describes the status of a payment.

     * `new`<br>
     This is a new payment request.
     The envelope has been created,
     but no payment authorizations have been made.

     * `auth_complete`<br>
     A recipient has entered their credit card information,
     but the envelope has not been completed.
     The card has not been charged.

     * `payment_complete`<br>
     The recipient's card has been charged.

     * `payment_capture_failed`<br>
     Final charge failed.
     This can happen when too much time
     passes between authorizing the payment
     and completing the document.

     *
     * @var string
     */
    protected $status;
    /**
     * Describes information.
     about the `total` of a payment.

     *
     * @var Money
     */
    protected $total;

    /**
     * @return string
     */
    public function getChargeId(): ?string
    {
        return $this->chargeId;
    }

    /**
     * @param string $chargeId
     *
     * @return self
     */
    public function setChargeId(?string $chargeId): self
    {
        $this->chargeId = $chargeId;

        return $this;
    }

    /**
     * Specifies the three-letter.
     [ISO 4217][ISO4217] currency code for the payment.

     Supported currencies are:

     * AUD Australian dollar
     * CAD Canadian dollar
     * EUR Euro
     * GBP Great Britain pund
     * USD United States dollar

     Specifying any other ISO 4217 code for payments is an error.

     [ISO4217]:          https://en.wikipedia.org/wiki/ISO_4217

     *
     * @return string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Specifies the three-letter.
     [ISO 4217][ISO4217] currency code for the payment.

     Supported currencies are:

     * AUD Australian dollar
     * CAD Canadian dollar
     * EUR Euro
     * GBP Great Britain pund
     * USD United States dollar

     Specifying any other ISO 4217 code for payments is an error.

     [ISO4217]:          https://en.wikipedia.org/wiki/ISO_4217

     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * A GUID that identifies the payment gateway.
     connected to the sender's DocuSign account.

     There is no public API
     for connecting payment gateway accounts
     You must connect and manage payment gateway accounts
     through the DocuSign Admin console
     and through your chosen payment gateway.

     You can get the gateway account ID
     in the Payments section
     of the DocuSign Admin console.


     [paymentgateways]:  https://support.docusign.com/en/guides/managing-payment-gateways

     *
     * @return string
     */
    public function getGatewayAccountId(): ?string
    {
        return $this->gatewayAccountId;
    }

    /**
     * A GUID that identifies the payment gateway.
     connected to the sender's DocuSign account.

     There is no public API
     for connecting payment gateway accounts
     You must connect and manage payment gateway accounts
     through the DocuSign Admin console
     and through your chosen payment gateway.

     You can get the gateway account ID
     in the Payments section
     of the DocuSign Admin console.


     [paymentgateways]:  https://support.docusign.com/en/guides/managing-payment-gateways

     *
     * @param string $gatewayAccountId
     *
     * @return self
     */
    public function setGatewayAccountId(?string $gatewayAccountId): self
    {
        $this->gatewayAccountId = $gatewayAccountId;

        return $this;
    }

    /**
     * @return string
     */
    public function getGatewayName(): ?string
    {
        return $this->gatewayName;
    }

    /**
     * @param string $gatewayName
     *
     * @return self
     */
    public function setGatewayName(?string $gatewayName): self
    {
        $this->gatewayName = $gatewayName;

        return $this;
    }

    /**
     * A payment formula can have.
     one or more line items
     that provide detail about
     individual items in a payment request.

     The list of line items
     are returned as metadata
     to the payment gateway.

     *
     * @return PaymentLineItem[]
     */
    public function getLineItems(): ?array
    {
        return $this->lineItems;
    }

    /**
     * A payment formula can have.
     one or more line items
     that provide detail about
     individual items in a payment request.

     The list of line items
     are returned as metadata
     to the payment gateway.

     *
     * @param PaymentLineItem[] $lineItems
     *
     * @return self
     */
    public function setLineItems(?array $lineItems): self
    {
        $this->lineItems = $lineItems;

        return $this;
    }

    /**
     * This read-only property describes the status of a payment.

     * `new`<br>
     This is a new payment request.
     The envelope has been created,
     but no payment authorizations have been made.

     * `auth_complete`<br>
     A recipient has entered their credit card information,
     but the envelope has not been completed.
     The card has not been charged.

     * `payment_complete`<br>
     The recipient's card has been charged.

     * `payment_capture_failed`<br>
     Final charge failed.
     This can happen when too much time
     passes between authorizing the payment
     and completing the document.

     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * This read-only property describes the status of a payment.

     * `new`<br>
     This is a new payment request.
     The envelope has been created,
     but no payment authorizations have been made.

     * `auth_complete`<br>
     A recipient has entered their credit card information,
     but the envelope has not been completed.
     The card has not been charged.

     * `payment_complete`<br>
     The recipient's card has been charged.

     * `payment_capture_failed`<br>
     Final charge failed.
     This can happen when too much time
     passes between authorizing the payment
     and completing the document.

     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Describes information.
     about the `total` of a payment.

     *
     * @return Money
     */
    public function getTotal(): ?Money
    {
        return $this->total;
    }

    /**
     * Describes information.
     about the `total` of a payment.

     *
     * @param Money $total
     *
     * @return self
     */
    public function setTotal(?Money $total): self
    {
        $this->total = $total;

        return $this;
    }
}

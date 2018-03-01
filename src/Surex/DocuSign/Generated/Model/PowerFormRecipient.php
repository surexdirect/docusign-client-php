<?php

/*
 * Copyright (c) 2018, SurexDirect Ltd.
 */

namespace Surex\DocuSign\Generated\Model;

class PowerFormRecipient
{
    /**
     * If a value is provided, the recipient must enter the value as the access code to view and sign the envelope.

     Maximum Length: 50 characters and it must conform to the account's access code format setting.

     If blank, but the signer `accessCode` property is set in the envelope, then that value is used.

     If blank and the signer `accessCode` property is not set, then the access code is not required.
     *
     * @var string
     */
    protected $accessCode;
    /**
     * @var string
     */
    protected $accessCodeLocked;
    /**
     * @var string
     */
    protected $accessCodeRequired;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $emailLocked;
    /**
     * Specifies authentication check by name. The names used here must be the same as the authentication type names used by the account (these name can also be found in the web console sending interface in the Identify list for a recipient,) This overrides any default authentication setting.
     *Example*: Your account has ID Check and SMS Authentication available and in the web console Identify list these appear as 'ID Check $' and 'SMS Auth $'. To use ID check in an envelope, the idCheckConfigurationName should be 'ID Check '. If you wanted to use SMS, it would be 'SMS Auth $' and you would need to add you would need to add phone number information to the `smsAuthentication` node.
     *
     * @var string
     */
    protected $idCheckConfigurationName;
    /**
     * @var string
     */
    protected $idCheckRequired;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $recipientType;
    /**
     * Optional element. Specifies the role name associated with the recipient.<br/><br/>This is required when working with template recipients.
     *
     * @var string
     */
    protected $roleName;
    /**
     * Specifies the routing order of the recipient in the envelope.
     *
     * @var string
     */
    protected $routingOrder;
    /**
     * @var string
     */
    protected $templateRequiresIdLookup;
    /**
     * @var string
     */
    protected $userNameLocked;

    /**
     * If a value is provided, the recipient must enter the value as the access code to view and sign the envelope.

     Maximum Length: 50 characters and it must conform to the account's access code format setting.

     If blank, but the signer `accessCode` property is set in the envelope, then that value is used.

     If blank and the signer `accessCode` property is not set, then the access code is not required.
     *
     * @return string
     */
    public function getAccessCode(): ?string
    {
        return $this->accessCode;
    }

    /**
     * If a value is provided, the recipient must enter the value as the access code to view and sign the envelope.

     Maximum Length: 50 characters and it must conform to the account's access code format setting.

     If blank, but the signer `accessCode` property is set in the envelope, then that value is used.

     If blank and the signer `accessCode` property is not set, then the access code is not required.
     *
     * @param string $accessCode
     *
     * @return self
     */
    public function setAccessCode(?string $accessCode): self
    {
        $this->accessCode = $accessCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccessCodeLocked(): ?string
    {
        return $this->accessCodeLocked;
    }

    /**
     * @param string $accessCodeLocked
     *
     * @return self
     */
    public function setAccessCodeLocked(?string $accessCodeLocked): self
    {
        $this->accessCodeLocked = $accessCodeLocked;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccessCodeRequired(): ?string
    {
        return $this->accessCodeRequired;
    }

    /**
     * @param string $accessCodeRequired
     *
     * @return self
     */
    public function setAccessCodeRequired(?string $accessCodeRequired): self
    {
        $this->accessCodeRequired = $accessCodeRequired;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailLocked(): ?string
    {
        return $this->emailLocked;
    }

    /**
     * @param string $emailLocked
     *
     * @return self
     */
    public function setEmailLocked(?string $emailLocked): self
    {
        $this->emailLocked = $emailLocked;

        return $this;
    }

    /**
     * Specifies authentication check by name. The names used here must be the same as the authentication type names used by the account (these name can also be found in the web console sending interface in the Identify list for a recipient,) This overrides any default authentication setting.
     *Example*: Your account has ID Check and SMS Authentication available and in the web console Identify list these appear as 'ID Check $' and 'SMS Auth $'. To use ID check in an envelope, the idCheckConfigurationName should be 'ID Check '. If you wanted to use SMS, it would be 'SMS Auth $' and you would need to add you would need to add phone number information to the `smsAuthentication` node.
     *
     * @return string
     */
    public function getIdCheckConfigurationName(): ?string
    {
        return $this->idCheckConfigurationName;
    }

    /**
     * Specifies authentication check by name. The names used here must be the same as the authentication type names used by the account (these name can also be found in the web console sending interface in the Identify list for a recipient,) This overrides any default authentication setting.
     *Example*: Your account has ID Check and SMS Authentication available and in the web console Identify list these appear as 'ID Check $' and 'SMS Auth $'. To use ID check in an envelope, the idCheckConfigurationName should be 'ID Check '. If you wanted to use SMS, it would be 'SMS Auth $' and you would need to add you would need to add phone number information to the `smsAuthentication` node.
     *
     * @param string $idCheckConfigurationName
     *
     * @return self
     */
    public function setIdCheckConfigurationName(?string $idCheckConfigurationName): self
    {
        $this->idCheckConfigurationName = $idCheckConfigurationName;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdCheckRequired(): ?string
    {
        return $this->idCheckRequired;
    }

    /**
     * @param string $idCheckRequired
     *
     * @return self
     */
    public function setIdCheckRequired(?string $idCheckRequired): self
    {
        $this->idCheckRequired = $idCheckRequired;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientType(): ?string
    {
        return $this->recipientType;
    }

    /**
     * @param string $recipientType
     *
     * @return self
     */
    public function setRecipientType(?string $recipientType): self
    {
        $this->recipientType = $recipientType;

        return $this;
    }

    /**
     * Optional element. Specifies the role name associated with the recipient.<br/><br/>This is required when working with template recipients.
     *
     * @return string
     */
    public function getRoleName(): ?string
    {
        return $this->roleName;
    }

    /**
     * Optional element. Specifies the role name associated with the recipient.<br/><br/>This is required when working with template recipients.
     *
     * @param string $roleName
     *
     * @return self
     */
    public function setRoleName(?string $roleName): self
    {
        $this->roleName = $roleName;

        return $this;
    }

    /**
     * Specifies the routing order of the recipient in the envelope.
     *
     * @return string
     */
    public function getRoutingOrder(): ?string
    {
        return $this->routingOrder;
    }

    /**
     * Specifies the routing order of the recipient in the envelope.
     *
     * @param string $routingOrder
     *
     * @return self
     */
    public function setRoutingOrder(?string $routingOrder): self
    {
        $this->routingOrder = $routingOrder;

        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateRequiresIdLookup(): ?string
    {
        return $this->templateRequiresIdLookup;
    }

    /**
     * @param string $templateRequiresIdLookup
     *
     * @return self
     */
    public function setTemplateRequiresIdLookup(?string $templateRequiresIdLookup): self
    {
        $this->templateRequiresIdLookup = $templateRequiresIdLookup;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserNameLocked(): ?string
    {
        return $this->userNameLocked;
    }

    /**
     * @param string $userNameLocked
     *
     * @return self
     */
    public function setUserNameLocked(?string $userNameLocked): self
    {
        $this->userNameLocked = $userNameLocked;

        return $this;
    }
}

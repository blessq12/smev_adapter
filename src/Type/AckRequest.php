<?php

namespace App\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AckRequest implements RequestInterface
{
    /**
     * @var \App\Type\AckTargetMessage
     */
    private \App\Type\AckTargetMessage $AckTargetMessage;

    /**
     * ЭП-ОВ или ЭП-ПГУ. Подписан элемент preceding-sibling::basic:AckTargetMessage.
     *
     * @var null | \App\Type\XMLDSigSignatureType
     */
    private ?\App\Type\XMLDSigSignatureType $CallerInformationSystemSignature;

    /**
     * Constructor
     *
     * @param \App\Type\AckTargetMessage $AckTargetMessage
     * @param null | \App\Type\XMLDSigSignatureType $CallerInformationSystemSignature
     */
    public function __construct(\App\Type\AckTargetMessage $AckTargetMessage, ?\App\Type\XMLDSigSignatureType $CallerInformationSystemSignature)
    {
        $this->AckTargetMessage = $AckTargetMessage;
        $this->CallerInformationSystemSignature = $CallerInformationSystemSignature;
    }

    /**
     * @return \App\Type\AckTargetMessage
     */
    public function getAckTargetMessage() : \App\Type\AckTargetMessage
    {
        return $this->AckTargetMessage;
    }

    /**
     * @param \App\Type\AckTargetMessage $AckTargetMessage
     * @return static
     */
    public function withAckTargetMessage(\App\Type\AckTargetMessage $AckTargetMessage) : static
    {
        $new = clone $this;
        $new->AckTargetMessage = $AckTargetMessage;

        return $new;
    }

    /**
     * @return null | \App\Type\XMLDSigSignatureType
     */
    public function getCallerInformationSystemSignature() : ?\App\Type\XMLDSigSignatureType
    {
        return $this->CallerInformationSystemSignature;
    }

    /**
     * @param null | \App\Type\XMLDSigSignatureType $CallerInformationSystemSignature
     * @return static
     */
    public function withCallerInformationSystemSignature(?\App\Type\XMLDSigSignatureType $CallerInformationSystemSignature) : static
    {
        $new = clone $this;
        $new->CallerInformationSystemSignature = $CallerInformationSystemSignature;

        return $new;
    }
}


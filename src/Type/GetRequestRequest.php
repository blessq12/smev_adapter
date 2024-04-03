<?php

namespace App\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetRequestRequest implements RequestInterface
{
    /**
     * См. описание {urn://x-artefacts-smev-gov-ru/services/message-exchange/types/basic/1.1}MessageTypeSelector
     *
     * @var \App\Type\MessageTypeSelector
     */
    private \App\Type\MessageTypeSelector $MessageTypeSelector;

    /**
     * ЭП-ОВ или ЭП-ПГУ. Подписан элемент //MessageTypeSelector.
     *
     * @var null | \App\Type\XMLDSigSignatureType
     */
    private ?\App\Type\XMLDSigSignatureType $CallerInformationSystemSignature;

    /**
     * Constructor
     *
     * @param \App\Type\MessageTypeSelector $MessageTypeSelector
     * @param null | \App\Type\XMLDSigSignatureType $CallerInformationSystemSignature
     */
    public function __construct(\App\Type\MessageTypeSelector $MessageTypeSelector, ?\App\Type\XMLDSigSignatureType $CallerInformationSystemSignature)
    {
        $this->MessageTypeSelector = $MessageTypeSelector;
        $this->CallerInformationSystemSignature = $CallerInformationSystemSignature;
    }

    /**
     * @return \App\Type\MessageTypeSelector
     */
    public function getMessageTypeSelector() : \App\Type\MessageTypeSelector
    {
        return $this->MessageTypeSelector;
    }

    /**
     * @param \App\Type\MessageTypeSelector $MessageTypeSelector
     * @return static
     */
    public function withMessageTypeSelector(\App\Type\MessageTypeSelector $MessageTypeSelector) : static
    {
        $new = clone $this;
        $new->MessageTypeSelector = $MessageTypeSelector;

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


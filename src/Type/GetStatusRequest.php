<?php

namespace App\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetStatusRequest implements RequestInterface
{
    /**
     * @var \App\Type\Timestamp
     */
    private \App\Type\Timestamp $Timestamp;

    /**
     * ЭП-ОВ или ЭП-ПГУ. Подписан элемент //Id.
     *
     * @var \App\Type\XMLDSigSignatureType
     */
    private \App\Type\XMLDSigSignatureType $CallerInformationSystemSignature;

    /**
     * Constructor
     *
     * @param \App\Type\Timestamp $Timestamp
     * @param \App\Type\XMLDSigSignatureType $CallerInformationSystemSignature
     */
    public function __construct(\App\Type\Timestamp $Timestamp, \App\Type\XMLDSigSignatureType $CallerInformationSystemSignature)
    {
        $this->Timestamp = $Timestamp;
        $this->CallerInformationSystemSignature = $CallerInformationSystemSignature;
    }

    /**
     * @return \App\Type\Timestamp
     */
    public function getTimestamp() : \App\Type\Timestamp
    {
        return $this->Timestamp;
    }

    /**
     * @param \App\Type\Timestamp $Timestamp
     * @return static
     */
    public function withTimestamp(\App\Type\Timestamp $Timestamp) : static
    {
        $new = clone $this;
        $new->Timestamp = $Timestamp;

        return $new;
    }

    /**
     * @return \App\Type\XMLDSigSignatureType
     */
    public function getCallerInformationSystemSignature() : \App\Type\XMLDSigSignatureType
    {
        return $this->CallerInformationSystemSignature;
    }

    /**
     * @param \App\Type\XMLDSigSignatureType $CallerInformationSystemSignature
     * @return static
     */
    public function withCallerInformationSystemSignature(\App\Type\XMLDSigSignatureType $CallerInformationSystemSignature) : static
    {
        $new = clone $this;
        $new->CallerInformationSystemSignature = $CallerInformationSystemSignature;

        return $new;
    }
}


<?php

namespace App\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetIncomingQueueStatisticsRequest implements RequestInterface
{
    /**
     * Идентификатор нода.
     *
     * @var null | string
     */
    private ?string $NodeID;

    /**
     * @var \App\Type\Timestamp
     */
    private \App\Type\Timestamp $Timestamp;

    /**
     * ЭП-ОВ или ЭП-ПГУ. Подписан элемент //СurrentTimestamp.
     *
     * @var null | \App\Type\XMLDSigSignatureType
     */
    private ?\App\Type\XMLDSigSignatureType $CallerInformationSystemSignature;

    /**
     * Constructor
     *
     * @param null | string $NodeID
     * @param \App\Type\Timestamp $Timestamp
     * @param null | \App\Type\XMLDSigSignatureType $CallerInformationSystemSignature
     */
    public function __construct(?string $NodeID, \App\Type\Timestamp $Timestamp, ?\App\Type\XMLDSigSignatureType $CallerInformationSystemSignature)
    {
        $this->NodeID = $NodeID;
        $this->Timestamp = $Timestamp;
        $this->CallerInformationSystemSignature = $CallerInformationSystemSignature;
    }

    /**
     * @return null | string
     */
    public function getNodeID() : ?string
    {
        return $this->NodeID;
    }

    /**
     * @param null | string $NodeID
     * @return static
     */
    public function withNodeID(?string $NodeID) : static
    {
        $new = clone $this;
        $new->NodeID = $NodeID;

        return $new;
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


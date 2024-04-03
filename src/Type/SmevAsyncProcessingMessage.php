<?php

namespace App\Type;

class SmevAsyncProcessingMessage
{
    /**
     * @var null | \App\Type\AsyncProcessingStatusData
     */
    private ?\App\Type\AsyncProcessingStatusData $AsyncProcessingStatusData;

    /**
     * ЭП-СМЭВ. Подписан элемент preceding-sibling:
     *
     * @var null | \App\Type\XMLDSigSignatureType
     */
    private ?\App\Type\XMLDSigSignatureType $SMEVSignature;

    /**
     * @return null | \App\Type\AsyncProcessingStatusData
     */
    public function getAsyncProcessingStatusData() : ?\App\Type\AsyncProcessingStatusData
    {
        return $this->AsyncProcessingStatusData;
    }

    /**
     * @param null | \App\Type\AsyncProcessingStatusData $AsyncProcessingStatusData
     * @return static
     */
    public function withAsyncProcessingStatusData(?\App\Type\AsyncProcessingStatusData $AsyncProcessingStatusData) : static
    {
        $new = clone $this;
        $new->AsyncProcessingStatusData = $AsyncProcessingStatusData;

        return $new;
    }

    /**
     * @return null | \App\Type\XMLDSigSignatureType
     */
    public function getSMEVSignature() : ?\App\Type\XMLDSigSignatureType
    {
        return $this->SMEVSignature;
    }

    /**
     * @param null | \App\Type\XMLDSigSignatureType $SMEVSignature
     * @return static
     */
    public function withSMEVSignature(?\App\Type\XMLDSigSignatureType $SMEVSignature) : static
    {
        $new = clone $this;
        $new->SMEVSignature = $SMEVSignature;

        return $new;
    }
}


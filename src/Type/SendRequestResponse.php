<?php

namespace App\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendRequestResponse implements ResultInterface
{
    /**
     * Данные о сообщении: ID, присвоенный СМЭВ, дата приёма по часам СМЭВ, результат маршрутизации, etc.
     *
     * @var \App\Type\MessageMetadata
     */
    private \App\Type\MessageMetadata $MessageMetadata;

    /**
     * ЭП-СМЭВ. Подписан элемент //MessageMetadata.
     *  Подпись оставлена необязательной, чтобы клиентов можно было тестировать с упрощёнными эмуляторами СМЭВ.
     *
     * @var null | \App\Type\XMLDSigSignatureType
     */
    private ?\App\Type\XMLDSigSignatureType $SMEVSignature;

    /**
     * @return \App\Type\MessageMetadata
     */
    public function getMessageMetadata() : \App\Type\MessageMetadata
    {
        return $this->MessageMetadata;
    }

    /**
     * @param \App\Type\MessageMetadata $MessageMetadata
     * @return static
     */
    public function withMessageMetadata(\App\Type\MessageMetadata $MessageMetadata) : static
    {
        $new = clone $this;
        $new->MessageMetadata = $MessageMetadata;

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


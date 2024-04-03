<?php

namespace App\Type;

class Response
{
    /**
     * Строковое представление UUID.
     *  В СМЭВ UUID используются в качестве идентификаторов сообщений.
     *  Идентификаторы присваиваются сообщеням отправителями.
     *
     * @var null | string
     */
    private ?string $OriginalMessageId;

    /**
     * @var null | string
     */
    private ?string $OriginalTransactionCode;

    /**
     * Идентификатор сообщения, порождающего цепочку сообщений.
     *  При отправке подчиненных сообщений значение соответствует MessageID корневого сообщения цепочки сообщений.
     *  Для корневого сообщения значение совпадает с MessageID
     *
     * @var null | string
     */
    private ?string $ReferenceMessageID;

    /**
     * @var \App\Type\SenderProvidedResponseData
     */
    private \App\Type\SenderProvidedResponseData $SenderProvidedResponseData;

    /**
     * Маршрутная информация, заполняемая СМЭВ.
     *
     * @var \App\Type\MessageMetadata
     */
    private \App\Type\MessageMetadata $MessageMetadata;

    /**
     * @var null | \App\Type\FSAttachmentsList
     */
    private ?\App\Type\FSAttachmentsList $FSAttachmentsList;

    /**
     * ЭП-ОВ или ЭП-ПГУ отправителя. Подписан элемент //SenderProvidedResponseData
     *
     * @var null | \App\Type\XMLDSigSignatureType
     */
    private ?\App\Type\XMLDSigSignatureType $SenderInformationSystemSignature;

    /**
     * @var null | string
     */
    private ?string $Id;

    /**
     * @return null | string
     */
    public function getOriginalMessageId() : ?string
    {
        return $this->OriginalMessageId;
    }

    /**
     * @param null | string $OriginalMessageId
     * @return static
     */
    public function withOriginalMessageId(?string $OriginalMessageId) : static
    {
        $new = clone $this;
        $new->OriginalMessageId = $OriginalMessageId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOriginalTransactionCode() : ?string
    {
        return $this->OriginalTransactionCode;
    }

    /**
     * @param null | string $OriginalTransactionCode
     * @return static
     */
    public function withOriginalTransactionCode(?string $OriginalTransactionCode) : static
    {
        $new = clone $this;
        $new->OriginalTransactionCode = $OriginalTransactionCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReferenceMessageID() : ?string
    {
        return $this->ReferenceMessageID;
    }

    /**
     * @param null | string $ReferenceMessageID
     * @return static
     */
    public function withReferenceMessageID(?string $ReferenceMessageID) : static
    {
        $new = clone $this;
        $new->ReferenceMessageID = $ReferenceMessageID;

        return $new;
    }

    /**
     * @return \App\Type\SenderProvidedResponseData
     */
    public function getSenderProvidedResponseData() : \App\Type\SenderProvidedResponseData
    {
        return $this->SenderProvidedResponseData;
    }

    /**
     * @param \App\Type\SenderProvidedResponseData $SenderProvidedResponseData
     * @return static
     */
    public function withSenderProvidedResponseData(\App\Type\SenderProvidedResponseData $SenderProvidedResponseData) : static
    {
        $new = clone $this;
        $new->SenderProvidedResponseData = $SenderProvidedResponseData;

        return $new;
    }

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
     * @return null | \App\Type\FSAttachmentsList
     */
    public function getFSAttachmentsList() : ?\App\Type\FSAttachmentsList
    {
        return $this->FSAttachmentsList;
    }

    /**
     * @param null | \App\Type\FSAttachmentsList $FSAttachmentsList
     * @return static
     */
    public function withFSAttachmentsList(?\App\Type\FSAttachmentsList $FSAttachmentsList) : static
    {
        $new = clone $this;
        $new->FSAttachmentsList = $FSAttachmentsList;

        return $new;
    }

    /**
     * @return null | \App\Type\XMLDSigSignatureType
     */
    public function getSenderInformationSystemSignature() : ?\App\Type\XMLDSigSignatureType
    {
        return $this->SenderInformationSystemSignature;
    }

    /**
     * @param null | \App\Type\XMLDSigSignatureType $SenderInformationSystemSignature
     * @return static
     */
    public function withSenderInformationSystemSignature(?\App\Type\XMLDSigSignatureType $SenderInformationSystemSignature) : static
    {
        $new = clone $this;
        $new->SenderInformationSystemSignature = $SenderInformationSystemSignature;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getId() : ?string
    {
        return $this->Id;
    }

    /**
     * @param null | string $Id
     * @return static
     */
    public function withId(?string $Id) : static
    {
        $new = clone $this;
        $new->Id = $Id;

        return $new;
    }
}


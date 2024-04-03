<?php

namespace App\Type;

class Cancel
{
    /**
     * Ссылка на запрос, который нужно отменить.
     *  Сюда нужно писать ID СМЭВ-сообщения, который был передан при отправке запроса в элементе
     *  //SendRequestRequest/SenderProvidedRequestData/MessageID.
     *
     * @var \App\Type\MessageReference
     */
    private \App\Type\MessageReference $MessageReference;

    /**
     * Идентификатор, присвоенный СМЭВ уведомлению об отмене.
     *  Генерируется в соответствии с RFC-4122, по варианту 1 (на основании MAC-адреса и текущего времени).
     *
     * @var string
     */
    private string $MessageID;

    /**
     * Маршрутная информация, заполняемая СМЭВ.
     *
     * @var \App\Type\MessageMetadata
     */
    private \App\Type\MessageMetadata $MessageMetadata;

    /**
     * ЭП-ОВ или ЭП-ПГУ отправителя. Подписан элемент //SenderProvidedCancelData
     *
     * @var null | \App\Type\XMLDSigSignatureType
     */
    private ?\App\Type\XMLDSigSignatureType $SenderInformationSystemSignature;

    /**
     * @var null | string
     */
    private ?string $Id;

    /**
     * @return \App\Type\MessageReference
     */
    public function getMessageReference() : \App\Type\MessageReference
    {
        return $this->MessageReference;
    }

    /**
     * @param \App\Type\MessageReference $MessageReference
     * @return static
     */
    public function withMessageReference(\App\Type\MessageReference $MessageReference) : static
    {
        $new = clone $this;
        $new->MessageReference = $MessageReference;

        return $new;
    }

    /**
     * @return string
     */
    public function getMessageID() : string
    {
        return $this->MessageID;
    }

    /**
     * @param string $MessageID
     * @return static
     */
    public function withMessageID(string $MessageID) : static
    {
        $new = clone $this;
        $new->MessageID = $MessageID;

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


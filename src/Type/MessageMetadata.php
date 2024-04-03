<?php

namespace App\Type;

class MessageMetadata
{
    /**
     * Строковое представление UUID.
     *  В СМЭВ UUID используются в качестве идентификаторов сообщений.
     *  Идентификаторы присваиваются сообщеням отправителями.
     *
     * @var null | string
     */
    private ?string $MessageId;

    /**
     * @var 'REQUEST' | 'BROADCAST' | 'RESPONSE' | 'CANCEL'
     */
    private string $MessageType;

    /**
     * Информация об отправителе сообщения.
     *
     * @var \App\Type\Sender
     */
    private \App\Type\Sender $Sender;

    /**
     * Дата и время отправки сообщения в СМЭВ.
     *
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $SendingTimestamp;

    /**
     * @var null | string
     */
    private ?string $MessageBroker;

    /**
     * @var string
     */
    private string $DestinationName;

    /**
     * Получатель сообщения (вычислен маршрутизатором).
     *  Для широковещательных сообщений не заполняется.
     *
     * @var null | \App\Type\Recipient
     */
    private ?\App\Type\Recipient $Recipient;

    /**
     * Дополнительная информация о сообщении.
     *
     * @var \App\Type\SupplementaryData
     */
    private \App\Type\SupplementaryData $SupplementaryData;

    /**
     * Дата и время доставки сообщения, по часам СМЭВ.
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $DeliveryTimestamp;

    /**
     * @var null | 'doesNotExist' | 'requestIsQueued' | 'requestIsAcceptedBySmev' | 'requestIsRejectedBySmev' | 'underProcessing' | 'responseIsAcceptedBySmev' | 'cancelled' | 'responseIsDelivered'
     */
    private ?string $Status;

    /**
     * @var null | string
     */
    private ?string $Id;

    /**
     * @return null | string
     */
    public function getMessageId() : ?string
    {
        return $this->MessageId;
    }

    /**
     * @param null | string $MessageId
     * @return static
     */
    public function withMessageId(?string $MessageId) : static
    {
        $new = clone $this;
        $new->MessageId = $MessageId;

        return $new;
    }

    /**
     * @return 'REQUEST' | 'BROADCAST' | 'RESPONSE' | 'CANCEL'
     */
    public function getMessageType() : string
    {
        return $this->MessageType;
    }

    /**
     * @param 'REQUEST' | 'BROADCAST' | 'RESPONSE' | 'CANCEL' $MessageType
     * @return static
     */
    public function withMessageType(string $MessageType) : static
    {
        $new = clone $this;
        $new->MessageType = $MessageType;

        return $new;
    }

    /**
     * @return \App\Type\Sender
     */
    public function getSender() : \App\Type\Sender
    {
        return $this->Sender;
    }

    /**
     * @param \App\Type\Sender $Sender
     * @return static
     */
    public function withSender(\App\Type\Sender $Sender) : static
    {
        $new = clone $this;
        $new->Sender = $Sender;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getSendingTimestamp() : \DateTimeInterface
    {
        return $this->SendingTimestamp;
    }

    /**
     * @param \DateTimeInterface $SendingTimestamp
     * @return static
     */
    public function withSendingTimestamp(\DateTimeInterface $SendingTimestamp) : static
    {
        $new = clone $this;
        $new->SendingTimestamp = $SendingTimestamp;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMessageBroker() : ?string
    {
        return $this->MessageBroker;
    }

    /**
     * @param null | string $MessageBroker
     * @return static
     */
    public function withMessageBroker(?string $MessageBroker) : static
    {
        $new = clone $this;
        $new->MessageBroker = $MessageBroker;

        return $new;
    }

    /**
     * @return string
     */
    public function getDestinationName() : string
    {
        return $this->DestinationName;
    }

    /**
     * @param string $DestinationName
     * @return static
     */
    public function withDestinationName(string $DestinationName) : static
    {
        $new = clone $this;
        $new->DestinationName = $DestinationName;

        return $new;
    }

    /**
     * @return null | \App\Type\Recipient
     */
    public function getRecipient() : ?\App\Type\Recipient
    {
        return $this->Recipient;
    }

    /**
     * @param null | \App\Type\Recipient $Recipient
     * @return static
     */
    public function withRecipient(?\App\Type\Recipient $Recipient) : static
    {
        $new = clone $this;
        $new->Recipient = $Recipient;

        return $new;
    }

    /**
     * @return \App\Type\SupplementaryData
     */
    public function getSupplementaryData() : \App\Type\SupplementaryData
    {
        return $this->SupplementaryData;
    }

    /**
     * @param \App\Type\SupplementaryData $SupplementaryData
     * @return static
     */
    public function withSupplementaryData(\App\Type\SupplementaryData $SupplementaryData) : static
    {
        $new = clone $this;
        $new->SupplementaryData = $SupplementaryData;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDeliveryTimestamp() : ?\DateTimeInterface
    {
        return $this->DeliveryTimestamp;
    }

    /**
     * @param null | \DateTimeInterface $DeliveryTimestamp
     * @return static
     */
    public function withDeliveryTimestamp(?\DateTimeInterface $DeliveryTimestamp) : static
    {
        $new = clone $this;
        $new->DeliveryTimestamp = $DeliveryTimestamp;

        return $new;
    }

    /**
     * @return null | 'doesNotExist' | 'requestIsQueued' | 'requestIsAcceptedBySmev' | 'requestIsRejectedBySmev' | 'underProcessing' | 'responseIsAcceptedBySmev' | 'cancelled' | 'responseIsDelivered'
     */
    public function getStatus() : ?string
    {
        return $this->Status;
    }

    /**
     * @param null | 'doesNotExist' | 'requestIsQueued' | 'requestIsAcceptedBySmev' | 'requestIsRejectedBySmev' | 'underProcessing' | 'responseIsAcceptedBySmev' | 'cancelled' | 'responseIsDelivered' $Status
     * @return static
     */
    public function withStatus(?string $Status) : static
    {
        $new = clone $this;
        $new->Status = $Status;

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


<?php

namespace App\Type;

class Request
{
    /**
     * @var \App\Type\SenderProvidedRequestData
     */
    private \App\Type\SenderProvidedRequestData $SenderProvidedRequestData;

    /**
     * Информация об отправителе, дате отправки, маршрутизации сообщения, и другая (см. определение типа).
     *  Все данные заполняются СМЭВ.
     *  Элемент //MessageMetadata/SendingTimestamp содержит дату и время, начиная с которых отсчитывается срок исполнения запроса.
     *  Остальные данные предназначены для целей анализа (машинного и ручного) качества обслуживания
     *  информационной системы - получателя сообщения,
     *  а также для предоставления службе поддержки оператора СМЭВ в случае необходимости.
     *
     * @var \App\Type\MessageMetadata
     */
    private \App\Type\MessageMetadata $MessageMetadata;

    /**
     * @var null | \App\Type\FSAttachmentsList
     */
    private ?\App\Type\FSAttachmentsList $FSAttachmentsList;

    /**
     * Аналог обратного адреса; непрозрачный объект, по которому СМЭВ сможет вычислить, кому доставить ответ на этот запрос.
     *  При отправке ответа нужно скопировать это значение в //SenderProvidedResponseData/To/text().
     *  N.B. Формат обратного адреса не специфицирован, и может меняться со временем.
     *  Больше того, в запросах, пришедших от одного и того же отправителя через сколь угодно малый промежуток времени,
     *  обратный адрес не обязан быть одним и тем же.
     *  Если получатель хочет идентифицировать отправителя, можно использовать либо маршрутную информацию СМЭВ
     *  (//GetMessageIfAnyResponse/SMEVRoutingInfo/Sender/*), либо сертификат отправителя
     *  (//GetMessageIfAnyResponse/CallerInformationSystemSignature/xmldsig:Signature/...)
     *
     * @var string
     */
    private string $ReplyTo;

    /**
     * ЭП-ОВ или ЭП-ПГУ отправителя. Подписан элемент //SenderProvidedRequestData
     *
     * @var null | \App\Type\XMLDSigSignatureType
     */
    private ?\App\Type\XMLDSigSignatureType $SenderInformationSystemSignature;

    /**
     * @var null | string
     */
    private ?string $Id;

    /**
     * @return \App\Type\SenderProvidedRequestData
     */
    public function getSenderProvidedRequestData() : \App\Type\SenderProvidedRequestData
    {
        return $this->SenderProvidedRequestData;
    }

    /**
     * @param \App\Type\SenderProvidedRequestData $SenderProvidedRequestData
     * @return static
     */
    public function withSenderProvidedRequestData(\App\Type\SenderProvidedRequestData $SenderProvidedRequestData) : static
    {
        $new = clone $this;
        $new->SenderProvidedRequestData = $SenderProvidedRequestData;

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
     * @return string
     */
    public function getReplyTo() : string
    {
        return $this->ReplyTo;
    }

    /**
     * @param string $ReplyTo
     * @return static
     */
    public function withReplyTo(string $ReplyTo) : static
    {
        $new = clone $this;
        $new->ReplyTo = $ReplyTo;

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


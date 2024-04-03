<?php

namespace App\Type;

class SenderProvidedResponseData
{
    /**
     * Идентификатор, присвоенный сообщению отправителем.
     *  Генерируется в соответствии с RFC-4122, по варианту 1 (на основании MAC-адреса и текущего времени).
     *
     * @var string
     */
    private string $MessageID;

    /**
     * Адрес доставки ответа. Копируется из запроса, //GetRequestResponse/ReplyTo/text()
     *
     * @var string
     */
    private string $To;

    /**
     * Содержательная часть ответа, XML-документ.
     *
     * @var null | \App\Type\MessagePrimaryContent
     */
    private ?\App\Type\MessagePrimaryContent $MessagePrimaryContent;

    /**
     * ЭП-СП содержательной части ответа. Подписывается элемент, находящийся сразу под MessagePrimaryContent.
     *
     * @var null | \App\Type\XMLDSigSignatureType
     */
    private ?\App\Type\XMLDSigSignatureType $PersonalSignature;

    /**
     * Заголовки вложенных файлов.
     *
     * @var null | \App\Type\AttachmentHeaderList
     */
    private ?\App\Type\AttachmentHeaderList $AttachmentHeaderList;

    /**
     * Заголовки файлов по ссылке.
     *
     * @var null | \App\Type\RefAttachmentHeaderList
     */
    private ?\App\Type\RefAttachmentHeaderList $RefAttachmentHeaderList;

    /**
     * @var array<int<0,max>, \App\Type\RequestRejected>
     */
    private array $RequestRejected;

    /**
     * @var null | \App\Type\RequestStatus
     */
    private ?\App\Type\RequestStatus $RequestStatus;

    /**
     * @var null | \App\Type\AsyncProcessingStatus
     */
    private ?\App\Type\AsyncProcessingStatus $AsyncProcessingStatus;

    /**
     * @var null | string
     */
    private ?string $Id;

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
     * @return string
     */
    public function getTo() : string
    {
        return $this->To;
    }

    /**
     * @param string $To
     * @return static
     */
    public function withTo(string $To) : static
    {
        $new = clone $this;
        $new->To = $To;

        return $new;
    }

    /**
     * @return null | \App\Type\MessagePrimaryContent
     */
    public function getMessagePrimaryContent() : ?\App\Type\MessagePrimaryContent
    {
        return $this->MessagePrimaryContent;
    }

    /**
     * @param null | \App\Type\MessagePrimaryContent $MessagePrimaryContent
     * @return static
     */
    public function withMessagePrimaryContent(?\App\Type\MessagePrimaryContent $MessagePrimaryContent) : static
    {
        $new = clone $this;
        $new->MessagePrimaryContent = $MessagePrimaryContent;

        return $new;
    }

    /**
     * @return null | \App\Type\XMLDSigSignatureType
     */
    public function getPersonalSignature() : ?\App\Type\XMLDSigSignatureType
    {
        return $this->PersonalSignature;
    }

    /**
     * @param null | \App\Type\XMLDSigSignatureType $PersonalSignature
     * @return static
     */
    public function withPersonalSignature(?\App\Type\XMLDSigSignatureType $PersonalSignature) : static
    {
        $new = clone $this;
        $new->PersonalSignature = $PersonalSignature;

        return $new;
    }

    /**
     * @return null | \App\Type\AttachmentHeaderList
     */
    public function getAttachmentHeaderList() : ?\App\Type\AttachmentHeaderList
    {
        return $this->AttachmentHeaderList;
    }

    /**
     * @param null | \App\Type\AttachmentHeaderList $AttachmentHeaderList
     * @return static
     */
    public function withAttachmentHeaderList(?\App\Type\AttachmentHeaderList $AttachmentHeaderList) : static
    {
        $new = clone $this;
        $new->AttachmentHeaderList = $AttachmentHeaderList;

        return $new;
    }

    /**
     * @return null | \App\Type\RefAttachmentHeaderList
     */
    public function getRefAttachmentHeaderList() : ?\App\Type\RefAttachmentHeaderList
    {
        return $this->RefAttachmentHeaderList;
    }

    /**
     * @param null | \App\Type\RefAttachmentHeaderList $RefAttachmentHeaderList
     * @return static
     */
    public function withRefAttachmentHeaderList(?\App\Type\RefAttachmentHeaderList $RefAttachmentHeaderList) : static
    {
        $new = clone $this;
        $new->RefAttachmentHeaderList = $RefAttachmentHeaderList;

        return $new;
    }

    /**
     * @return array<int<0,max>, \App\Type\RequestRejected>
     */
    public function getRequestRejected() : array
    {
        return $this->RequestRejected;
    }

    /**
     * @param array<int<0,max>, \App\Type\RequestRejected> $RequestRejected
     * @return static
     */
    public function withRequestRejected(array $RequestRejected) : static
    {
        $new = clone $this;
        $new->RequestRejected = $RequestRejected;

        return $new;
    }

    /**
     * @return null | \App\Type\RequestStatus
     */
    public function getRequestStatus() : ?\App\Type\RequestStatus
    {
        return $this->RequestStatus;
    }

    /**
     * @param null | \App\Type\RequestStatus $RequestStatus
     * @return static
     */
    public function withRequestStatus(?\App\Type\RequestStatus $RequestStatus) : static
    {
        $new = clone $this;
        $new->RequestStatus = $RequestStatus;

        return $new;
    }

    /**
     * @return null | \App\Type\AsyncProcessingStatus
     */
    public function getAsyncProcessingStatus() : ?\App\Type\AsyncProcessingStatus
    {
        return $this->AsyncProcessingStatus;
    }

    /**
     * @param null | \App\Type\AsyncProcessingStatus $AsyncProcessingStatus
     * @return static
     */
    public function withAsyncProcessingStatus(?\App\Type\AsyncProcessingStatus $AsyncProcessingStatus) : static
    {
        $new = clone $this;
        $new->AsyncProcessingStatus = $AsyncProcessingStatus;

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


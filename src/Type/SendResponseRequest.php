<?php

namespace App\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendResponseRequest implements RequestInterface
{
    /**
     * @var \App\Type\SenderProvidedResponseData
     */
    private \App\Type\SenderProvidedResponseData $SenderProvidedResponseData;

    /**
     * @var null | \App\Type\AttachmentContentList
     */
    private ?\App\Type\AttachmentContentList $AttachmentContentList;

    /**
     * ЭП-ОВ или ЭП-ПГУ. Подписан элемент //SenderProvidedResponseData.
     *
     * @var null | \App\Type\XMLDSigSignatureType
     */
    private ?\App\Type\XMLDSigSignatureType $CallerInformationSystemSignature;

    /**
     * Constructor
     *
     * @param \App\Type\SenderProvidedResponseData $SenderProvidedResponseData
     * @param null | \App\Type\AttachmentContentList $AttachmentContentList
     * @param null | \App\Type\XMLDSigSignatureType $CallerInformationSystemSignature
     */
    public function __construct(\App\Type\SenderProvidedResponseData $SenderProvidedResponseData, ?\App\Type\AttachmentContentList $AttachmentContentList, ?\App\Type\XMLDSigSignatureType $CallerInformationSystemSignature)
    {
        $this->SenderProvidedResponseData = $SenderProvidedResponseData;
        $this->AttachmentContentList = $AttachmentContentList;
        $this->CallerInformationSystemSignature = $CallerInformationSystemSignature;
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
     * @return null | \App\Type\AttachmentContentList
     */
    public function getAttachmentContentList() : ?\App\Type\AttachmentContentList
    {
        return $this->AttachmentContentList;
    }

    /**
     * @param null | \App\Type\AttachmentContentList $AttachmentContentList
     * @return static
     */
    public function withAttachmentContentList(?\App\Type\AttachmentContentList $AttachmentContentList) : static
    {
        $new = clone $this;
        $new->AttachmentContentList = $AttachmentContentList;

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


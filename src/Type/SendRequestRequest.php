<?php

namespace App\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendRequestRequest implements RequestInterface
{
    /**
     * Содержательная часть запроса + служебные данные, заполняемые отправителем.
     *
     * @var \App\Type\SenderProvidedRequestData
     */
    private \App\Type\SenderProvidedRequestData $SenderProvidedRequestData;

    /**
     * Вложенные файлы - содержимое. Содержимое вынесено из-под ЭП-ОВ, чтобы не нарушать работу MTOM.
     *
     * @var null | \App\Type\AttachmentContentList
     */
    private ?\App\Type\AttachmentContentList $AttachmentContentList;

    /**
     * ЭП-ОВ или ЭП-ПГУ. Подписан элемент //SenderProvidedRequestData.
     *  Подпись оставлена необязательной, чтобы клиентов можно было тестировать с упрощёнными эмуляторами СМЭВ.
     *  Реальный СМЭВ отбивает сообщения без ЭП-ОВ или ЭП-ПГУ.
     *
     * @var null | \App\Type\XMLDSigSignatureType
     */
    private ?\App\Type\XMLDSigSignatureType $CallerInformationSystemSignature;

    /**
     * Constructor
     *
     * @param \App\Type\SenderProvidedRequestData $SenderProvidedRequestData
     * @param null | \App\Type\AttachmentContentList $AttachmentContentList
     * @param null | \App\Type\XMLDSigSignatureType $CallerInformationSystemSignature
     */
    public function __construct(\App\Type\SenderProvidedRequestData $SenderProvidedRequestData, ?\App\Type\AttachmentContentList $AttachmentContentList, ?\App\Type\XMLDSigSignatureType $CallerInformationSystemSignature)
    {
        $this->SenderProvidedRequestData = $SenderProvidedRequestData;
        $this->AttachmentContentList = $AttachmentContentList;
        $this->CallerInformationSystemSignature = $CallerInformationSystemSignature;
    }

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


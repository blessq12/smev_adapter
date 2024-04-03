<?php

namespace App\Type;

class ResponseMessage
{
    /**
     * @var null | \App\Type\Response
     */
    private ?\App\Type\Response $Response;

    /**
     * @var null | \App\Type\AttachmentContentList
     */
    private ?\App\Type\AttachmentContentList $AttachmentContentList;

    /**
     * ЭП-СМЭВ. Подписан элемент preceding-sibling::tns:Response
     *
     * @var null | \App\Type\XMLDSigSignatureType
     */
    private ?\App\Type\XMLDSigSignatureType $SMEVSignature;

    /**
     * @return null | \App\Type\Response
     */
    public function getResponse() : ?\App\Type\Response
    {
        return $this->Response;
    }

    /**
     * @param null | \App\Type\Response $Response
     * @return static
     */
    public function withResponse(?\App\Type\Response $Response) : static
    {
        $new = clone $this;
        $new->Response = $Response;

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


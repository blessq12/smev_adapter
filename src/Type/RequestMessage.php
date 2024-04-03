<?php

namespace App\Type;

class RequestMessage
{
    /**
     * @var null | \App\Type\Request
     */
    private ?\App\Type\Request $Request;

    /**
     * @var null | \App\Type\AttachmentContentList
     */
    private ?\App\Type\AttachmentContentList $AttachmentContentList;

    /**
     * @var null | \App\Type\Cancel
     */
    private ?\App\Type\Cancel $Cancel;

    /**
     * ЭП-СМЭВ. Подписан элемент //Request, либо //Cancel
     *
     * @var null | \App\Type\XMLDSigSignatureType
     */
    private ?\App\Type\XMLDSigSignatureType $SMEVSignature;

    /**
     * @return null | \App\Type\Request
     */
    public function getRequest() : ?\App\Type\Request
    {
        return $this->Request;
    }

    /**
     * @param null | \App\Type\Request $Request
     * @return static
     */
    public function withRequest(?\App\Type\Request $Request) : static
    {
        $new = clone $this;
        $new->Request = $Request;

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
     * @return null | \App\Type\Cancel
     */
    public function getCancel() : ?\App\Type\Cancel
    {
        return $this->Cancel;
    }

    /**
     * @param null | \App\Type\Cancel $Cancel
     * @return static
     */
    public function withCancel(?\App\Type\Cancel $Cancel) : static
    {
        $new = clone $this;
        $new->Cancel = $Cancel;

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


<?php

namespace App\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetResponseResponse implements ResultInterface
{
    /**
     * Ответ, присланный поставщиком данных.
     *
     * @var null | \App\Type\ResponseMessage
     */
    private ?\App\Type\ResponseMessage $ResponseMessage;

    /**
     * @return null | \App\Type\ResponseMessage
     */
    public function getResponseMessage() : ?\App\Type\ResponseMessage
    {
        return $this->ResponseMessage;
    }

    /**
     * @param null | \App\Type\ResponseMessage $ResponseMessage
     * @return static
     */
    public function withResponseMessage(?\App\Type\ResponseMessage $ResponseMessage) : static
    {
        $new = clone $this;
        $new->ResponseMessage = $ResponseMessage;

        return $new;
    }
}


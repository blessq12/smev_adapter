<?php

namespace App\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetRequestResponse implements ResultInterface
{
    /**
     * Полученное сообщение. Если этот элемент отсутствует, это значит, что входящая очередь пуста.
     *
     * @var null | \App\Type\RequestMessage
     */
    private ?\App\Type\RequestMessage $RequestMessage;

    /**
     * @return null | \App\Type\RequestMessage
     */
    public function getRequestMessage() : ?\App\Type\RequestMessage
    {
        return $this->RequestMessage;
    }

    /**
     * @param null | \App\Type\RequestMessage $RequestMessage
     * @return static
     */
    public function withRequestMessage(?\App\Type\RequestMessage $RequestMessage) : static
    {
        $new = clone $this;
        $new->RequestMessage = $RequestMessage;

        return $new;
    }
}


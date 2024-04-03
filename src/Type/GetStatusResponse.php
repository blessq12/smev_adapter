<?php

namespace App\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStatusResponse implements ResultInterface
{
    /**
     * @var null | \App\Type\SmevAsyncProcessingMessage
     */
    private ?\App\Type\SmevAsyncProcessingMessage $SmevAsyncProcessingMessage;

    /**
     * @return null | \App\Type\SmevAsyncProcessingMessage
     */
    public function getSmevAsyncProcessingMessage() : ?\App\Type\SmevAsyncProcessingMessage
    {
        return $this->SmevAsyncProcessingMessage;
    }

    /**
     * @param null | \App\Type\SmevAsyncProcessingMessage $SmevAsyncProcessingMessage
     * @return static
     */
    public function withSmevAsyncProcessingMessage(?\App\Type\SmevAsyncProcessingMessage $SmevAsyncProcessingMessage) : static
    {
        $new = clone $this;
        $new->SmevAsyncProcessingMessage = $SmevAsyncProcessingMessage;

        return $new;
    }
}


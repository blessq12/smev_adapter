<?php

namespace App\Type;

class AsyncProcessingStatusData
{
    /**
     * @var \App\Type\AsyncProcessingStatus
     */
    private \App\Type\AsyncProcessingStatus $AsyncProcessingStatus;

    /**
     * @var null | string
     */
    private ?string $Id;

    /**
     * @return \App\Type\AsyncProcessingStatus
     */
    public function getAsyncProcessingStatus() : \App\Type\AsyncProcessingStatus
    {
        return $this->AsyncProcessingStatus;
    }

    /**
     * @param \App\Type\AsyncProcessingStatus $AsyncProcessingStatus
     * @return static
     */
    public function withAsyncProcessingStatus(\App\Type\AsyncProcessingStatus $AsyncProcessingStatus) : static
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


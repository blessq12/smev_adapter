<?php

namespace App\Type;

class RequestRejected
{
    /**
     * Код причины отклонения запроса.
     *
     * @var null | 'ACCESS_DENIED' | 'NO_DATA' | 'UNKNOWN_REQUEST_DESCRIPTION' | 'FAILURE'
     */
    private ?string $RejectionReasonCode;

    /**
     * Причина отклонения запроса, в человекочитаемом виде.
     *
     * @var null | string
     */
    private ?string $RejectionReasonDescription;

    /**
     * @return null | 'ACCESS_DENIED' | 'NO_DATA' | 'UNKNOWN_REQUEST_DESCRIPTION' | 'FAILURE'
     */
    public function getRejectionReasonCode() : ?string
    {
        return $this->RejectionReasonCode;
    }

    /**
     * @param null | 'ACCESS_DENIED' | 'NO_DATA' | 'UNKNOWN_REQUEST_DESCRIPTION' | 'FAILURE' $RejectionReasonCode
     * @return static
     */
    public function withRejectionReasonCode(?string $RejectionReasonCode) : static
    {
        $new = clone $this;
        $new->RejectionReasonCode = $RejectionReasonCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRejectionReasonDescription() : ?string
    {
        return $this->RejectionReasonDescription;
    }

    /**
     * @param null | string $RejectionReasonDescription
     * @return static
     */
    public function withRejectionReasonDescription(?string $RejectionReasonDescription) : static
    {
        $new = clone $this;
        $new->RejectionReasonDescription = $RejectionReasonDescription;

        return $new;
    }
}


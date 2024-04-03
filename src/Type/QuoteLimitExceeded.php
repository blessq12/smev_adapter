<?php

namespace App\Type;

use \App\Type\SmevFault;

class QuoteLimitExceeded extends SmevFault
{
    /**
     * Текущее значение оставшейся квоты для СМЭВ-сообщении, в байтах.
     *
     * @var int
     */
    private int $RemainedTotalQuoteSize;

    /**
     * Суммарные размер вложений, переданных в отвергнутом сообщении, в байтах.
     *
     * @var int
     */
    private int $RealTotalAttachmentSize;

    /**
     * @return int
     */
    public function getRemainedTotalQuoteSize() : int
    {
        return $this->RemainedTotalQuoteSize;
    }

    /**
     * @param int $RemainedTotalQuoteSize
     * @return static
     */
    public function withRemainedTotalQuoteSize(int $RemainedTotalQuoteSize) : static
    {
        $new = clone $this;
        $new->RemainedTotalQuoteSize = $RemainedTotalQuoteSize;

        return $new;
    }

    /**
     * @return int
     */
    public function getRealTotalAttachmentSize() : int
    {
        return $this->RealTotalAttachmentSize;
    }

    /**
     * @param int $RealTotalAttachmentSize
     * @return static
     */
    public function withRealTotalAttachmentSize(int $RealTotalAttachmentSize) : static
    {
        $new = clone $this;
        $new->RealTotalAttachmentSize = $RealTotalAttachmentSize;

        return $new;
    }
}


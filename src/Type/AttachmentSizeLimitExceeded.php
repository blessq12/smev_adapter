<?php

namespace App\Type;

use \App\Type\SmevFault;

class AttachmentSizeLimitExceeded extends SmevFault
{
    /**
     * Максимальный суммарный размер вложений, разрешённый для передачи в одном СМЭВ-сообщении, в байтах.
     *
     * @var int
     */
    private int $PermittedTotalAttachmentSize;

    /**
     * Суммарные размер вложений, переданных в отвергнутом сообщении, в байтах.
     *
     * @var int
     */
    private int $RealTotalAttachmentSize;

    /**
     * @return int
     */
    public function getPermittedTotalAttachmentSize() : int
    {
        return $this->PermittedTotalAttachmentSize;
    }

    /**
     * @param int $PermittedTotalAttachmentSize
     * @return static
     */
    public function withPermittedTotalAttachmentSize(int $PermittedTotalAttachmentSize) : static
    {
        $new = clone $this;
        $new->PermittedTotalAttachmentSize = $PermittedTotalAttachmentSize;

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


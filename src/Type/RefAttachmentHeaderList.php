<?php

namespace App\Type;

class RefAttachmentHeaderList
{
    /**
     * Ссылка на файл, приложенный к СМЭВ-сообщению.
     *
     * @var array<int<1,max>, \App\Type\RefAttachmentHeaderType>
     */
    private array $RefAttachmentHeader;

    /**
     * @return array<int<1,max>, \App\Type\RefAttachmentHeaderType>
     */
    public function getRefAttachmentHeader() : array
    {
        return $this->RefAttachmentHeader;
    }

    /**
     * @param array<int<1,max>, \App\Type\RefAttachmentHeaderType> $RefAttachmentHeader
     * @return static
     */
    public function withRefAttachmentHeader(array $RefAttachmentHeader) : static
    {
        $new = clone $this;
        $new->RefAttachmentHeader = $RefAttachmentHeader;

        return $new;
    }
}


<?php

namespace App\Type;

class AttachmentHeaderList
{
    /**
     * Файл, приложенный к СМЭВ-сообщению.
     *  Имя файла не передаётся; вложения идентифицируются только идентификаторами внутри сообщения.
     *
     * @var array<int<1,max>, \App\Type\AttachmentHeaderType>
     */
    private array $AttachmentHeader;

    /**
     * @return array<int<1,max>, \App\Type\AttachmentHeaderType>
     */
    public function getAttachmentHeader() : array
    {
        return $this->AttachmentHeader;
    }

    /**
     * @param array<int<1,max>, \App\Type\AttachmentHeaderType> $AttachmentHeader
     * @return static
     */
    public function withAttachmentHeader(array $AttachmentHeader) : static
    {
        $new = clone $this;
        $new->AttachmentHeader = $AttachmentHeader;

        return $new;
    }
}


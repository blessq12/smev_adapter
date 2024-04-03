<?php

namespace App\Type;

class AttachmentContentList
{
    /**
     *  Содержимое вложенного файла.
     *  Значение атрибута attachmentId должно быть уникально среди всех элементов и атрибутов СМЭВ-сообщения, имеющих тип xs:ID.
     *
     * @var array<int<1,max>, \App\Type\AttachmentContentType>
     */
    private array $AttachmentContent;

    /**
     * @return array<int<1,max>, \App\Type\AttachmentContentType>
     */
    public function getAttachmentContent(): array
    {
        return $this->AttachmentContent;
    }

    public function __construct(array $AttachmentContent)
    {
        $this->AttachmentContent = $AttachmentContent;
    }

    /**
     * @param array<int<1,max>, \App\Type\AttachmentContentType> $AttachmentContent
     * @return static
     */
    public function withAttachmentContent(array $AttachmentContent): static
    {
        $new = clone $this;
        $new->AttachmentContent = $AttachmentContent;

        return $new;
    }
}

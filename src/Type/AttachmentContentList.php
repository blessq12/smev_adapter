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
    private $any;


    /**
     * @return array<int<1,max>, \App\Type\AttachmentContentType>
     */
    public function getAttachmentContent(): array
    {
        return $this->AttachmentContent;
    }

    public function __construct(mixed $attachment, mixed $any)
    {
        $this->AttachmentContent[] = $attachment;
        $this->any = $any;
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

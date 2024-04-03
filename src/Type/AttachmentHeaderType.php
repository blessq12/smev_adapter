<?php

namespace App\Type;

class AttachmentHeaderType
{
    /**
     * Идентификатор вложения. Ссылка на соответствующий //AttachmentContent/@Id
     *
     * @var string
     */
    private string $contentId;

    /**
     * Тип контента.
     *
     * @var string
     */
    private string $MimeType;

    /**
     * ЭЦП в формате PKCS#7 detached. Подписывать ключом ЭП-СП.
     *
     * @var null | mixed
     */
    private mixed $SignaturePKCS7;

    /**
     * @return string
     */
    public function getContentId() : string
    {
        return $this->contentId;
    }

    /**
     * @param string $contentId
     * @return static
     */
    public function withContentId(string $contentId) : static
    {
        $new = clone $this;
        $new->contentId = $contentId;

        return $new;
    }

    /**
     * @return string
     */
    public function getMimeType() : string
    {
        return $this->MimeType;
    }

    /**
     * @param string $MimeType
     * @return static
     */
    public function withMimeType(string $MimeType) : static
    {
        $new = clone $this;
        $new->MimeType = $MimeType;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getSignaturePKCS7() : mixed
    {
        return $this->SignaturePKCS7;
    }

    /**
     * @param null | mixed $SignaturePKCS7
     * @return static
     */
    public function withSignaturePKCS7(mixed $SignaturePKCS7) : static
    {
        $new = clone $this;
        $new->SignaturePKCS7 = $SignaturePKCS7;

        return $new;
    }
}


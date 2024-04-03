<?php

namespace App\Type;

class RefAttachmentHeaderType
{
    /**
     * Идентификатор файла. Ссылка на соответствующий файл.
     *
     * @var string
     */
    private string $uuid;

    /**
     * Хэш файла.
     *
     * @var string
     */
    private string $Hash;

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
    public function getUuid() : string
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     * @return static
     */
    public function withUuid(string $uuid) : static
    {
        $new = clone $this;
        $new->uuid = $uuid;

        return $new;
    }

    /**
     * @return string
     */
    public function getHash() : string
    {
        return $this->Hash;
    }

    /**
     * @param string $Hash
     * @return static
     */
    public function withHash(string $Hash) : static
    {
        $new = clone $this;
        $new->Hash = $Hash;

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


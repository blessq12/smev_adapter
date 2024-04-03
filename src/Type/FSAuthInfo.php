<?php

namespace App\Type;

class FSAuthInfo
{
    /**
     * Идентификатор файла. Ссылка на соответствующий файл.
     *
     * @var string
     */
    private string $uuid;

    /**
     * Пользователь.
     *
     * @var string
     */
    private string $UserName;

    /**
     * Пароль.
     *
     * @var string
     */
    private string $Password;

    /**
     * Имя файла.
     *
     * @var string
     */
    private string $FileName;

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
    public function getUserName() : string
    {
        return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return static
     */
    public function withUserName(string $UserName) : static
    {
        $new = clone $this;
        $new->UserName = $UserName;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     * @return static
     */
    public function withPassword(string $Password) : static
    {
        $new = clone $this;
        $new->Password = $Password;

        return $new;
    }

    /**
     * @return string
     */
    public function getFileName() : string
    {
        return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return static
     */
    public function withFileName(string $FileName) : static
    {
        $new = clone $this;
        $new->FileName = $FileName;

        return $new;
    }
}


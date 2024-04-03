<?php

namespace App\Type;

class MessageReference
{
    /**
     * Строковое представление UUID.
     *  В СМЭВ UUID используются в качестве идентификаторов сообщений.
     *  Идентификаторы присваиваются сообщеням отправителями.
     *
     * @var string
     */
    private string $_;

    /**
     * @var null | string
     */
    private ?string $Id;

    /**
     * @return string
     */
    public function get_() : string
    {
        return $this->_;
    }

    /**
     * @param string $_
     * @return static
     */
    public function with_(string $_) : static
    {
        $new = clone $this;
        $new->_ = $_;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getId() : ?string
    {
        return $this->Id;
    }

    /**
     * @param null | string $Id
     * @return static
     */
    public function withId(?string $Id) : static
    {
        $new = clone $this;
        $new->Id = $Id;

        return $new;
    }
}


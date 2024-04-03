<?php

namespace App\Type;

class AckTargetMessage
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
     * @var string
     */
    private string $Id;

    /**
     * true, если ЭП-СМЭВ прошла валидацию и сообщение передано ИС. false, если ЭП-СМЭВ отвергнута, и сообщение проигнорировано.
     *
     * @var null | bool
     */
    private ?bool $accepted;

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
     * @return string
     */
    public function getId() : string
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     * @return static
     */
    public function withId(string $Id) : static
    {
        $new = clone $this;
        $new->Id = $Id;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getAccepted() : ?bool
    {
        return $this->accepted;
    }

    /**
     * @param null | bool $accepted
     * @return static
     */
    public function withAccepted(?bool $accepted) : static
    {
        $new = clone $this;
        $new->accepted = $accepted;

        return $new;
    }
}


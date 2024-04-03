<?php

namespace App\Type;

class StatusParameter
{
    /**
     * @var null | string
     */
    private ?string $Key;

    /**
     * @var null | string
     */
    private ?string $Value;

    /**
     * @return null | string
     */
    public function getKey() : ?string
    {
        return $this->Key;
    }

    /**
     * @param null | string $Key
     * @return static
     */
    public function withKey(?string $Key) : static
    {
        $new = clone $this;
        $new->Key = $Key;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getValue() : ?string
    {
        return $this->Value;
    }

    /**
     * @param null | string $Value
     * @return static
     */
    public function withValue(?string $Value) : static
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }
}


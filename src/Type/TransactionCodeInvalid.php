<?php

namespace App\Type;

use \App\Type\VoidType;

class TransactionCodeInvalid extends VoidType
{
    /**
     * @var null | string
     */
    private ?string $Code;

    /**
     * @var null | string
     */
    private ?string $Description;

    /**
     * @return null | string
     */
    public function getCode() : ?string
    {
        return $this->Code;
    }

    /**
     * @param null | string $Code
     * @return static
     */
    public function withCode(?string $Code) : static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescription() : ?string
    {
        return $this->Description;
    }

    /**
     * @param null | string $Description
     * @return static
     */
    public function withDescription(?string $Description) : static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }
}


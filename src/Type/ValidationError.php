<?php

namespace App\Type;

class ValidationError
{
    /**
     * @var string
     */
    private string $_;

    /**
     * Позиция в XML-документе, в которой валидатор обнаружил ошибку.
     *
     * @var int
     */
    private int $errorPosition;

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
     * @return int
     */
    public function getErrorPosition() : int
    {
        return $this->errorPosition;
    }

    /**
     * @param int $errorPosition
     * @return static
     */
    public function withErrorPosition(int $errorPosition) : static
    {
        $new = clone $this;
        $new->errorPosition = $errorPosition;

        return $new;
    }
}


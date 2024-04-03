<?php

namespace App\Type;

use \App\Type\SmevFault;

class InvalidContent extends SmevFault
{
    /**
     * Сообщение об ошибке валидации. Текстовое содержимое элемента должно содержать сообщение об ошибке, возвращённое валидатором.
     *
     * @var array<int<1,max>, \App\Type\ValidationError>
     */
    private array $ValidationError;

    /**
     * @return array<int<1,max>, \App\Type\ValidationError>
     */
    public function getValidationError() : array
    {
        return $this->ValidationError;
    }

    /**
     * @param array<int<1,max>, \App\Type\ValidationError> $ValidationError
     * @return static
     */
    public function withValidationError(array $ValidationError) : static
    {
        $new = clone $this;
        $new->ValidationError = $ValidationError;

        return $new;
    }
}


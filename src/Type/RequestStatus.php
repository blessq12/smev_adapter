<?php

namespace App\Type;

class RequestStatus
{
    /**
     * Код бизнес статуса запроса.
     *
     * @var null | int
     */
    private ?int $StatusCode;

    /**
     * @var array<int<0,max>, \App\Type\StatusParameter>
     */
    private array $StatusParameter;

    /**
     * Бизнес статус запроса, в человекочитаемом виде.
     *
     * @var null | string
     */
    private ?string $StatusDescription;

    /**
     * @return null | int
     */
    public function getStatusCode() : ?int
    {
        return $this->StatusCode;
    }

    /**
     * @param null | int $StatusCode
     * @return static
     */
    public function withStatusCode(?int $StatusCode) : static
    {
        $new = clone $this;
        $new->StatusCode = $StatusCode;

        return $new;
    }

    /**
     * @return array<int<0,max>, \App\Type\StatusParameter>
     */
    public function getStatusParameter() : array
    {
        return $this->StatusParameter;
    }

    /**
     * @param array<int<0,max>, \App\Type\StatusParameter> $StatusParameter
     * @return static
     */
    public function withStatusParameter(array $StatusParameter) : static
    {
        $new = clone $this;
        $new->StatusParameter = $StatusParameter;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStatusDescription() : ?string
    {
        return $this->StatusDescription;
    }

    /**
     * @param null | string $StatusDescription
     * @return static
     */
    public function withStatusDescription(?string $StatusDescription) : static
    {
        $new = clone $this;
        $new->StatusDescription = $StatusDescription;

        return $new;
    }
}


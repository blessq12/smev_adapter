<?php

namespace App\Type;

class Timestamp
{
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $_;

    /**
     * @var null | string
     */
    private ?string $Id;

    /**
     * @return \DateTimeInterface
     */
    public function get_() : \DateTimeInterface
    {
        return $this->_;
    }

    /**
     * @param \DateTimeInterface $_
     * @return static
     */
    public function with_(\DateTimeInterface $_) : static
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


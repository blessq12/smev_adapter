<?php

namespace App\Type;

class AttachmentContentType
{
    /**
     * @var string
     */
    private string $Id;

    /**
     * @var mixed
     */
    private mixed $Content;


    public function __construct(
        string $id,
        mixed $content
    ) {
        $this->Id = $id;
        $this->Content = $content;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     * @return static
     */
    public function withId(string $Id): static
    {
        $new = clone $this;
        $new->Id = $Id;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getContent(): mixed
    {
        return $this->Content;
    }

    /**
     * @param mixed $Content
     * @return static
     */
    public function withContent(mixed $Content): static
    {
        $new = clone $this;
        $new->Content = $Content;

        return $new;
    }
}

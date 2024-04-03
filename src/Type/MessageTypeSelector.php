<?php

namespace App\Type;

class MessageTypeSelector
{
    /**
     * @var null | mixed
     */
    private mixed $NamespaceURI;

    /**
     * @var null | string
     */
    private ?string $RootElementLocalName;

    /**
     * Текущая дата и время.
     *
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Timestamp;

    /**
     * Идентификатор нода.
     *
     * @var null | string
     */
    private ?string $NodeID;

    /**
     * @var null | string
     */
    private ?string $Id;

    /**
     * @return null | mixed
     */
    public function getNamespaceURI() : mixed
    {
        return $this->NamespaceURI;
    }

    /**
     * @param null | mixed $NamespaceURI
     * @return static
     */
    public function withNamespaceURI(mixed $NamespaceURI) : static
    {
        $new = clone $this;
        $new->NamespaceURI = $NamespaceURI;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRootElementLocalName() : ?string
    {
        return $this->RootElementLocalName;
    }

    /**
     * @param null | string $RootElementLocalName
     * @return static
     */
    public function withRootElementLocalName(?string $RootElementLocalName) : static
    {
        $new = clone $this;
        $new->RootElementLocalName = $RootElementLocalName;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTimestamp() : \DateTimeInterface
    {
        return $this->Timestamp;
    }

    /**
     * @param \DateTimeInterface $Timestamp
     * @return static
     */
    public function withTimestamp(\DateTimeInterface $Timestamp) : static
    {
        $new = clone $this;
        $new->Timestamp = $Timestamp;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNodeID() : ?string
    {
        return $this->NodeID;
    }

    /**
     * @param null | string $NodeID
     * @return static
     */
    public function withNodeID(?string $NodeID) : static
    {
        $new = clone $this;
        $new->NodeID = $NodeID;

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


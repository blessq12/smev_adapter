<?php

namespace App\Type;

class FSAttachmentsList
{
    /**
     * @var array<int<1,max>, \App\Type\FSAuthInfo>
     */
    private array $FSAttachment;

    /**
     * @return array<int<1,max>, \App\Type\FSAuthInfo>
     */
    public function getFSAttachment() : array
    {
        return $this->FSAttachment;
    }

    /**
     * @param array<int<1,max>, \App\Type\FSAuthInfo> $FSAttachment
     * @return static
     */
    public function withFSAttachment(array $FSAttachment) : static
    {
        $new = clone $this;
        $new->FSAttachment = $FSAttachment;

        return $new;
    }
}


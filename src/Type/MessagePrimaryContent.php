<?php

namespace App\Type;

class MessagePrimaryContent
{
    private $any;

    public function __construct($any)
    {
        $this->any = $any;
    }
}

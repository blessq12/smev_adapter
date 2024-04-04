<?php

namespace App\Type;

class XMLDSigSignatureType
{
    private $any;

    public function __construct(mixed $any)
    {
        $this->any = $any;
    }
}

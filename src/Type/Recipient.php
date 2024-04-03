<?php

namespace App\Type;

class Recipient
{
    /**
     * Мнемоника. Для машинной обработки.
     *
     * @var string
     */
    private string $Mnemonic;

    /**
     * Наименование в форме, удобной для восприятия человеком.
     *
     * @var string
     */
    private string $HumanReadableName;

    /**
     * @return string
     */
    public function getMnemonic() : string
    {
        return $this->Mnemonic;
    }

    /**
     * @param string $Mnemonic
     * @return static
     */
    public function withMnemonic(string $Mnemonic) : static
    {
        $new = clone $this;
        $new->Mnemonic = $Mnemonic;

        return $new;
    }

    /**
     * @return string
     */
    public function getHumanReadableName() : string
    {
        return $this->HumanReadableName;
    }

    /**
     * @param string $HumanReadableName
     * @return static
     */
    public function withHumanReadableName(string $HumanReadableName) : static
    {
        $new = clone $this;
        $new->HumanReadableName = $HumanReadableName;

        return $new;
    }
}


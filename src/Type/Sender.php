<?php

namespace App\Type;

class Sender
{
    /**
     * Мнемоника отправителя. Для машинной обработки. Вычисляется на основании данных сетрификата.
     *
     * @var string
     */
    private string $Mnemonic;

    /**
     * Наименование отправителя в форме, удобной для восприятия человеком.
     *  Вычисляется на основании данных сертификата.
     *  Не обязано полностью совпадать с официальным названием организации или органа власти.
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


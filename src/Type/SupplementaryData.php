<?php

namespace App\Type;

class SupplementaryData
{
    /**
     *  Тип сообщения. Вычисляется СМЭВ на основании полного имени (qualified name) корневого XML-элемента сообщения.
     *  Например, "Заявка на получение выписки из ЕГРИП".
     *  Для ответов на запросы этот элемент опускается.
     *
     * @var null | string
     */
    private ?string $DetectedContentTypeName;

    /**
     * Тип взаимодействия, например, портал госуслуг - ОИВ.
     *
     * @var 'PGU2OIV' | 'OIV2OIV' | 'OIV2sameOIV' | 'Charger2PaymentGate' | 'PaymentGate2Treasury' | 'OIV2Treasury' | 'other' | 'NotDetected'
     */
    private string $InteractionType;

    /**
     * @return null | string
     */
    public function getDetectedContentTypeName(): ?string
    {
        return $this->DetectedContentTypeName;
    }

    /**
     * @param null | string $DetectedContentTypeName
     * @return static
     */
    public function withDetectedContentTypeName(?string $DetectedContentTypeName): static
    {
        $new = clone $this;
        $new->DetectedContentTypeName = $DetectedContentTypeName;

        return $new;
    }

    /**
     * @return 'PGU2OIV' | 'OIV2OIV' | 'OIV2sameOIV' | 'Charger2PaymentGate' | 'PaymentGate2Treasury' | 'OIV2Treasury' | 'other' | 'NotDetected'
     */
    public function getInteractionType(): string
    {
        return $this->InteractionType;
    }

    /**
     * @param 'PGU2OIV' | 'OIV2OIV' | 'OIV2sameOIV' | 'Charger2PaymentGate' | 'PaymentGate2Treasury' | 'OIV2Treasury' | 'other' | 'NotDetected' $InteractionType
     * @return static
     */
    public function withInteractionType(string $InteractionType): static
    {
        $new = clone $this;
        $new->InteractionType = $InteractionType;

        return $new;
    }
}

<?php

namespace App\Type;

class AsyncProcessingStatus
{
    /**
     * Строковое представление UUID.
     *  В СМЭВ UUID используются в качестве идентификаторов сообщений.
     *  Идентификаторы присваиваются сообщеням отправителями.
     *
     * @var string
     */
    private string $OriginalMessageId;

    /**
     * Категория статуса.
     *
     * @var 'doesNotExist' | 'requestIsQueued' | 'requestIsAcceptedBySmev' | 'requestIsRejectedBySmev' | 'underProcessing' | 'responseIsAcceptedBySmev' | 'cancelled' | 'responseIsDelivered'
     */
    private string $StatusCategory;

    /**
     * Описание процессинга в человекочитаемом виде.
     *
     * @var null | string
     */
    private ?string $StatusDetails;

    /**
     * @var null | \App\Type\SmevFault
     */
    private ?\App\Type\SmevFault $SmevFault;

    /**
     * @return string
     */
    public function getOriginalMessageId() : string
    {
        return $this->OriginalMessageId;
    }

    /**
     * @param string $OriginalMessageId
     * @return static
     */
    public function withOriginalMessageId(string $OriginalMessageId) : static
    {
        $new = clone $this;
        $new->OriginalMessageId = $OriginalMessageId;

        return $new;
    }

    /**
     * @return 'doesNotExist' | 'requestIsQueued' | 'requestIsAcceptedBySmev' | 'requestIsRejectedBySmev' | 'underProcessing' | 'responseIsAcceptedBySmev' | 'cancelled' | 'responseIsDelivered'
     */
    public function getStatusCategory() : string
    {
        return $this->StatusCategory;
    }

    /**
     * @param 'doesNotExist' | 'requestIsQueued' | 'requestIsAcceptedBySmev' | 'requestIsRejectedBySmev' | 'underProcessing' | 'responseIsAcceptedBySmev' | 'cancelled' | 'responseIsDelivered' $StatusCategory
     * @return static
     */
    public function withStatusCategory(string $StatusCategory) : static
    {
        $new = clone $this;
        $new->StatusCategory = $StatusCategory;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStatusDetails() : ?string
    {
        return $this->StatusDetails;
    }

    /**
     * @param null | string $StatusDetails
     * @return static
     */
    public function withStatusDetails(?string $StatusDetails) : static
    {
        $new = clone $this;
        $new->StatusDetails = $StatusDetails;

        return $new;
    }

    /**
     * @return null | \App\Type\SmevFault
     */
    public function getSmevFault() : ?\App\Type\SmevFault
    {
        return $this->SmevFault;
    }

    /**
     * @param null | \App\Type\SmevFault $SmevFault
     * @return static
     */
    public function withSmevFault(?\App\Type\SmevFault $SmevFault) : static
    {
        $new = clone $this;
        $new->SmevFault = $SmevFault;

        return $new;
    }
}


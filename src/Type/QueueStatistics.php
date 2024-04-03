<?php

namespace App\Type;

class QueueStatistics
{
    /**
     * @var null | string
     */
    private ?string $queueName;

    /**
     * @var null | int
     */
    private ?int $pendingMessageNumber;

    /**
     * @return null | string
     */
    public function getQueueName() : ?string
    {
        return $this->queueName;
    }

    /**
     * @param null | string $queueName
     * @return static
     */
    public function withQueueName(?string $queueName) : static
    {
        $new = clone $this;
        $new->queueName = $queueName;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getPendingMessageNumber() : ?int
    {
        return $this->pendingMessageNumber;
    }

    /**
     * @param null | int $pendingMessageNumber
     * @return static
     */
    public function withPendingMessageNumber(?int $pendingMessageNumber) : static
    {
        $new = clone $this;
        $new->pendingMessageNumber = $pendingMessageNumber;

        return $new;
    }
}


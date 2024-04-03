<?php

namespace App\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetIncomingQueueStatisticsResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \App\Type\QueueStatistics>
     */
    private array $QueueStatistics;

    /**
     * @return array<int<0,max>, \App\Type\QueueStatistics>
     */
    public function getQueueStatistics() : array
    {
        return $this->QueueStatistics;
    }

    /**
     * @param array<int<0,max>, \App\Type\QueueStatistics> $QueueStatistics
     * @return static
     */
    public function withQueueStatistics(array $QueueStatistics) : static
    {
        $new = clone $this;
        $new->QueueStatistics = $QueueStatistics;

        return $new;
    }
}


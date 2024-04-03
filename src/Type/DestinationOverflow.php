<?php

namespace App\Type;

use \App\Type\SmevFault;

class DestinationOverflow extends SmevFault
{
    /**
     * @var string
     */
    private string $MessageBrokerAddress;

    /**
     * @var string
     */
    private string $DestinationName;

    /**
     * @return string
     */
    public function getMessageBrokerAddress() : string
    {
        return $this->MessageBrokerAddress;
    }

    /**
     * @param string $MessageBrokerAddress
     * @return static
     */
    public function withMessageBrokerAddress(string $MessageBrokerAddress) : static
    {
        $new = clone $this;
        $new->MessageBrokerAddress = $MessageBrokerAddress;

        return $new;
    }

    /**
     * @return string
     */
    public function getDestinationName() : string
    {
        return $this->DestinationName;
    }

    /**
     * @param string $DestinationName
     * @return static
     */
    public function withDestinationName(string $DestinationName) : static
    {
        $new = clone $this;
        $new->DestinationName = $DestinationName;

        return $new;
    }
}


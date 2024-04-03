<?php

namespace App\Type;

use \App\Type\SmevFault;

class BusinessDataTypeIsNotSupported extends SmevFault
{
    /**
     * Local name корневого элемента содержательной части запроса.
     *
     * @var string
     */
    private string $RootElementLocalName;

    /**
     * Namespace URI корневого элемента содержательной части запроса.
     *
     * @var string
     */
    private string $RootElementNamespaceURI;

    /**
     * @return string
     */
    public function getRootElementLocalName() : string
    {
        return $this->RootElementLocalName;
    }

    /**
     * @param string $RootElementLocalName
     * @return static
     */
    public function withRootElementLocalName(string $RootElementLocalName) : static
    {
        $new = clone $this;
        $new->RootElementLocalName = $RootElementLocalName;

        return $new;
    }

    /**
     * @return string
     */
    public function getRootElementNamespaceURI() : string
    {
        return $this->RootElementNamespaceURI;
    }

    /**
     * @param string $RootElementNamespaceURI
     * @return static
     */
    public function withRootElementNamespaceURI(string $RootElementNamespaceURI) : static
    {
        $new = clone $this;
        $new->RootElementNamespaceURI = $RootElementNamespaceURI;

        return $new;
    }
}


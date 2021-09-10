<?php
namespace OnixComponents;

use SimpleXMLElement;

class PublisherIDType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePublisherIDType)
    {
        $this->contents = (string) ($nodePublisherIDType);
    }
}


<?php
namespace OnixComponents;

use SimpleXMLElement;

class PublisherName
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePublisherName)
    {
        $this->contents = (string) ($nodePublisherName);
    }
}


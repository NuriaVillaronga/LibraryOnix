<?php
namespace OnixComponents;

use SimpleXMLElement;

class CitedContentType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeCitedContentType)
    {
        $this->contents = (string) $nodeCitedContentType;
    }
}


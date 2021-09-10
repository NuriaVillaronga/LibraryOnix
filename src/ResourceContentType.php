<?php
namespace OnixComponents;

use SimpleXMLElement;

class ResourceContentType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeResourceContentType)
    {
        $this->contents = (string) $nodeResourceContentType;
    }
}


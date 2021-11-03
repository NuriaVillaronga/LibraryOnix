<?php
namespace OnixComponents;

use SimpleXMLElement;

class SourceType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeSourceType)
    {
        $this->contents = (string) $nodeSourceType;
    }
}


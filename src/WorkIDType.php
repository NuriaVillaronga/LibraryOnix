<?php
namespace OnixComponents;

use SimpleXMLElement;

class WorkIDType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeWorkIDType)
    {
        $this->contents = (string) ($nodeWorkIDType);
    }
}


<?php
namespace OnixComponents;

use SimpleXMLElement;

class ROWSalesRightsType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeROWSalesRightsType)
    {
        $this->contents = (string) ($nodeROWSalesRightsType);
    }
}


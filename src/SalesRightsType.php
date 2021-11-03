<?php
namespace OnixComponents;

use SimpleXMLElement;

class SalesRightsType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeSalesRightsType)
    {
        $this->contents = (string) ($nodeSalesRightsType);
    }
}


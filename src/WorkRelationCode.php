<?php
namespace OnixComponents;

use SimpleXMLElement;

class WorkRelationCode
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeWorkRelationCode)
    {
        $this->contents = (string) ($nodeWorkRelationCode);
    }
}


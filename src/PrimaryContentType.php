<?php
namespace OnixComponents;

use SimpleXMLElement;

class PrimaryContentType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePrimaryContentType)
    {
        $this->contents = (string) $nodePrimaryContentType;
    }
}
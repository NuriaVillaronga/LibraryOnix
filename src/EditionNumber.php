<?php
namespace OnixComponents;

use SimpleXMLElement;

class EditionNumber
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeEditionNumber)
    {
        $this->contents = (string) $nodeEditionNumber;
    }
}
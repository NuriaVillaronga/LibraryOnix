<?php
namespace OnixComponents;

use SimpleXMLElement;

class SequenceNumber
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeSequenceNumber)
    {
        $this->contents = (string) ($nodeSequenceNumber);
    }
}


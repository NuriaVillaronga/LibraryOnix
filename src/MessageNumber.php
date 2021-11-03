<?php
namespace OnixComponents;

use SimpleXMLElement;

class MessageNumber
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeMessageNumber)
    {
        $this->contents = (string) $nodeMessageNumber;
    }
}


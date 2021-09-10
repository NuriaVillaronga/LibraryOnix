<?php
namespace OnixComponents;

use SimpleXMLElement;

class TelephoneNumber
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeTelephoneNumber)
    {
        $this->contents = (string) ($nodeTelephoneNumber);
    }
}


<?php
namespace OnixComponents;

use SimpleXMLElement;

class AddresseeName
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeAddresseeName)
    {
        $this->contents = (string) $nodeAddresseeName;
    }
}


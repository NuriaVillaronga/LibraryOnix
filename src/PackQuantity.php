<?php
namespace OnixComponents;

use SimpleXMLElement;

class PackQuantity
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePackQuantity)
    {
        $this->contents = (string) ($nodePackQuantity);
    }
}


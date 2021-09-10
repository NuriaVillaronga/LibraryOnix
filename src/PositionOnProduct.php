<?php
namespace OnixComponents;

use SimpleXMLElement;

class PositionOnProduct
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePositionOnProduct)
    {
        $this->contents = (string) ($nodePositionOnProduct);
    }
}


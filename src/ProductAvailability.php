<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductAvailability
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeProductAvailability)
    {
        $this->contents = (string) ($nodeProductAvailability);
    }
}


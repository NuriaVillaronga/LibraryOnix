<?php
namespace OnixComponents;

use SimpleXMLElement;

class DiscountPercent
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeDiscountPercent)
    {
        $this->contents = (string) ($nodeDiscountPercent);
    }
}


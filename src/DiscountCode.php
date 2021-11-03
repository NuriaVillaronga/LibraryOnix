<?php
namespace OnixComponents;

use SimpleXMLElement;

class DiscountCode
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeDiscountCode)
    {
        $this->contents = (string) ($nodeDiscountCode);
    }
}


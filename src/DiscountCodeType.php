<?php
namespace OnixComponents;

use SimpleXMLElement;

class DiscountCodeType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeDiscountCodeType)
    {
        $this->contents = (string) ($nodeDiscountCodeType);
    }
}


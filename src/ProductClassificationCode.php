<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductClassificationCode
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeProductClassificationCode)
    {
        $this->contents = (string) ($nodeProductClassificationCode);
    }
}


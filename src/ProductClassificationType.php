<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductClassificationType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeProductClassificationType)
    {
        $this->contents = (string) ($nodeProductClassificationType);
    }
}


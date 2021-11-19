<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductPackaging
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeProductPackaging)
    {
        $this->contents = (string) $nodeProductPackaging;
    }
}
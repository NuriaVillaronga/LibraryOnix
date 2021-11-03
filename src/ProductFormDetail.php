<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductFormDetail
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeProductFormDetail)
    {
        $this->contents = (string) ($nodeProductFormDetail);
    }
}


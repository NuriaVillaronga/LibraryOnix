<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductForm
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeProductForm)
    {
        $this->contents = (string) ($nodeProductForm);
    }
}


<?php
namespace OnixComponents;

use SimpleXMLElement;

class PrintedOnProduct
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePrintedOnProduct)
    {
        $this->contents = (string) ($nodePrintedOnProduct);
    }
}


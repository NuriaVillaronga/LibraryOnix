<?php
namespace OnixComponents;

use SimpleXMLElement;

class SupplierName
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeSupplierName)
    {
        $this->contents = (string) ($nodeSupplierName);
    }
}


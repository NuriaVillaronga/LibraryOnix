<?php
namespace OnixComponents;

use SimpleXMLElement;

class SupplierIDType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeSupplierIDType)
    {
        $this->contents = (string) ($nodeSupplierIDType);
    }
}


<?php
namespace OnixComponents;

use SimpleXMLElement;

class SupplierRole
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeSupplierRole)
    {
        $this->contents = (string) ($nodeSupplierRole);
    }
}


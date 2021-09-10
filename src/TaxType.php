<?php
namespace OnixComponents;

use SimpleXMLElement;

class TaxType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeTaxType)
    {
        $this->contents = (string) ($nodeTaxType);
    }
}


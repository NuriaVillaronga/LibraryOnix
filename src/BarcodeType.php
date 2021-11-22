<?php
namespace OnixComponents;

use SimpleXMLElement;

class BarcodeType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeBarcodeType)
    {
        $this->contents = (string) $nodeBarcodeType;
    }
}
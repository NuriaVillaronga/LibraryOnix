<?php
namespace OnixComponents;

use SimpleXMLElement;

class MeasureType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeMeasureType)
    {
        $this->contents = (string) ($nodeMeasureType);
    }
}


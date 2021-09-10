<?php
namespace OnixComponents;

use SimpleXMLElement;

class MeasureUnitCode
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeMeasureUnitCode)
    {
        $this->contents = (string) ($nodeMeasureUnitCode);
    }
}


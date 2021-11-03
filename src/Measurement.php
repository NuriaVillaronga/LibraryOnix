<?php
namespace OnixComponents;

use SimpleXMLElement;

class Measurement
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeMeasurement)
    {
        $this->contents = (string) ($nodeMeasurement);
    }
}


<?php
namespace OnixComponents;

use SimpleXMLElement;

class FeatureValue
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeFeatureValue)
    {
        $this->contents = (string) ($nodeFeatureValue);
    }
}


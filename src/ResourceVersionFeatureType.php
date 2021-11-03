<?php
namespace OnixComponents;

use SimpleXMLElement;

class ResourceVersionFeatureType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeResourceVersionFeatureType)
    {
        $this->contents = (string) ($nodeResourceVersionFeatureType);
    }
}


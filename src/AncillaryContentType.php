<?php
namespace OnixComponents;

use SimpleXMLElement;

class AncillaryContentType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeAncillaryContentType)
    {
        $this->contents = (string) ($nodeAncillaryContentType);   
    }
}
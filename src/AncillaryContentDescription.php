<?php
namespace OnixComponents;

use SimpleXMLElement;

class AncillaryContentDescription
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeAncillaryContentDescription)
    {
        $this->contents = (string) ($nodeAncillaryContentDescription); 
    }
}
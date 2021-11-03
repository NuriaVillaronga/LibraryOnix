<?php
namespace OnixComponents;

use SimpleXMLElement;

class AudienceCodeValue
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeAudienceCodeValue)
    {
        $this->contents = (string) ($nodeAudienceCodeValue);
    }
}


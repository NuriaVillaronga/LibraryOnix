<?php
namespace OnixComponents;

use SimpleXMLElement;

class AudienceCodeType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeAudienceCodeType)
    {
        $this->contents = (string) ($nodeAudienceCodeType);
    }
}


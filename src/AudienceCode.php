<?php
namespace OnixComponents;

use SimpleXMLElement;

class AudienceCode 
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeAudienceCode)
    {
        $this->contents = (string) $nodeAudienceCode;
    }
}
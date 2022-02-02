<?php
namespace OnixComponents;

use SimpleXMLElement;

class AudienceRangePrecision  
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeAudienceRangePrecision)
    {
        $this->contents = (string) $nodeAudienceRangePrecision;
    }
}
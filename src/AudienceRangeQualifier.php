<?php
namespace OnixComponents;

use SimpleXMLElement;

class AudienceRangeQualifier   
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeAudienceRangeQualifier)
    {
        $this->contents = (string) $nodeAudienceRangeQualifier;
    }
}
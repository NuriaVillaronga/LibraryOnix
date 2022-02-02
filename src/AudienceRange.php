<?php
namespace OnixComponents;

use SimpleXMLElement;

class AudienceRange 
{ 
    public AudienceRangeQualifier $audienceRangeQualifier; // (1)  

    public AudienceRangePrecision $audienceRangePrecision; // (1)  

    public function __construct(SimpleXMLElement $nodeAudienceRange)
    {
        $this->audienceRangePrecision = new AudienceRangePrecision($nodeAudienceRange->AudienceRangePrecision);
        $this->audienceRangeQualifier = new AudienceRangeQualifier($nodeAudienceRange->AudienceRangeQualifier);
    }
}
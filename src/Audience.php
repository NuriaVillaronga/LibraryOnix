<?php
namespace OnixComponents;

use SimpleXMLElement;

class Audience
{

    public AudienceCodeType $audienceCodeType; //1

    public AudienceCodeValue $audienceCodeValue; //1

    public function __construct(SimpleXMLElement $nodeAudience)
    {
        $this->audienceCodeType = new AudienceCodeType($nodeAudience->AudienceCodeType);
        $this->audienceCodeValue = new AudienceCodeValue($nodeAudience->AudienceCodeValue);
    }
}


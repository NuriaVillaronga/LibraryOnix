<?php
namespace OnixComponents;

use SimpleXMLElement;

class ReturnsConditions
{
    
    public ReturnsCodeType $returnsCodeType; //(1)
    
    public ReturnsCode $returnsCode; //(1)
    
    public function __construct(SimpleXMLElement $nodeReturnsConditions)
    {
        $this->returnsCodeType = new ReturnsCodeType($nodeReturnsConditions->ReturnsCodeType);
        $this->returnsCode = new ReturnsCode($nodeReturnsConditions->ReturnsCode);
    }
}


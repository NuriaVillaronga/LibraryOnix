<?php
namespace OnixComponents;

use SimpleXMLElement;

class WorkIdentifier
{
    
    public WorkIDType $workIDType; //(1)
    
    public IDValue $idValue; //(1) 
    
    public function __construct(SimpleXMLElement $nodeWorkIdentifier)
    {
        $this->workIDType = new WorkIDType($nodeWorkIdentifier->WorkIDType);
        $this->idValue = new IDValue($nodeWorkIdentifier->IDValue);
    }
}


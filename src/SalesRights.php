<?php
namespace OnixComponents;

use SimpleXMLElement;

class SalesRights
{
    
    public SalesRightsType $salesRightsType; //(1)
    
    public Territory $territory; //(1) 
    
    public function __construct(SimpleXMLElement $nodeSalesRights)
    {
        $this->salesRightsType = new SalesRightsType($nodeSalesRights->SalesRightsType);
        $this->territory = new Territory($nodeSalesRights->Territory);
    }
}


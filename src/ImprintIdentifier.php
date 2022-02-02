<?php
namespace OnixComponents;

use SimpleXMLElement;

class ImprintIdentifier 
{
      
    public ImprintIDType $imprintIDType; //(1) 
    
    public IDValue $idValue; //(1) 
    
    public ?IDTypeName $idTypeName; //(0,1) 
    
    public function __construct(SimpleXMLElement $nodeImprintIdentifier)
    {
        $this->idValue = new IDValue($nodeImprintIdentifier->IDValue);
        $this->imprintIDType = new ImprintIDType($nodeImprintIdentifier->ImprintIDType);

        if (isset($nodeImprintIdentifier->IDTypeName) == true) {
            $this->idTypeName = new IDTypeName($nodeImprintIdentifier->IDTypeName);
        } else {
            $this->idTypeName = null;
        }
    }
}
<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductIdentifier
{
    
    public ProductIDType $productIDType; //(1)
    
    public IDValue $idValue; //(1)
    
    public function __construct(SimpleXMLElement $nodeProductIdentifier)
    {
        $this->productIDType = new ProductIDType($nodeProductIdentifier->ProductIDType);
        $this->idValue = new IDValue($nodeProductIdentifier->IDValue);
    }
}


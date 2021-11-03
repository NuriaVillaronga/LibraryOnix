<?php
namespace OnixComponents;

use SimpleXMLElement;

class SupplierIdentifier
{
    public SupplierIDType $supplierIDType; //(1)
    
    public IDValue $idValue; //(1)
    
    public function __construct(SimpleXMLElement $nodeSupplierIdentifier)
    {
        $this->supplierIDType = new SupplierIDType($nodeSupplierIdentifier->SupplierIDType);
        $this->idValue = new IDValue($nodeSupplierIdentifier->IDValue);
    }
}


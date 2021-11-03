<?php
namespace OnixComponents;

use SimpleXMLElement;

class Supplier
{
    
    public ?SupplierIdentifierList $supplierIdentifierList; //(0,n)
    
    public ?TelephoneNumberList $telephoneNumberList; //(0,n)
    
    public ?SupplierName $supplierName; //(0,1)
    
    public SupplierRole $supplierRole; //(1) 
    
    public function __construct(SimpleXMLElement $nodeSupplier)
    {
        $this->supplierRole = new SupplierRole($nodeSupplier->SupplierRole);

        if (isset($nodeSupplier->SupplierName) == true) {
            $this->supplierName = new SupplierName($nodeSupplier->SupplierName);
        } else {
            $this->supplierName = null;
        }

        if (isset($nodeSupplier->TelephoneNumber) == true) {
            $this->telephoneNumberList = new TelephoneNumberList($nodeSupplier);
        } else {
            $this->telephoneNumberList = null;
        }

        if (isset($nodeSupplier->SupplierIdentifier) == true) {
            $this->supplierIdentifierList = new SupplierIdentifierList($nodeSupplier);
        } else {
            $this->supplierIdentifierList = null;
        }
    }
}


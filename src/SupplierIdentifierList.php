<?php
namespace OnixComponents;

use SimpleXMLElement;

class SupplierIdentifierList
{

    /**
     *
     * @var SupplierIdentifier[]
     */
    public $arraySupplierIdentifier = array();

    public function __construct(SimpleXMLElement $nodeSupplier)
    {
        foreach ($nodeSupplier->SupplierIdentifier as $nodeSupplierIdentifier) {
            $this->arraySupplierIdentifier[] = new SupplierIdentifier($nodeSupplierIdentifier);
        }
    }
}


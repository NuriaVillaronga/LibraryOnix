<?php
namespace test;
use OnixComponents\SupplierIdentifier;
use PHPUnit\Framework\TestCase;

class SupplierIdentifierTest extends TestCase
{
    public function testSupplierIdentifier(){
        
        $nodoSupplierIdentifier = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                        <SupplierIdentifier>
                                    						<SupplierIDType>06</SupplierIDType>
                                    						<IDValue>5051366000000</IDValue>
                                    					</SupplierIdentifier>');
        
        $supplierIdentifier = new SupplierIdentifier($nodoSupplierIdentifier);
        $this->assertNotNull($supplierIdentifier->supplierIDType);
        $this->assertNotNull($supplierIdentifier->idValue);
    }
}


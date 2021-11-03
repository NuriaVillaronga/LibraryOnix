<?php
namespace test;
use OnixComponents\SupplierIdentifier;
use OnixComponents\SupplierIdentifierList;
use PHPUnit\Framework\TestCase;

class SupplierIdentifierListTest extends TestCase
{
    public function testSupplyDetailList(){
        
        $nodoSupplierIdentifierList = simplexml_load_file(__DIR__.'/books/bookSupplierIdentifierList.xml');
        
        $supplierIdentifierList = new SupplierIdentifierList($nodoSupplierIdentifierList);
        
        $this->assertCount(2, $supplierIdentifierList->arraySupplierIdentifier);
        
        foreach ($supplierIdentifierList->arraySupplierIdentifier as $supplierIdentifierListComponent){
            $this->assertNotNull($supplierIdentifierListComponent);
            $this->assertInstanceOf(SupplierIdentifier::class, $supplierIdentifierListComponent);
        }
    }
}


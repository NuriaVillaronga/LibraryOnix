<?php
namespace test;
use OnixComponents\Supplier;
use PHPUnit\Framework\TestCase;

class SupplierTest extends TestCase
{
    public function testSupplier(){
        
        $nodoSupplier = simplexml_load_file(__DIR__.'/books/bookSupplier.xml');
        
        $supplier = new Supplier($nodoSupplier);
        $this->assertNotNull($supplier->supplierIdentifierList);
        $this->assertNotNull($supplier->telephoneNumberList);
        $this->assertNotNull($supplier->supplierName);
        $this->assertNotNull($supplier->supplierRole);
    }
    
    public function testNullSupplier(){
        
        $nodoSupplier = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                <Supplier>
                                                	<SupplierRole>01</SupplierRole>
                                                </Supplier>');
        
        $supplier = new Supplier($nodoSupplier);
        $this->assertNull($supplier->supplierIdentifierList);
        $this->assertNull($supplier->telephoneNumberList);
        $this->assertNull($supplier->supplierName);
        $this->assertNotNull($supplier->supplierRole);
    }
}


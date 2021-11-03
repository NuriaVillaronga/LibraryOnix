<?php
namespace test;
use OnixComponents\SupplierName;
use PHPUnit\Framework\TestCase;

class SupplierNameTest extends TestCase
{
    public function testSupplierName(){
        
        $nodoSupplierName = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                   <SupplierName>HarperCollins Publishers</SupplierName>');
        
        $supplierName = new SupplierName($nodoSupplierName);
        $this->assertEquals('HarperCollins Publishers', $supplierName->contents); 
    }
}


<?php
namespace test;
use OnixComponents\SupplierIDType;
use PHPUnit\Framework\TestCase;

class SupplierIDTypeTest extends TestCase
{
    public function testSupplierIDType(){
        
        $nodoSupplierIDType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                     <SupplierIDType>07</SupplierIDType>');
        
        $supplierIDType = new SupplierIDType($nodoSupplierIDType);
        $this->assertEquals('07', $supplierIDType->contents);
    }
}


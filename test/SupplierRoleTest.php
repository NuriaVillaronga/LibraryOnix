<?php
namespace test;
use OnixComponents\SupplierRole;
use PHPUnit\Framework\TestCase;

class SupplierRoleTest extends TestCase
{
    public function testSupplierRole(){
        
        $nodoSupplierRole = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                   <SupplierRole>01</SupplierRole>');
        
        $supplierRole = new SupplierRole($nodoSupplierRole);
        $this->assertEquals('01', $supplierRole->contents);
    }
}


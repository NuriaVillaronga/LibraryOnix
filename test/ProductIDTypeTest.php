<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\ProductIDType;

class ProductIDTypeTest extends TestCase
{
    public function testProductIDType(){
        
        $nodoProductIDType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                    <ProductIDType>15</ProductIDType>');
        
        $productIDType = new ProductIDType($nodoProductIDType);
        $this->assertEquals('15', $productIDType->contents);
    }
}


<?php
namespace test;
use OnixComponents\ProductIdentifier;
use PHPUnit\Framework\TestCase;

class ProductIdentifierTest extends TestCase
{
    public function testProductIdentifier(){
        
        $nodoProductIdentifier = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                        <ProductIdentifier>
					                                       <ProductIDType>03</ProductIDType>
					                                       <IDValue>9780007324378</IDValue>
				                                        </ProductIdentifier>');
        
        $productIdentifier = new ProductIdentifier($nodoProductIdentifier);
        $this->assertNotNull($productIdentifier->productIDType);
        $this->assertNotNull($productIdentifier->idValue);
    }
}


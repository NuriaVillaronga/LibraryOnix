<?php
namespace test;
use OnixComponents\ProductSupply;
use PHPUnit\Framework\TestCase;

class ProductSupplyTest extends TestCase
{
    public function testProductSupply(){
        
        $nodoProductSupply = simplexml_load_file(__DIR__.'/books/bookProductSupply.xml');
        
        $productSupply = new ProductSupply($nodoProductSupply);
        $this->assertNotNull($productSupply->marketList);
        $this->assertNotNull($productSupply->supplyDetailList);
        $this->assertNotNull($productSupply->marketPublishingDetail);
    }
    
    public function testNullProductSupply(){
        
        $nodoProductSupply = simplexml_load_file(__DIR__.'/books/bookProductSupplyNull.xml');
        
        $productSupply = new ProductSupply($nodoProductSupply);
        $this->assertNull($productSupply->marketList);
        $this->assertNotNull($productSupply->supplyDetailList);
        $this->assertNull($productSupply->marketPublishingDetail);
    }
}


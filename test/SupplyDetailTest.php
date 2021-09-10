<?php
namespace test;
use OnixComponents\SupplyDetail;
use PHPUnit\Framework\TestCase;

class SupplyDetailTest extends TestCase
{
    public function testSupplyDetail(){
        
        $nodoSupplyDetail = simplexml_load_file(__DIR__.'/books/bookSupplyDetail.xml');
        
        $supplyDetail = new SupplyDetail($nodoSupplyDetail);
        $this->assertNotNull($supplyDetail->returnsConditionsList);
        $this->assertNotNull($supplyDetail->priceList);
        $this->assertNotNull($supplyDetail->packQuantity);
        $this->assertNotNull($supplyDetail->supplier);
        $this->assertNotNull($supplyDetail->productAvailability);
    }
    
    public function testNullSupplyDetail(){
        
        $nodoSupplyDetail = simplexml_load_file(__DIR__.'/books/bookSupplyDetailNull.xml');
        
        $supplyDetail = new SupplyDetail($nodoSupplyDetail);
        $this->assertNull($supplyDetail->returnsConditionsList);
        $this->assertNull($supplyDetail->priceList);
        $this->assertNull($supplyDetail->packQuantity);
        $this->assertNotNull($supplyDetail->supplier);
        $this->assertNotNull($supplyDetail->productAvailability);
    }
}


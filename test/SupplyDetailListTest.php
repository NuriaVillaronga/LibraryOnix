<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\SupplyDetail;
use OnixComponents\SupplyDetailList;

class SupplyDetailListTest extends TestCase
{
    public function testSupplyDetailList(){
        
        $nodoSupplyDetailList = simplexml_load_file(__DIR__.'/books/bookSupplyDetailList.xml');
        
        $supplyDetailList = new SupplyDetailList($nodoSupplyDetailList);
        
        $this->assertCount(1, $supplyDetailList->arraySupplyDetail);
        
        foreach ($supplyDetailList->arraySupplyDetail as $supplyDetailListComponent){
            $this->assertNotNull($supplyDetailListComponent);
            $this->assertInstanceOf(SupplyDetail::class, $supplyDetailListComponent);
        }
    }
}


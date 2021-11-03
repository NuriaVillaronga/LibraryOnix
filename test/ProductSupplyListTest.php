<?php
namespace test;
use OnixComponents\ProductSupply;
use OnixComponents\ProductSupplyList;
use PHPUnit\Framework\TestCase;

class ProductSupplyListTest extends TestCase
{
    public function testProductSupplyList(){
        
        $nodoProductSupplyList = simplexml_load_file(__DIR__.'/books/bookProductSupplyList.xml');
        
        $productSupplyList = new ProductSupplyList($nodoProductSupplyList);
        
        $this->assertCount(1, $productSupplyList->arrayProductSupply);
        
        foreach ($productSupplyList->arrayProductSupply as $productSupplyListComponent){
            $this->assertNotNull($productSupplyListComponent);
            $this->assertInstanceOf(ProductSupply::class, $productSupplyListComponent);
        }
    }
}


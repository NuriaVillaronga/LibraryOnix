<?php
namespace test;
use OnixComponents\ProductClassification;
use OnixComponents\ProductClassificationList;
use PHPUnit\Framework\TestCase;

class ProductClassificationListTest extends TestCase
{
    public function testProductClassificationList(){
        
        $nodoProductClassificationList = simplexml_load_file(__DIR__.'/books/bookProductClassificationList.xml');
        
        $productClassificationList = new ProductClassificationList($nodoProductClassificationList);
        
        $this->assertCount(1, $productClassificationList->arrayProductClassification);
        
        foreach ($productClassificationList->arrayProductClassification as $productClassificationListComponent){
            $this->assertNotNull($productClassificationListComponent);
            $this->assertInstanceOf(ProductClassification::class, $productClassificationListComponent);
        }
    }
}


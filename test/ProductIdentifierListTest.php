<?php
namespace test;
use OnixComponents\ProductIdentifier;
use OnixComponents\ProductIdentifierList;
use PHPUnit\Framework\TestCase;

class ProductIdentifierListTest extends TestCase
{
    public function testProductIdentifierList(){
        
        $nodoProductIdentifierList = simplexml_load_file(__DIR__.'/books/bookProductIdentifierList.xml');
        
        $productIdentifierList = new ProductIdentifierList($nodoProductIdentifierList);
        
        $this->assertCount(2, $productIdentifierList->arrayProductIdentifier);
        
        foreach ($productIdentifierList->arrayProductIdentifier as $productIdentifierListComponent){
            $this->assertNotNull($productIdentifierListComponent);
            $this->assertInstanceOf(ProductIdentifier::class, $productIdentifierListComponent);
        }
    }
}


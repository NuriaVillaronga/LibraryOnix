<?php
namespace test;
use OnixComponents\Product;
use OnixComponents\ProductList;
use PHPUnit\Framework\TestCase;

class ProductListTest extends TestCase
{
    public function testProductList(){
        
        $nodoProductList = simplexml_load_file(__DIR__.'/books/bookProductList.xml');
        
        $productList = new ProductList($nodoProductList);
        
        $this->assertCount(1, $productList->arrayProduct); 
        
        foreach ($productList->arrayProduct as $productListComponent){
            $this->assertNotNull($productListComponent);
            $this->assertInstanceOf(Product::class, $productListComponent);
        }
    }
}


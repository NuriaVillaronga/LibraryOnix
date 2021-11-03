<?php
namespace test;
use OnixComponents\RelatedProductList;
use OnixComponents\RelatedProduct;
use PHPUnit\Framework\TestCase;

class RelatedProductListTest extends TestCase
{
    public function testRelatedProductList(){
        
        $nodoRelatedProductList = simplexml_load_file(__DIR__.'/books/bookRelatedProductList.xml');
        
        $relatedProductList = new RelatedProductList($nodoRelatedProductList);
        
        $this->assertCount(1, $relatedProductList->arrayRelatedProduct);
        
        foreach ($relatedProductList->arrayRelatedProduct as $relatedProductListComponent){
            $this->assertNotNull($relatedProductListComponent);
            $this->assertInstanceOf(RelatedProduct::class, $relatedProductListComponent);
        }
    }
}


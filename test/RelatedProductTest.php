<?php
namespace test;
use OnixComponents\RelatedProduct;
use PHPUnit\Framework\TestCase;

class RelatedProductTest extends TestCase
{
    public function testRelatedProduct(){
        
        $nodoRelatedProduct = simplexml_load_file('test/books/bookRelatedProduct.xml');
        
        $relatedProduct = new RelatedProduct($nodoRelatedProduct);
        $this->assertNotNull($relatedProduct->productRelationCodeList);
        $this->assertNotNull($relatedProduct->productIdentifierList);
    }
}


<?php
namespace test;
use OnixComponents\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testProduct(){
        
        $nodoProduct = simplexml_load_file(__DIR__.'/books/bookProduct.xml');
        
        $product = new Product($nodoProduct);
        $this->assertNotNull($product->recordReference);
        $this->assertNotNull($product->notificationType);
        $this->assertNotNull($product->productIdentifierList);
        $this->assertNotNull($product->recordSourceType);
        $this->assertNotNull($product->recordSourceName);
        $this->assertNotNull($product->descriptiveDetail);
        $this->assertNotNull($product->collateralDetail);
        $this->assertNotNull($product->publishingDetail);
        $this->assertNotNull($product->relatedMaterial);
        $this->assertNotNull($product->productSupplyList);
        $this->assertNotNull($product->recordSourceIdentifierList);
    }
    
    public function testNullProduct(){
        
        $nodoProduct = simplexml_load_file(__DIR__.'/books/bookProductNull.xml');
        
        $product = new Product($nodoProduct);
        $this->assertNotNull($product->recordReference);
        $this->assertNotNull($product->notificationType);
        $this->assertNotNull($product->productIdentifierList);
        $this->assertNull($product->recordSourceType);
        $this->assertNull($product->recordSourceName);
        $this->assertNull($product->descriptiveDetail);
        $this->assertNull($product->collateralDetail);
        $this->assertNull($product->publishingDetail);
        $this->assertNull($product->relatedMaterial);
        $this->assertNull($product->productSupplyList);
        $this->assertNull($product->recordSourceIdentifierList);
    }
}


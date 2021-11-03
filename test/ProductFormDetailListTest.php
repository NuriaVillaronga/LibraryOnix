<?php
namespace test;
use OnixComponents\ProductFormDetail;
use OnixComponents\ProductFormDetailList;
use PHPUnit\Framework\TestCase;

class ProductFormDetailListTest extends TestCase
{
    public function testProductFormDetailList(){
        
        $nodoProductFormDetailList = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                            <DescriptiveDetail>			
    			                                                <ProductFormDetail>B105</ProductFormDetail>
                                                            </DescriptiveDetail>');
        
        $productFormDetailList = new ProductFormDetailList($nodoProductFormDetailList);
        
        $this->assertCount(1, $productFormDetailList->arrayProductFormDetail);
        
        foreach ($productFormDetailList->arrayProductFormDetail as $productFormDetailListComponent){
            $this->assertNotNull($productFormDetailListComponent);
            $this->assertInstanceOf(ProductFormDetail::class, $productFormDetailListComponent);
        }
    }
}


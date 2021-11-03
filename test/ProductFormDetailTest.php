<?php
namespace test;
use OnixComponents\ProductFormDetail;
use PHPUnit\Framework\TestCase;

class ProductFormDetailTest extends TestCase
{
    public function testProductFormDetail(){
        
        $nodoProductFormDetail = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                        <ProductFormDetail>B105</ProductFormDetail>');
        
        $productFormDetail = new ProductFormDetail($nodoProductFormDetail);
        $this->assertEquals('B105', $productFormDetail->contents);
    }
}


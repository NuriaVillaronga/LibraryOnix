<?php
namespace test;
use OnixComponents\ProductRelationCode;
use PHPUnit\Framework\TestCase;

class ProductRelationCodeTest extends TestCase
{
    public function testProductRelationCode(){
        
        $nodoProductRelationCode = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                          <ProductRelationCode>27</ProductRelationCode>');
        
        $productRelationCode = new ProductRelationCode($nodoProductRelationCode);
        $this->assertEquals('27', $productRelationCode->contents);
    }
}


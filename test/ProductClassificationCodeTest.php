<?php
namespace test;
use OnixComponents\ProductClassificationCode;
use PHPUnit\Framework\TestCase;

class ProductClassificationCodeTest extends TestCase
{
    public function testProductClassificationCode(){
        
        $nodoProductClassificationCode = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                                <ProductClassificationCode>49019900</ProductClassificationCode>');
        
        $productClassificationCode = new ProductClassificationCode($nodoProductClassificationCode);
        $this->assertEquals('49019900', $productClassificationCode->contents);
    }
}


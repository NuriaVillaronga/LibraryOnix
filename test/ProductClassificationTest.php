<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\ProductClassification;

class ProductClassificationTest extends TestCase
{
    public function testProductClassification(){
        
        $nodoProductClassification = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                            <ProductClassification>
                                                				<ProductClassificationType>03</ProductClassificationType>
                                                				<ProductClassificationCode>49019900</ProductClassificationCode>
                                                			</ProductClassification>');
        
        $productClassification= new ProductClassification($nodoProductClassification);
        $this->assertNotNull($productClassification->productClassificationType);
        $this->assertNotNull($productClassification->productClassificationCode);
    }
}
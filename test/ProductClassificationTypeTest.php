<?php
namespace test;
use OnixComponents\ProductClassificationType;
use PHPUnit\Framework\TestCase;

class ProductClassificationTypeTest extends TestCase
{
    public function testProductClassificationType(){
        
        $nodoProductClassificationType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                                <ProductClassificationType>03</ProductClassificationType>');
        
        $productClassificationType = new ProductClassificationType($nodoProductClassificationType);
        $this->assertEquals('03', $productClassificationType->contents);
    }
}


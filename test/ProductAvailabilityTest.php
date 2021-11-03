<?php
namespace test;
use OnixComponents\ProductAvailability;
use PHPUnit\Framework\TestCase;

class ProductAvailabilityTest extends TestCase
{
    public function testProductAvailability(){
        
        $nodoProductAvailability = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                          <ProductAvailability>21</ProductAvailability>');
        
        $productAvailability = new ProductAvailability($nodoProductAvailability);
        $this->assertEquals('21', $productAvailability->contents); 
    }
}


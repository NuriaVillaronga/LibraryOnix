<?php
namespace test;
use OnixComponents\DiscountCode;
use PHPUnit\Framework\TestCase;

class DiscountCodeTest extends TestCase
{
    public function testDiscountCode(){
        
        $nodoDiscountCode = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                   <DiscountCode>AHACP029</DiscountCode>');
        
        $discountCode = new DiscountCode($nodoDiscountCode);
        $this->assertEquals('AHACP029', $discountCode->contents); 
    }
}


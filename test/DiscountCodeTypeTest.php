<?php
namespace test;
use OnixComponents\DiscountCodeType;
use PHPUnit\Framework\TestCase;

class DiscountCodeTypeTest extends TestCase
{
    public function testDiscountCodeType(){
        
        $nodoDiscountCodeType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                   <DiscountCodeType>01</DiscountCodeType>');
        
        $discountCodeType = new DiscountCodeType($nodoDiscountCodeType);
        $this->assertEquals('01', $discountCodeType->contents);
    }
}


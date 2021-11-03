<?php
namespace test;
use OnixComponents\Discount;
use PHPUnit\Framework\TestCase;

class DiscountTest extends TestCase
{
    public function testDiscount(){
        
        $nodoDiscount = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                               <Discount>
                            					   <DiscountPercent>37.5</DiscountPercent>
                            				   </Discount>');
        
        $discount = new Discount($nodoDiscount);
        $this->assertNotNull($discount->discountPercent);
    }
    
    public function testNullDiscount(){
        
        $nodoDiscount = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                               <Discount></Discount>');
        
        $discount = new Discount($nodoDiscount);
        $this->assertNull($discount->discountPercent);
    }
}


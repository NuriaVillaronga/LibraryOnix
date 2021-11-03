<?php
namespace test;
use OnixComponents\DiscountCoded;
use PHPUnit\Framework\TestCase;

class DiscountCodedTest extends TestCase
{
    public function testDiscountCoded(){
        
        $nodoDiscountCoded = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                    <DiscountCoded>
                                						<DiscountCodeType>01</DiscountCodeType>
                                						<DiscountCode>AHACP029</DiscountCode>
                                					</DiscountCoded>');
        
        $discountCoded = new DiscountCoded($nodoDiscountCoded);
        $this->assertNotNull($discountCoded->discountCodeType);
        $this->assertNotNull($discountCoded->discountCode);
    }
}


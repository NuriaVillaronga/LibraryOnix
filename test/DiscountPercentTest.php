<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\DiscountPercent;

class DiscountPercentTest extends TestCase
{
    public function testDiscountPercent(){
        
        $nodoDiscountPercent = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                      <DiscountPercent>37.5</DiscountPercent>');
        
        $discountPercent = new DiscountPercent($nodoDiscountPercent);
        $this->assertEquals('37.5', $discountPercent->contents);
    }
}


<?php
namespace test;
use OnixComponents\PriceAmount;
use PHPUnit\Framework\TestCase;

class PriceAmountTest extends TestCase
{
    public function testPriceAmount(){
        
        $nodoPriceAmount = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <PriceAmount>7.99</PriceAmount>');
        
        $priceAmount = new PriceAmount($nodoPriceAmount);
        $this->assertEquals('7.99', $priceAmount->contenido);
    }
}


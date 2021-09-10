<?php
namespace test;
USE OnixComponents\PriceType;
use PHPUnit\Framework\TestCase;

class PriceTypeTest extends TestCase
{
    public function testPriceType(){
        
        $nodoPriceType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                <PriceType>02</PriceType>');
        
        $priceType = new PriceType($nodoPriceType);
        $this->assertEquals('02', $priceType->contenido);
    }
}


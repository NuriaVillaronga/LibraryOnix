<?php
namespace test;
use OnixComponents\PriceStatus;
use PHPUnit\Framework\TestCase;

class PriceStatusTest extends TestCase
{
    public function testPriceStatus(){
        
        $nodoPriceStatus = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <PriceStatus>02</PriceStatus>');
        
        $priceStatus = new PriceStatus($nodoPriceStatus);
        $this->assertEquals('02', $priceStatus->contenido);
    }
}


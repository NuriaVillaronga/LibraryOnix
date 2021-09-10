<?php
namespace test;
use OnixComponents\CurrencyCode;
use PHPUnit\Framework\TestCase;

class CurrencyCodeTest extends TestCase
{
    public function testCurrencyCode(){
        
        $nodoCurrencyCode = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                   <CurrencyCode>EUR</CurrencyCode>');
        
        $currencyCode = new CurrencyCode($nodoCurrencyCode);
        $this->assertEquals('EUR', $currencyCode->contents);
    }
}


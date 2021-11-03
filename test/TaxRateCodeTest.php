<?php
namespace test;
use OnixComponents\TaxRateCode;
use PHPUnit\Framework\TestCase;

class TaxRateCodeTest extends TestCase
{
    public function testTaxRateCode(){
        
        $nodoTaxRateCode = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <TaxRateCode>Z</TaxRateCode>');
        
        $taxRateCode = new TaxRateCode($nodoTaxRateCode);
        $this->assertEquals('Z', $taxRateCode->contents);
    }
}


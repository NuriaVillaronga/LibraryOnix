<?php
namespace test;
use OnixComponents\TaxRatePercent;
use PHPUnit\Framework\TestCase;

class TaxRatePercentTest extends TestCase
{
    public function testTaxRatePercent(){
        
        $nodoTaxRatePercent = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                     <TaxRatePercent>0</TaxRatePercent>');
        
        $taxRatePercent = new TaxRatePercent($nodoTaxRatePercent);
        $this->assertEquals('0', $taxRatePercent->contents);
    }
}


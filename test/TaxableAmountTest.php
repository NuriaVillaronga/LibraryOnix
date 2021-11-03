<?php
namespace test;
use OnixComponents\TaxableAmount;
use PHPUnit\Framework\TestCase;

class TaxableAmountTest extends TestCase
{
    public function testTaxableAmount(){
        
        $nodoTaxableAmount = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                    <TaxableAmount>7.99</TaxableAmount>');
        
        $taxableAmount = new TaxableAmount($nodoTaxableAmount);
        $this->assertEquals('7.99', $taxableAmount->contents);
    }
}


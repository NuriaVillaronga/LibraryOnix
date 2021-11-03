<?php
namespace test;
use OnixComponents\TaxAmount;
use PHPUnit\Framework\TestCase;

class TaxAmountTest extends TestCase
{
    public function testTaxAmount(){
        
        $nodoTaxAmount = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                <TaxAmount>0.00</TaxAmount>');
        
        $taxAmount = new TaxAmount($nodoTaxAmount);
        $this->assertEquals('0.00', $taxAmount->contents);
    }
}


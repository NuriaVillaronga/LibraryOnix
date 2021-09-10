<?php
namespace test;
use OnixComponents\Tax;
use PHPUnit\Framework\TestCase;

class TaxTest extends TestCase
{
    public function testTax(){
        
        $nodoTax = simplexml_load_file(__DIR__.'/books/bookTax.xml');
        
        $tax = new Tax($nodoTax);
        $this->assertNotNull($tax->taxType);
        $this->assertNotNull($tax->taxRateCode);
        $this->assertNotNull($tax->taxRatePercent);
        $this->assertNotNull($tax->taxableAmount);
        $this->assertNotNull($tax->taxAmount);
    }

    public function testNullTax(){
        
        $nodoTax = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                          <Tax></Tax>');
        $tax = new Tax($nodoTax);
        $this->assertNull($tax->taxType);
        $this->assertNull($tax->taxRateCode);
        $this->assertNull($tax->taxRatePercent);
        $this->assertNull($tax->taxableAmount);
        $this->assertNull($tax->taxAmount);
    }
}


<?php
namespace test;
use OnixComponents\TaxType;
use PHPUnit\Framework\TestCase;

class TaxTypeTest extends TestCase
{
    public function testTaxType(){
        
        $nodoTaxType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                              <TaxType>01</TaxType>');
        
        $taxType = new TaxType($nodoTaxType);
        $this->assertEquals('01', $taxType->contents); 
    }
}


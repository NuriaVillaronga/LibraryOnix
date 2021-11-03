<?php
namespace test;
use OnixComponents\SalesRightsType;
use PHPUnit\Framework\TestCase;

class SalesRightsTypeTest extends TestCase
{
    public function testSalesRightsType(){
        
        $nodoSalesRightsType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                      <SalesRightsType>06</SalesRightsType>');
        
        $salesRightsType = new SalesRightsType($nodoSalesRightsType);
        $this->assertEquals('06', $salesRightsType->contents);
    }
}


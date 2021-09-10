<?php
namespace test;
use OnixComponents\SalesRights;
use PHPUnit\Framework\TestCase;

class SalesRightsTest extends TestCase
{
    public function testSalesRights(){
        
        $nodoSalesRights = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <SalesRights>
                                        				<SalesRightsType>01</SalesRightsType>
                                        				<Territory>
                                        					<CountriesIncluded>AG AI AU BB BD BM BN SC SD SG SH SL SO ZW</CountriesIncluded>
                                        				</Territory>
                                        		  </SalesRights>');
        
        $salesRights = new SalesRights($nodoSalesRights);
        $this->assertNotNull($salesRights->salesRightsType);
        $this->assertNotNull($salesRights->territory);
    }
}


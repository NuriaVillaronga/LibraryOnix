<?php
namespace test;
use OnixComponents\ReturnsConditions;
use PHPUnit\Framework\TestCase;

class ReturnsConditionsTest extends TestCase
{
    public function testReturnsConditions(){
        
        $nodoReturnsConditions = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                    	 <ReturnsConditions>
        					                                  <ReturnsCodeType>02</ReturnsCodeType>
        					                                  <ReturnsCode>Y</ReturnsCode>
        				                                 </ReturnsConditions>');
        
        $returnsConditions = new ReturnsConditions($nodoReturnsConditions);
        $this->assertNotNull($returnsConditions->returnsCodeType);
        $this->assertNotNull($returnsConditions->returnsCode);
    }
}


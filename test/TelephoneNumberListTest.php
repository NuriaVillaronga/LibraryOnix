<?php
namespace test;
use OnixComponents\TelephoneNumber;
use OnixComponents\TelephoneNumberList;
use PHPUnit\Framework\TestCase;

class TelephoneNumberListTest extends TestCase
{
    public function testTelephoneNumberList(){
        
        $nodoTelephoneNumberList = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                          <Supplier>
					                                           <TelephoneNumber>+44 1417 723200</TelephoneNumber>
                                                               <TelephoneNumber>+21 3987 965321</TelephoneNumber>
				                                          </Supplier>');
        
        $telephoneNumberList = new TelephoneNumberList($nodoTelephoneNumberList);
        
        $this->assertCount(2, $telephoneNumberList->arrayTelephoneNumber);
        
        foreach ($telephoneNumberList->arrayTelephoneNumber as $telephoneNumberListComponent){
            $this->assertNotNull($telephoneNumberListComponent);
            $this->assertInstanceOf(TelephoneNumber::class, $telephoneNumberListComponent);
        }
    }
}


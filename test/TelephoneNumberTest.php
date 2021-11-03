<?php
namespace test;
use OnixComponents\TelephoneNumber;
use PHPUnit\Framework\TestCase;

class TelephoneNumberTest extends TestCase
{
    public function testTelephoneNumber(){
        
        $nodoTelephoneNumber = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                      <TelephoneNumber>+44 1417 723200</TelephoneNumber>');
        
        $telephoneNumber = new TelephoneNumber($nodoTelephoneNumber);
        $this->assertEquals('+44 1417 723200', $telephoneNumber->contents);
    }
}


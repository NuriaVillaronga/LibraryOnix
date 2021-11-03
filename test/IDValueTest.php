<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\IDValue;

class IDValueTest extends TestCase
{
    public function testIDValue(){
        
        $nodoIDValue = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                              <IDValue>9780007232833</IDValue>');
        
        $iDValue = new IDValue($nodoIDValue);
        $this->assertEquals('9780007232833', $iDValue->contents);
    }
}


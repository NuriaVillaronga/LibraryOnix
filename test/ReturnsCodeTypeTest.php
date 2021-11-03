<?php
namespace test;
use OnixComponents\ReturnsCodeType;
use PHPUnit\Framework\TestCase;

class ReturnsCodeTypeTest extends TestCase
{
    public function testReturnsCodeType(){
        
        $nodoReturnsCodeType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                      <ReturnsCodeType>02</ReturnsCodeType>');
        
        $returnsCodeType = new ReturnsCodeType($nodoReturnsCodeType);
        $this->assertEquals('02', $returnsCodeType->contents);
    }
}


<?php
namespace test;
use OnixComponents\ReturnsCode;
use PHPUnit\Framework\TestCase;

class ReturnsCodeTest extends TestCase
{
    public function testReturnsCode(){
        
        $nodoReturnsCode = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <ReturnsCode>Y</ReturnsCode>');
        
        $returnsCode = new ReturnsCode($nodoReturnsCode);
        $this->assertEquals('Y', $returnsCode->contents);
    }
}


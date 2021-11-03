<?php
namespace test;
use OnixComponents\ExtentUnit;
use PHPUnit\Framework\TestCase;

class ExtentUnitTest extends TestCase
{
    public function testExtentUnit(){
        
        $nodoExtentUnit = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                 <ExtentUnit>03</ExtentUnit>');
        
        $extentUnit = new ExtentUnit($nodoExtentUnit);
        $this->assertEquals('03', $extentUnit->contents);
    }
}


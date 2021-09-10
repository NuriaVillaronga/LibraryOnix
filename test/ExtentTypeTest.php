<?php
namespace test;
use OnixComponents\ExtentType;
use PHPUnit\Framework\TestCase;

class ExtentTypeTest extends TestCase
{
    public function testExtentType(){
        
        $nodoExtentType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                 <ExtentType>04</ExtentType>');
        
        $extentType = new ExtentType($nodoExtentType);
        $this->assertEquals('04', $extentType->contents);
    }
}


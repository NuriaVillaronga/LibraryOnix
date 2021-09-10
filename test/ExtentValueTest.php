<?php
namespace test;
use OnixComponents\ExtentValue;
use PHPUnit\Framework\TestCase;

class ExtentValueTest extends TestCase
{
    public function testExtentValue(){
        
        $nodoExtentValue = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                 <ExtentValue>245</ExtentValue>');
        
        $extentValue = new ExtentValue($nodoExtentValue);
        $this->assertEquals('245', $extentValue->contents);
    }
}


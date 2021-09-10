<?php
namespace test;
use OnixComponents\Extent;
use PHPUnit\Framework\TestCase;

class ExtentTest extends TestCase
{
    public function testExtent(){
        
        $nodoExtent = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                             <Extent>
                                				<ExtentType>04</ExtentType>
                                				<ExtentValue>16</ExtentValue>
                                				<ExtentUnit>03</ExtentUnit>
                                			</Extent>');
        
        $extent = new Extent($nodoExtent);
        $this->assertNotNull($extent->extentType);
        $this->assertNotNull($extent->extentValue);
        $this->assertNotNull($extent->extentUnit);
    }
    
    public function testNullExtent(){
        
        $nodoExtent = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                             <Extent>
                                				<ExtentType>04</ExtentType>
                                				<ExtentUnit>03</ExtentUnit>
                                			</Extent>');
        
        $extent = new Extent($nodoExtent);
        $this->assertNotNull($extent->extentType);
        $this->assertNull($extent->extentValue);
        $this->assertNotNull($extent->extentUnit);
    }
}


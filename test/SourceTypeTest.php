<?php
namespace test;
use OnixComponents\SourceType;
use PHPUnit\Framework\TestCase;

class SourceTypeTest extends TestCase
{
    public function testSourceType(){
        
        $nodoSourceType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                 <SourceType>01</SourceType>');
        
        $sourceType = new SourceType($nodoSourceType);
        $this->assertEquals('01', $sourceType->contents);
    }
}


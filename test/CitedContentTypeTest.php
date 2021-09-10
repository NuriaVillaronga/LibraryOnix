<?php
namespace test;
use OnixComponents\CitedContentType;
use PHPUnit\Framework\TestCase;

class CitedContentTypeTest extends TestCase
{
    public function testCitedContentType(){
        
        $nodoCitedContentType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                       <CitedContentType>03</CitedContentType>');
        
        $citedContentType = new CitedContentType($nodoCitedContentType);
        $this->assertEquals('03', $citedContentType->contents);
    }
}


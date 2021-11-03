<?php
namespace test;
use OnixComponents\AudienceCodeValue;
use PHPUnit\Framework\TestCase;

class AudienceCodeValueTest extends TestCase
{
    public function testAudienceCodeValue(){
        
        $nodoAudienceCodeValue = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                        <AudienceCodeValue>01</AudienceCodeValue>');
        
        $audienceCodeValue = new AudienceCodeValue($nodoAudienceCodeValue);
        $this->assertEquals('01', $audienceCodeValue->contents);
    }
} 


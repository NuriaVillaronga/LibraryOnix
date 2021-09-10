<?php
namespace test;
use OnixComponents\AudienceCodeType;
use PHPUnit\Framework\TestCase;

class AudienceCodeTypeTest extends TestCase
{
    public function testAudienceCodeType(){
        
        $nodoAudienceCodeType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                       <AudienceCodeType>22</AudienceCodeType>');
        
        $audienceCodeType = new AudienceCodeType($nodoAudienceCodeType);
        $this->assertEquals('22', $audienceCodeType->contents);
    }
}


<?php
namespace test;
use OnixComponents\ResourceContentType;
use PHPUnit\Framework\TestCase;

class ResourceContentTypeTest extends TestCase
{
    public function testResourceContentType(){
        
        $nodoResourceContentType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                          <ResourceContentType>01</ResourceContentType>');
        
        $resourceContentType = new ResourceContentType($nodoResourceContentType);
        $this->assertEquals('01', $resourceContentType->contents);
    }
}


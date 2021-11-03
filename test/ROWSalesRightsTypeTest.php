<?php
namespace test;
use OnixComponents\ROWSalesRightsType;
use PHPUnit\Framework\TestCase;

class ROWSalesRightsTypeTest extends TestCase
{
    public function testROWSalesRightsType(){
        
        $nodoROWSalesRightsType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                         <ROWSalesRightsType>02</ROWSalesRightsType>');
        
        $rOWSalesRightsType = new ROWSalesRightsType($nodoROWSalesRightsType);
        $this->assertEquals('02', $rOWSalesRightsType->contents);
    }
}


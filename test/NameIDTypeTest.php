<?php
namespace test;
use OnixComponents\NameIDType;
use PHPUnit\Framework\TestCase;

class NameIDTypeTest extends TestCase
{
    public function testNameIDType(){
        
        $nodoNameIDType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                 <NameIDType>01</NameIDType>');
        
        $nameIDType = new NameIDType($nodoNameIDType);
        $this->assertEquals('01', $nameIDType->contenido);
    }
}


<?php
namespace test;
use OnixComponents\NameIdentifier;
use PHPUnit\Framework\TestCase;

class NameIdentifierTest extends TestCase
{
    public function testNameIdentifier(){
        
        $nodoNameIdentifier = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                     <NameIdentifier>
                                                        <NameIDType>01</NameIDType>
                                                        <IDTypeName>HCP Author ID</IDTypeName>
                                                        <IDValue>7422</IDValue>
                                                     </NameIdentifier>');
        
        $nameIdentifier = new NameIdentifier($nodoNameIdentifier);
        $this->assertNotNull($nameIdentifier->nameIDType);
        $this->assertNotNull($nameIdentifier->idTypeName);
        $this->assertNotNull($nameIdentifier->idValue);
    }
    
    public function testNullNameIdentifier(){
        
        $nodoNameIdentifier = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                     <NameIdentifier>
                                                        <NameIDType>01</NameIDType>
                                                        <IDValue>7422</IDValue>
                                                     </NameIdentifier>');
        
        $nameIdentifier = new NameIdentifier($nodoNameIdentifier);
        $this->assertNotNull($nameIdentifier->nameIDType);
        $this->assertNull($nameIdentifier->idTypeName);
        $this->assertNotNull($nameIdentifier->idValue);
    }
}


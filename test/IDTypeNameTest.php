<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\IDTypeName;

class IDTypeNameTest extends TestCase
{
    public function testIDTypeName(){
        
        $nodoIDTypeName = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                 <IDTypeName>HCP Author ID</IDTypeName>');
        
        $iDTypeName = new IDTypeName($nodoIDTypeName);
        $this->assertEquals('HCP Author ID', $iDTypeName->contents);
    }
}


<?php
namespace test;
use OnixComponents\ImprintName;
use PHPUnit\Framework\TestCase;

class ImprintNameTest extends TestCase
{
    public function testImprintName(){
        
        $nodoImprintName = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <ImprintName>HarperPerennial</ImprintName>');
        
        $imprintName = new ImprintName($nodoImprintName);
        $this->assertEquals('HarperPerennial', $imprintName->contents);
    }
}


<?php
namespace test;
use OnixComponents\RegionsIncluded;
use PHPUnit\Framework\TestCase;

class RegionsIncludedTest extends TestCase
{
    public function testRegionsIncluded(){
        
        $nodoRegionsIncluded = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                      <RegionsIncluded>WORLD</RegionsIncluded>');
        
        $regionsIncluded = new RegionsIncluded($nodoRegionsIncluded);
        $this->assertEquals('WORLD', $regionsIncluded->contents);
    }
}


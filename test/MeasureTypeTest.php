<?php
namespace test;
use OnixComponents\MeasureType;
use PHPUnit\Framework\TestCase;

class MeasureTypeTest extends TestCase
{
    public function testMeasureType(){
        
        $nodoMeasureType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                   <MeasureType>08</MeasureType>');
        
        $measureType = new MeasureType($nodoMeasureType);
        $this->assertEquals('08', $measureType->contenido);
    }
}


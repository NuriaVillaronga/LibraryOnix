<?php
namespace test;
use OnixComponents\MeasureUnitCode;
use PHPUnit\Framework\TestCase;

class MeasureUnitCodeTest extends TestCase
{
    public function testMeasureUnitCode(){
        
        $nodoMeasureUnitCode = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                      <MeasureUnitCode>mm</MeasureUnitCode>');
        
        $measureUnitCode = new MeasureUnitCode($nodoMeasureUnitCode);
        $this->assertEquals('mm', $measureUnitCode->contenido);
    }
}


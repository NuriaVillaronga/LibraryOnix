<?php
namespace test;
use OnixComponents\Measurement;
use PHPUnit\Framework\TestCase;

class MeasurementTest extends TestCase
{
    public function testMeasurement(){
        
        $nodoMeasurement = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                   <Measurement>195</Measurement>');
        
        $measurement = new Measurement($nodoMeasurement);
        $this->assertEquals('195', $measurement->contenido);
    }
}


<?php
namespace test;
use OnixComponents\Measure;
use PHPUnit\Framework\TestCase;

class MeasureTest extends TestCase
{
    public function testMeasure(){
        
        $nodoMeasure = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                              <Measure>
                                				<MeasureType>08</MeasureType>
                                				<Measurement>195</Measurement>
                                				<MeasureUnitCode>gr</MeasureUnitCode>
                                			  </Measure>');
        
        $measure = new Measure($nodoMeasure);
        $this->assertNotNull($measure->measureType);
        $this->assertNotNull($measure->measurement);
        $this->assertNotNull($measure->measureUnitCode);
    }
}


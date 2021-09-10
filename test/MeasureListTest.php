<?php
namespace test;
use OnixComponents\Measure;
use OnixComponents\MeasureList;
use PHPUnit\Framework\TestCase;

class MeasureListTest extends TestCase
{
    public function testMeasureList(){
        
        $nodoMeasureList = simplexml_load_file(__DIR__.'/books/bookMeasureList.xml');
        
        $measureList = new MeasureList($nodoMeasureList);
        
        $this->assertCount(4, $measureList->arrayMeasure);
        
        foreach ($measureList->arrayMeasure as $measureListComponent){
            $this->assertNotNull($measureListComponent);
            $this->assertInstanceOf(Measure::class, $measureListComponent);
        }
    }
}


<?php
namespace test;
use OnixComponents\Extent;
use OnixComponents\ExtentList;
use PHPUnit\Framework\TestCase;

class ExtentListTest extends TestCase
{
    public function testExtentList(){
        
        $nodoExtentList = simplexml_load_file(__DIR__.'/books/bookExtentList.xml');
        
        $extentList = new ExtentList($nodoExtentList);
        
        $this->assertCount(2, $extentList->arrayExtent);
        
        foreach ($extentList->arrayExtent as $extentListComponent){
            $this->assertNotNull($extentListComponent);
            $this->assertInstanceOf(Extent::class, $extentListComponent);
        }
    }
}


<?php
namespace test;
use OnixComponents\ContentDate;
USE OnixComponents\ContentDateList;
use PHPUnit\Framework\TestCase;

class ContentDateListTest extends TestCase
{
    public function testContentDateList(){
        
        $nodoContentDateList = simplexml_load_file(__DIR__.'/books/bookContentDateList.xml');
        
        $contentDateList = new ContentDateList($nodoContentDateList);
        
        $this->assertCount(1, $contentDateList->arrayContentDate);
        
        foreach ($contentDateList->arrayContentDate as $contentDateListComponent){
            $this->assertNotNull($contentDateListComponent);
            $this->assertInstanceOf(ContentDate::class, $contentDateListComponent);
        }
    }
}


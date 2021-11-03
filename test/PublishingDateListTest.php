<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\PublishingDate;
use OnixComponents\PublishingDateList;

class PublishingDateListTest extends TestCase
{
    public function testPublishingDateList(){
        
        $nodoPublishingDateList = simplexml_load_file(__DIR__.'/books/bookPublishingDateList.xml');
        
        $publishingDateList = new PublishingDateList($nodoPublishingDateList);
        
        $this->assertCount(3, $publishingDateList->arrayPublishingDate);
        
        foreach ($publishingDateList->arrayPublishingDate as $publishingDateListComponent){
            $this->assertNotNull($publishingDateListComponent);
            $this->assertInstanceOf(PublishingDate::class, $publishingDateListComponent);
        }
    }
}


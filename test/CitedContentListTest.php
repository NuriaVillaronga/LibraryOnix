<?php
namespace test;
use OnixComponents\CitedContent;
use OnixComponents\CitedContentList;
use PHPUnit\Framework\TestCase;

class CitedContentListTest extends TestCase
{
    public function testCitedContentList(){
        
        $nodoCitedContentList = simplexml_load_file(__DIR__.'/books/bookCitedContentList.xml');
        
        $citedContentList = new CitedContentList($nodoCitedContentList);
        
        $this->assertCount(1, $citedContentList->arrayCitedContent); 
        
        foreach ($citedContentList->arrayCitedContent as $citedContentListComponent){
            $this->assertNotNull($citedContentListComponent);
            $this->assertInstanceOf(CitedContent::class, $citedContentListComponent);
        }
    }
}


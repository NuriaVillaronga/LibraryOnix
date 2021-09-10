<?php
namespace test;
use OnixComponents\TitleElement;
use OnixComponents\TitleElementList;
use PHPUnit\Framework\TestCase;

class TitleElementListTest extends TestCase
{
    public function testTitleElementList(){
        
        $nodoTitleElementList = simplexml_load_file(__DIR__.'/books/bookTitleElementList.xml');
        
        $titleElementList = new TitleElementList($nodoTitleElementList);
        
        $this->assertCount(1, $titleElementList->arrayTitleElement);
        
        foreach ($titleElementList->arrayTitleElement as $titleElementListComponent){
            $this->assertNotNull($titleElementListComponent);
            $this->assertInstanceOf(TitleElement::class, $titleElementListComponent);
        }
    }
}


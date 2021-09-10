<?php
namespace test;
use OnixComponents\TextContent;
use OnixComponents\TextContentList;
use PHPUnit\Framework\TestCase;

class TextContentListTest extends TestCase
{
    public function testTaxList(){
        
        $nodoTextContentList = simplexml_load_file(__DIR__.'/books/bookTextContentList.xml');
        
        $textContentList = new TextContentList($nodoTextContentList);
        
        $this->assertCount(5, $textContentList->arrayTextContent);
        
        foreach ($textContentList->arrayTextContent as $textContentListComponent){
            $this->assertNotNull($textContentListComponent);
            $this->assertInstanceOf(TextContent::class, $textContentListComponent);
        }
    }
}


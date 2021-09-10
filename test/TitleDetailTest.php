<?php
namespace test;
use OnixComponents\TitleDetail;
use PHPUnit\Framework\TestCase;

class TitleDetailTest extends TestCase
{
    public function testTitleDetail(){
        
        $nodoTitleDetail = simplexml_load_file(__DIR__.'/books/bookTitleDetail.xml');
        
        $titleDetail = new TitleDetail($nodoTitleDetail);
        $this->assertNotNull($titleDetail->titleType);
        $this->assertNotNull($titleDetail->titleElementList);
    }
}


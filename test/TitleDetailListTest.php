<?php
namespace test;
use OnixComponents\TitleDetail;
use OnixComponents\TitleDetailList;
use PHPUnit\Framework\TestCase;

class TitleDetailListTest extends TestCase
{
    public function testTitleDetailList(){
        
        $nodoTitleDetailList = simplexml_load_file(__DIR__.'/books/bookTitleDetailList.xml');
        
        $titleDetailList = new TitleDetailList($nodoTitleDetailList);
        
        $this->assertCount(2, $titleDetailList->arrayTitleDetail);
        
        foreach ($titleDetailList->arrayTitleDetail as $titleDetailListComponent){
            $this->assertNotNull($titleDetailListComponent);
            $this->assertInstanceOf(TitleDetail::class, $titleDetailListComponent);
        }
    }
}


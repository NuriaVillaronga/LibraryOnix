<?php
namespace test;
use OnixComponents\RelatedWorkList;
use OnixComponents\RelatedWork;
use PHPUnit\Framework\TestCase;

class RelatedWorkListTest extends TestCase
{
    public function testRelatedWorkList(){
        
        $nodoRelatedWorkList = simplexml_load_file(__DIR__.'/books/bookRelatedWorkList.xml');
        
        $relatedWorkList = new RelatedWorkList($nodoRelatedWorkList);
        
        $this->assertCount(1, $relatedWorkList->arrayRelatedWork);
        
        foreach ($relatedWorkList->arrayRelatedWork as $relatedWorkListComponent){
            $this->assertNotNull($relatedWorkListComponent);
            $this->assertInstanceOf(RelatedWork::class, $relatedWorkListComponent);
        }
    }
}


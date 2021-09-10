<?php
namespace test;
use OnixComponents\WorkIdentifier;
use OnixComponents\WorkIdentifierList;
use PHPUnit\Framework\TestCase;

class WorkIdentifierListTest extends TestCase
{
    public function testWorkIdentifierList(){
        
        $nodoWorkIdentifierList = simplexml_load_file(__DIR__.'/books/bookWorkIdentifierList.xml');
        
        $workIdentifierList = new WorkIdentifierList($nodoWorkIdentifierList);
        
        $this->assertCount(1, $workIdentifierList->arrayWorkIdentifier);
        
        foreach ($workIdentifierList->arrayWorkIdentifier as $workIdentifierListComponent){
            $this->assertNotNull($workIdentifierListComponent);
            $this->assertInstanceOf(WorkIdentifier::class, $workIdentifierListComponent);
        }
    }
}


<?php
namespace test;
use OnixComponents\RecordSourceIdentifier;
use OnixComponents\RecordSourceIdentifierList;
use PHPUnit\Framework\TestCase;

class RecordSourceIdentifierListTest extends TestCase
{
    public function testRecordSourceIdentifierList(){
        
        $nodoRecordSourceIdentifierList = simplexml_load_file(__DIR__.'/books/bookRecordSourceIdentifierList.xml');
        
        $recordSourceIdentifierList = new RecordSourceIdentifierList($nodoRecordSourceIdentifierList);
        
        $this->assertCount(1, $recordSourceIdentifierList->arrayRecordSourceIdentifier);
        
        foreach ($recordSourceIdentifierList->arrayRecordSourceIdentifier as $recordSourceIdentifierListComponent){
            $this->assertNotNull($recordSourceIdentifierListComponent);
            $this->assertInstanceOf(RecordSourceIdentifier::class, $recordSourceIdentifierListComponent);
        }
    }
}


<?php
namespace test;
use OnixComponents\NameIdentifier;
use OnixComponents\NameIdentifierList;
use PHPUnit\Framework\TestCase;

class NameIdentifierListTest extends TestCase
{
    public function testNameIdentifierList(){
        
        $nodoNameIdentifierList = simplexml_load_file(__DIR__.'/books/bookNameIdentifierList.xml');
        
        $nameIdentifierList = new NameIdentifierList($nodoNameIdentifierList);
        
        $this->assertCount(2, $nameIdentifierList->arrayNameIdentifier);
        
        foreach ($nameIdentifierList->arrayNameIdentifier as $nameIdentifierListComponent){
            $this->assertNotNull($nameIdentifierListComponent);
            $this->assertInstanceOf(NameIdentifier::class, $nameIdentifierListComponent);
        }
    }
}


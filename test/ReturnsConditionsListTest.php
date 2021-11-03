<?php
namespace test;
use OnixComponents\ReturnsConditionsList;
use OnixComponents\ReturnsConditions;
use PHPUnit\Framework\TestCase;

class ReturnsConditionsListTest extends TestCase
{
    public function testReturnsConditionsList(){
        
        $nodoReturnsConditionsList = simplexml_load_file(__DIR__.'/books/bookReturnsConditionsList.xml');
        
        $returnsConditionsList = new ReturnsConditionsList($nodoReturnsConditionsList); 
        
        $this->assertCount(1, $returnsConditionsList->arrayReturnsConditions);
        
        foreach ($returnsConditionsList->arrayReturnsConditions as $returnsConditionsListComponent){
            $this->assertNotNull($returnsConditionsListComponent);
            $this->assertInstanceOf(ReturnsConditions::class, $returnsConditionsListComponent);
        }
    }
}


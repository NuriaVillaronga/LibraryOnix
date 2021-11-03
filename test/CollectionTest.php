<?php
namespace test;
use OnixComponents\Collection;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    public function testCollection(){
        
        $nodoCollection = simplexml_load_file(__DIR__.'/books/bookCollection.xml');
        
        $collection = new Collection($nodoCollection);
        $this->assertNotNull($collection->collectionType);
        $this->assertNotNull($collection->titleDetailList);
    }
    
    public function testNullCollection(){
        
        $nodoCollection = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                 <Collection>
                                				    <CollectionType>10</CollectionType>
                                			     </Collection>');
        
        $collection = new Collection($nodoCollection);
        $this->assertNotNull($collection->collectionType);
        $this->assertNull($collection->titleDetailList);
    }
}


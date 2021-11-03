<?php
namespace test;
use OnixComponents\Collection;
use OnixComponents\CollectionList;
use PHPUnit\Framework\TestCase;

class CollectionListTest extends TestCase
{
    public function testCollectionList(){
        
        $nodoCollectionList = simplexml_load_file(__DIR__.'/books/bookCollectionList.xml');
        
        $collectionList = new CollectionList($nodoCollectionList);
        
        $this->assertCount(1, $collectionList->arrayCollection);
        
        foreach ($collectionList->arrayCollection as $collectionListComponent){
            $this->assertNotNull($collectionListComponent);
            $this->assertInstanceOf(Collection::class, $collectionListComponent);
        }
    }
}


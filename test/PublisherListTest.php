<?php
namespace test;
use OnixComponents\Publisher;
use OnixComponents\PublisherList;
use PHPUnit\Framework\TestCase;

class PublisherListTest extends TestCase
{
    public function testPublisherList(){
        
        $nodoPublisherList = simplexml_load_file(__DIR__.'/books/bookPublisherList.xml');
        
        $publisherList = new PublisherList($nodoPublisherList);
        
        $this->assertCount(1, $publisherList->arrayPublisher);
        
        foreach ($publisherList->arrayPublisher as $publisherListComponent){
            $this->assertNotNull($publisherListComponent);
            $this->assertInstanceOf(Publisher::class, $publisherListComponent);
        }
    }
}


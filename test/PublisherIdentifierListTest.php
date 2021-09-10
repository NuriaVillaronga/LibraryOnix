<?php
namespace test;
use OnixComponents\PublisherIdentifier;
use OnixComponents\PublisherIdentifierList;
use PHPUnit\Framework\TestCase;

class PublisherIdentifierListTest extends TestCase
{
    public function testPublisherIdentifierList(){
        
        $nodoPublisherIdentifierList = simplexml_load_file(__DIR__.'/books/bookPublisherIdentifierList.xml');
        
        $publisherIdentifierList = new PublisherIdentifierList($nodoPublisherIdentifierList);
        
        $this->assertCount(1, $publisherIdentifierList->arrayPublisherIdentifier);
        
        foreach ($publisherIdentifierList->arrayPublisherIdentifier as $publisherIdentifierListComponent){
            $this->assertNotNull($publisherIdentifierListComponent);
            $this->assertInstanceOf(PublisherIdentifier::class, $publisherIdentifierListComponent);
        }
    }
}


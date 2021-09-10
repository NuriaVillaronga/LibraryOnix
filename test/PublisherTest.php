<?php
namespace test;
use OnixComponents\Publisher;
use PHPUnit\Framework\TestCase;

class PublisherTest extends TestCase
{
    public function testPublisher(){
        
        $nodoPublisher = simplexml_load_file(__DIR__.'/books/bookPublisher.xml');
        
        $publisher = new Publisher($nodoPublisher);
        $this->assertNotNull($publisher->publishingRole);
        $this->assertNotNull($publisher->publisherName);
        $this->assertNotNull($publisher->publisherIdentifierList);
        $this->assertNotNull($publisher->websiteList);
    }
    
    public function testNullPublisher(){
        
        $nodoPublisher = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                <Publisher>
                                                	<PublishingRole>01</PublishingRole>
                                                </Publisher>');
        
        $publisher = new Publisher($nodoPublisher);
        $this->assertNotNull($publisher->publishingRole);
        $this->assertNull($publisher->publisherName);
        $this->assertNull($publisher->publisherIdentifierList);
        $this->assertNull($publisher->websiteList);
    }
}


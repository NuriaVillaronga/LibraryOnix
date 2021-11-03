<?php
namespace test;
use OnixComponents\PublisherName;
use PHPUnit\Framework\TestCase;

class PublisherNameTest extends TestCase
{
    public function testPublisherName(){
        
        $nodoPublisherName = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                    <PublisherName>HarperCollins Publishers</PublisherName>');
        
        $publisherName = new PublisherName($nodoPublisherName);
        $this->assertEquals('HarperCollins Publishers', $publisherName->contents);
    }
}


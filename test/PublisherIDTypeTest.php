<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\PublisherIDType;

class PublisherIDTypeTest extends TestCase
{
    public function testPublisherIDType(){
        
        $nodoPublisherIDType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                      <PublisherIDType>16</PublisherIDType>');
        
        $publisherIDType = new PublisherIDType($nodoPublisherIDType);
        $this->assertEquals('16', $publisherIDType->contents);
    }
}


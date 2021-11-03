<?php
namespace test;
use OnixComponents\PublisherIdentifier;
use PHPUnit\Framework\TestCase;

class PublisherIdentifierTest extends TestCase
{
    public function testPublisherIdentifier(){
        
        $nodoPublisherIdentifier = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                    	 <PublisherIdentifier>
					                                          <PublisherIDType>16</PublisherIDType>
					                                          <IDValue>0000000404222532</IDValue>
				                                         </PublisherIdentifier>');
        
        $publisherIdentifier = new PublisherIdentifier($nodoPublisherIdentifier);
        $this->assertNotNull($publisherIdentifier->publisherIDType);
        $this->assertNotNull($publisherIdentifier->idValue);
    }
}


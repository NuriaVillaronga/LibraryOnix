<?php
namespace test;
use OnixComponents\CitedContent;
use PHPUnit\Framework\TestCase;

class CitedContentTest extends TestCase
{
    public function testCitedContent(){
        
        $nodoCitedContent = simplexml_load_file(__DIR__.'/books/bookCitedContent.xml');
        
        $citedContent = new CitedContent($nodoCitedContent);
        $this->assertNotNull($citedContent->citedContentType);
        $this->assertNotNull($citedContent->contentAudienceList);
        $this->assertNotNull($citedContent->sourceType);
        $this->assertNotNull($citedContent->sourceTitleList);
        $this->assertNotNull($citedContent->citationNoteList);
        $this->assertNotNull($citedContent->resourceLinkList);
        $this->assertNotNull($citedContent->contentDateList);
    }
    
    public function testNullCitedContent(){
        
        $nodoCitedContent = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                   <CitedContent>
				                                        <CitedContentType>03</CitedContentType>
			                                       </CitedContent>');
        
        $citedContent = new CitedContent($nodoCitedContent);
        $this->assertNotNull($citedContent->citedContentType);
        $this->assertNull($citedContent->contentAudienceList);
        $this->assertNull($citedContent->sourceType);
        $this->assertNull($citedContent->sourceTitleList);
        $this->assertNull($citedContent->citationNoteList);
        $this->assertNull($citedContent->resourceLinkList);
        $this->assertNull($citedContent->contentDateList);
    }
    
}


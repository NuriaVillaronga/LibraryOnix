<?php
namespace test;
use OnixComponents\TitleElement;
use PHPUnit\Framework\TestCase;

class TitleElementTest extends TestCase
{
    public function testTitleElement_NOtitlePrefix(){
        
        $nodoTitleElement = simplexml_load_file(__DIR__.'/books/bookTitleElement_NOtitlePrefix.xml');
        
        $titleElement = new TitleElement($nodoTitleElement);
        $this->assertNotNull($titleElement->sequenceNumber);
        $this->assertNotNull($titleElement->titleElementLevel);
        $this->assertNull($titleElement->titlePrefix);
        $this->assertNotNull($titleElement->titleWithoutPrefix);
        $this->assertNotNull($titleElement->partNumber);
        $this->assertNotNull($titleElement->noPrefix);
        $this->assertNotNull($titleElement->titleText);
    }
    
    public function testTitleElement_YEStitlePrefix(){
        
        $nodoTitleElement = simplexml_load_file(__DIR__.'/books/bookTitleElement_YEStitlePrefix.xml');
        
        $titleElement = new TitleElement($nodoTitleElement);
        $this->assertNotNull($titleElement->sequenceNumber);
        $this->assertNotNull($titleElement->titleElementLevel);
        $this->assertNotNull($titleElement->titlePrefix);
        $this->assertNotNull($titleElement->titleWithoutPrefix);
        $this->assertNotNull($titleElement->partNumber);
        $this->assertNull($titleElement->noPrefix);
        $this->assertNotNull($titleElement->titleText);
    }
    
    public function testNullTitleElement(){
        
        $nodoTitleElement = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <TitleElement>
    	                                               <TitleElementLevel>02</TitleElementLevel>
                                                  </TitleElement>');
        
        $titleElement = new TitleElement($nodoTitleElement);
        $this->assertNull($titleElement->sequenceNumber);
        $this->assertNotNull($titleElement->titleElementLevel);
        $this->assertNull($titleElement->titlePrefix);
        $this->assertNull($titleElement->titleWithoutPrefix);
        $this->assertNull($titleElement->partNumber);
        $this->assertNull($titleElement->noPrefix);
        $this->assertNull($titleElement->titleText);
    }
}


<?php
namespace test;
use OnixComponents\TextContent;
use PHPUnit\Framework\TestCase;

class TextContentTest extends TestCase
{
    public function testTextContent(){
        
        $nodoTextContent = simplexml_load_file(__DIR__.'/books/bookTextContent.xml');
        
        $textContent = new TextContent($nodoTextContent);
        $this->assertNotNull($textContent->textType);
        $this->assertNotNull($textContent->contentAudienceList);
        $this->assertNotNull($textContent->sourceTitleList);
        $this->assertNotNull($textContent->textList);
    }
    
    public function testNullTextContent(){
        
        $nodoTextContent = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                    <TextContent>
                                                    	<TextType>06</TextType>
                                                    	<ContentAudience>00</ContentAudience>
                                                    	<Text textformat="05"><p>‘The writing is elegant and surprisingly humorous’</p></Text>
                                                    </TextContent>');
        
        $textContent = new TextContent($nodoTextContent);
        $this->assertNotNull($textContent->textType);
        $this->assertNotNull($textContent->contentAudienceList);
        $this->assertNull($textContent->sourceTitleList);
        $this->assertNotNull($textContent->textList);
    }
}


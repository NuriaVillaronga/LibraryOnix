<?php
namespace test;
use OnixComponents\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function testText(){
        
        $nodoText = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                           <Text textformat="05">Their mysteries don’t just read well</Text>');
        
        $text = new Text($nodoText);
        $this->assertNotNull($text->textformat);
        $this->assertEquals('Their mysteries don’t just read well',$text->contents);
    }
   
    public function testNullText(){
        
        $nodoText = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                           <Text>Their mysteries don’t just read well</Text>');
        
        $text = new Text($nodoText);
        $this->assertNull($text->textformat);
        $this->assertEquals('Their mysteries don’t just read well',$text->contents);
    }
}


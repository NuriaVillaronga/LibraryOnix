<?php
namespace test;
use OnixComponents\TitlePrefix;
use PHPUnit\Framework\TestCase;

class TitlePrefixTest extends TestCase
{
    public function testTitlePrefix(){
        
        $nodoTitlePrefix = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <TitlePrefix textcase="01">The</TitlePrefix>');
        
        $titlePrefix = new TitlePrefix($nodoTitlePrefix);
        $this->assertEquals('The', $titlePrefix->contents);
        $this->assertNotNull($titlePrefix->textcase);
    }
    
    public function testNullTitlePrefix(){
        
        $nodoTitlePrefix = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <TitlePrefix>The</TitlePrefix>');
        
        $titlePrefix = new TitlePrefix($nodoTitlePrefix);
        $this->assertEquals('The', $titlePrefix->contents);
        $this->assertNull($titlePrefix->textcase);
    }
}


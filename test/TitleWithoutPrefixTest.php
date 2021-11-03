<?php
namespace test;
use OnixComponents\TitleWithoutPrefix;
use PHPUnit\Framework\TestCase;

class TitleWithoutPrefixTest extends TestCase
{
    public function testTitleWithoutPrefix(){
        
        $nodoTitleWithoutPrefix = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                         <TitleWithoutPrefix textcase="01">Roseanna</TitleWithoutPrefix>');
        
        $titleWithoutPrefix = new TitleWithoutPrefix($nodoTitleWithoutPrefix);
        $this->assertEquals('Roseanna', $titleWithoutPrefix->contents);
        $this->assertNotNull($titleWithoutPrefix->textcase);
    }
    
    public function testNullTitleWithoutPrefix(){
        
        $nodoTitleWithoutPrefix = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                         <TitleWithoutPrefix>Roseanna</TitleWithoutPrefix>');
        
        $titleWithoutPrefix = new TitleWithoutPrefix($nodoTitleWithoutPrefix);
        $this->assertEquals('Roseanna', $titleWithoutPrefix->contents);
        $this->assertNull($titleWithoutPrefix->textcase);
    }
}


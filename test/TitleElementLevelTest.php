<?php
namespace test;
use OnixComponents\TitleElementLevel;
use PHPUnit\Framework\TestCase;

class TitleElementLevelTest extends TestCase
{
    public function testTitleElementLevel(){
        
        $nodoTitleElementLevel = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                <TitleElementLevel>02</TitleElementLevel>');
        
        $titleElementLevel = new TitleElementLevel($nodoTitleElementLevel);
        $this->assertEquals('02', $titleElementLevel->contents);
    }
}


<?php
namespace test;
use OnixComponents\TitleType;
use PHPUnit\Framework\TestCase;

class TitleTypeTest extends TestCase
{
    public function testTitleType(){
        
        $nodoTitleType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                <TitleType>01</TitleType>');
        
        $titleType = new TitleType($nodoTitleType);
        $this->assertEquals('01', $titleType->contents);
    }
}


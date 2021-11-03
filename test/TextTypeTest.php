<?php
namespace test;
use OnixComponents\TextType;
use PHPUnit\Framework\TestCase;

class TextTypeTest extends TestCase
{
    public function testTextType(){
        
        $nodoTextType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                               <TextType>06</TextType>');
        
        $textType = new TextType($nodoTextType);
        $this->assertEquals('06', $textType->contents);
    }
}


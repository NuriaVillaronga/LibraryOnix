<?php
namespace test;
use OnixComponents\TitleText;
use PHPUnit\Framework\TestCase;

class TitleTextTest extends TestCase
{
    public function testTitleText(){
        
        $nodoTitleText = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                <TitleText>ROSEANNA (MARTIN BECK #1)</TitleText>');
        
        $titleText = new TitleText($nodoTitleText);
        $this->assertEquals('ROSEANNA (MARTIN BECK #1)', $titleText->contents);
    }
}


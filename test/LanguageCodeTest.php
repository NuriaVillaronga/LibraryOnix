<?php
namespace test;
use OnixComponents\LanguageCode;
use PHPUnit\Framework\TestCase;

class LanguageCodeTest extends TestCase
{
    public function testLanguageCode(){
        
        $nodoLanguageCode = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                   <LanguageCode>swe</LanguageCode>');
        
        $languageCode = new LanguageCode($nodoLanguageCode);
        $this->assertEquals('swe', $languageCode->contenido);
    }
}


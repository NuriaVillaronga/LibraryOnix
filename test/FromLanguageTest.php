<?php
namespace test;
use OnixComponents\FromLanguage;
use PHPUnit\Framework\TestCase;

class FromLanguageTest extends TestCase
{
    public function testFromLanguage(){
        
        $nodoFromLanguage = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                   <FromLanguage>swe</FromLanguage>');
        
        $fromLanguage = new FromLanguage($nodoFromLanguage);
        $this->assertEquals('swe', $fromLanguage->contents);
    }
}


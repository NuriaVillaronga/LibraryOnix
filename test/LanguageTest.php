<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\Language;

class LanguageTest extends TestCase
{
    public function testLanguage(){
        
        $nodoLanguage = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                        	   <Language>
				                                    <LanguageRole>02</LanguageRole>
				                                    <LanguageCode>swe</LanguageCode>
			                                   </Language>');
        
        $language = new Language($nodoLanguage);
        $this->assertNotNull($language->languageRole);
        $this->assertNotNull($language->languageCode);
    }
}


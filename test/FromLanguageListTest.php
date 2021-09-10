<?php
namespace test;
use OnixComponents\FromLanguage;
use OnixComponents\FromLanguageList;
use PHPUnit\Framework\TestCase;

class FromLanguageListTest extends TestCase
{
    public function testFromLanguageList(){
        
        $nodoFromLanguageList = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                       <Contributor>
				                                            <FromLanguage>swe</FromLanguage>
                                                            <FromLanguage>eng</FromLanguage>
			                                           </Contributor>');
        
        $fromLanguageList = new FromLanguageList($nodoFromLanguageList);
        
        $this->assertCount(2, $fromLanguageList->arrayFromLanguage);
        
        foreach ($fromLanguageList->arrayFromLanguage as $fromLanguageListComponent){
            $this->assertNotNull($fromLanguageListComponent);
            $this->assertInstanceOf(FromLanguage::class, $fromLanguageListComponent);
        }
    }
}


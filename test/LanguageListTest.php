<?php
namespace test;
use OnixComponents\Language;
use OnixComponents\LanguageList;
use PHPUnit\Framework\TestCase;

class LanguageListTest extends TestCase
{
    public function testLanguageList(){
        
        $nodoLanguageList = simplexml_load_file(__DIR__.'/books/bookLanguageList.xml');
        
        $languageList = new LanguageList($nodoLanguageList);
        
        $this->assertCount(2, $languageList->arrayLanguage);
        
        foreach ($languageList->arrayLanguage as $languageListComponent){
            $this->assertNotNull($languageListComponent);
            $this->assertInstanceOf(Language::class, $languageListComponent);
        }
    }
}


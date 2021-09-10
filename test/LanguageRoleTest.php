<?php
namespace test;
use OnixComponents\LanguageRole;
use PHPUnit\Framework\TestCase;

class LanguageRoleTest extends TestCase
{
    public function testLanguageRole(){
        
        $nodoLanguageRole = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                   <LanguageRole>01</LanguageRole>');
        
        $languageRole = new LanguageRole($nodoLanguageRole);
        $this->assertEquals('01', $languageRole->contenido);
    }
}


<?php
namespace test;
use OnixComponents\NoPrefix;
use PHPUnit\Framework\TestCase;

class NoPrefixTest extends TestCase
{
    public function testNoPrefix(){
        
        $nodoNoPrefix = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                <NoPrefix/>');
        
        $noPrefix = new NoPrefix($nodoNoPrefix);
        $this->assertEmpty($noPrefix->contenido); 
    }
}


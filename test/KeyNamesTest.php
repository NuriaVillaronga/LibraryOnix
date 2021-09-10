<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\KeyNames;

class KeyNamesTest extends TestCase
{
    public function testKeyNames(){
        
        $nodoKeyNames = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                               <KeyNames>Wahlöö</KeyNames>');
        
        $keyNames = new KeyNames($nodoKeyNames);
        $this->assertEquals('Wahlöö', $keyNames->contents);
    }
}


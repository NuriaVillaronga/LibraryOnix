<?php
namespace test;
use OnixComponents\NamesBeforeKey;
use PHPUnit\Framework\TestCase;

class NamesBeforeKeyTest extends TestCase
{
    public function testNamesBeforeKey(){
        
        $nodoNamesBeforeKey = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                     <NamesBeforeKey>Per</NamesBeforeKey>');
        
        $namesBeforeKey = new NamesBeforeKey($nodoNamesBeforeKey);
        $this->assertEquals('Per', $namesBeforeKey->contenido);
    }
}


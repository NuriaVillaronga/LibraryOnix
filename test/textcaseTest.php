<?php
namespace test;
use OnixComponents\textcase;
use PHPUnit\Framework\TestCase;

class textcaseTest extends TestCase
{
    //Utilizo el objeto Dummy porque el atributo aparece en varios objetos y no quiero especificar ninguno
    public function testTextcase(){
        
        $dummy = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                        <Dummy textcase="01"></Dummy>');
        
        $textcase = new textcase($dummy['textcase']);
        $this->assertEquals('01', $textcase->contents);
    }
}


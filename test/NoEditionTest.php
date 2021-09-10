<?php
namespace test;
use OnixComponents\NoEdition;
use PHPUnit\Framework\TestCase;

class NoEditionTest extends TestCase
{
    public function testNoEdition(){
        
        $nodoNoEdition = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                <NoEdition/>');
        
        $noEdition = new NoEdition($nodoNoEdition);
        $this->assertEmpty($noEdition->contenido);
    }
}


<?php
namespace test;
use OnixComponents\PartNumber;
use PHPUnit\Framework\TestCase;

class PartNumberTest extends TestCase
{
    public function testPartNumber(){
        
        $nodoPartNumber = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                 <PartNumber>1</PartNumber>');
        
        $partNumber = new PartNumber($nodoPartNumber);
        $this->assertEquals('1', $partNumber->contenido);
    }
}


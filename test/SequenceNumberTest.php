<?php
namespace test;
use OnixComponents\SequenceNumber;
use PHPUnit\Framework\TestCase;

class SequenceNumberTest extends TestCase
{
    public function testSequenceNumber(){
        
        $nodoSequenceNumber = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                     <SequenceNumber>1</SequenceNumber>');
        
        $sequenceNumber = new SequenceNumber($nodoSequenceNumber);
        $this->assertEquals('1', $sequenceNumber->contents);
    }
}


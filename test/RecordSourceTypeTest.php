<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\RecordSourceType;

class RecordSourceTypeTest extends TestCase
{
    public function testRecordSourceType(){
        
        $nodoRecordSourceType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                       <RecordSourceType>04</RecordSourceType>');
        
        $recordSourceType = new RecordSourceType($nodoRecordSourceType);
        $this->assertEquals('04', $recordSourceType->contents);
    }
}


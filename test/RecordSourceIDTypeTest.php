<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\RecordSourceIDType;

class RecordSourceIDTypeTest extends TestCase
{
    public function testRecordSourceIDType(){
        
        $nodoRecordSourceIDType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                         <RecordSourceIDType>06</RecordSourceIDType>');
        
        $recordSourceIDType = new RecordSourceIDType($nodoRecordSourceIDType);
        $this->assertEquals('06', $recordSourceIDType->contents);
    }
}


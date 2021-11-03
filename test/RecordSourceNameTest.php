<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\RecordSourceName;

class RecordSourceNameTest extends TestCase
{
    public function testRecordSourceName(){
        
        $nodoRecordSourceName = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                       <RecordSourceName>Global Bookinfo</RecordSourceName>');
        
        $recordSourceName = new RecordSourceName($nodoRecordSourceName);
        $this->assertEquals('Global Bookinfo', $recordSourceName->contents);
    }
}


<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\RecordReference;

class RecordReferenceTest extends TestCase
{
    public function testRecordReference(){
        
        $nodoRecordReference = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                      <RecordReference>com.globalbookinfo.onix.01734529</RecordReference>');
        
        $recordReference = new RecordReference($nodoRecordReference);
        $this->assertEquals('com.globalbookinfo.onix.01734529', $recordReference->contents);
    }
}


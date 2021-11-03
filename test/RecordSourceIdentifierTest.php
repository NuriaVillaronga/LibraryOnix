<?php
namespace test;
use OnixComponents\RecordSourceIdentifier;
use PHPUnit\Framework\TestCase;

class RecordSourceIdentifierTest extends TestCase
{
    public function testRecordSourceIdentifier(){
        
        $nodoRecordSourceIdentifier = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                        	                 <RecordSourceIdentifier>
			                                                     <RecordSourceIDType>06</RecordSourceIDType>
			                                                     <IDValue>0614141800001</IDValue>
		                                                     </RecordSourceIdentifier>');
        
        $recordSourceIdentifier = new RecordSourceIdentifier($nodoRecordSourceIdentifier);
        $this->assertNotNull($recordSourceIdentifier->recordSourceIDType);
        $this->assertNotNull($recordSourceIdentifier->idValue);
    }
}


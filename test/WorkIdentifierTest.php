<?php
namespace test;
use OnixComponents\WorkIdentifier;
use PHPUnit\Framework\TestCase;

class WorkIdentifierTest extends TestCase
{
    public function testWorkIdentifier(){
        
        $nodoWorkIdentifier = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                     <WorkIdentifier>
					                                      <WorkIDType>11</WorkIDType>
					                                      <IDValue>A0220090000154FA</IDValue>
				                                     </WorkIdentifier>');
        
        $workIdentifier = new WorkIdentifier($nodoWorkIdentifier);
        $this->assertNotNull($workIdentifier->workIDType);
        $this->assertNotNull($workIdentifier->idValue);
    }
}


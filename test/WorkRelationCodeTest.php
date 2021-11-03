<?php
namespace test;
use OnixComponents\WorkRelationCode;
use PHPUnit\Framework\TestCase;

class WorkRelationCodeTest extends TestCase
{
    public function testWorkRelationCode(){
        
        $nodoWorkRelationCode = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                       <WorkRelationCode>01</WorkRelationCode>');
        
        $workRelationCode = new WorkRelationCode($nodoWorkRelationCode);
        $this->assertEquals('01', $workRelationCode->contents);
    }
}


<?php
namespace test;
use OnixComponents\WorkIDType;
use PHPUnit\Framework\TestCase;

class WorkIDTypeTest extends TestCase
{
    public function testWorkIDType(){
        
        $nodoWorkIDType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                 <WorkIDType>11</WorkIDType>');
        
        $workIDType = new WorkIDType($nodoWorkIDType);
        $this->assertEquals('11', $workIDType->contents);
    }
}


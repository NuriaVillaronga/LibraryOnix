<?php
namespace test;
use OnixComponents\ResourceMode;
use PHPUnit\Framework\TestCase;

class ResourceModeTest extends TestCase
{
    public function testResourceMode(){
        
        $nodoResourceMode = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                   <ResourceMode>06</ResourceMode>');
        
        $resourceMode = new ResourceMode($nodoResourceMode);
        $this->assertEquals('06', $resourceMode->contents);
    }
}


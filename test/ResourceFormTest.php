<?php
namespace test;
use OnixComponents\ResourceForm;
use PHPUnit\Framework\TestCase;

class ResourceFormTest extends TestCase
{
    public function testResourceForm(){
        
        $nodoResourceForm = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                   <ResourceForm>01</ResourceForm>');
        
        $resourceForm = new ResourceForm($nodoResourceForm);
        $this->assertEquals('01', $resourceForm->contents);
    }
}


<?php
namespace test;
use OnixComponents\ContentDateRole;
use PHPUnit\Framework\TestCase;

class ContentDateRoleTest extends TestCase
{
    public function testContentDateRole(){
        
        $nodoContentDateRole = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                      <ContentDateRole>01</ContentDateRole>');
        
        $contentDateRole = new ContentDateRole($nodoContentDateRole);
        $this->assertEquals('01', $contentDateRole->contents);
    }
}


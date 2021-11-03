<?php
namespace test;
use OnixComponents\PublishingDateRole;
use PHPUnit\Framework\TestCase;

class PublishingDateRoleTest extends TestCase
{
    public function testPublishingDateRole(){
        
        $nodoPublishingDateRole = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                         <PublishingDateRole>01</PublishingDateRole>');
        
        $publishingDateRole = new PublishingDateRole($nodoPublishingDateRole);
        $this->assertEquals('01', $publishingDateRole->contents); 
    }
}


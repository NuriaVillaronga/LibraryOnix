<?php
namespace test;
use OnixComponents\PublishingRole;
use PHPUnit\Framework\TestCase;

class PublishingRoleTest extends TestCase
{
    public function testPublishingRole(){
        
        $nodoPublishingRole = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                     <PublishingRole>01</PublishingRole>');
        
        $publishingRole = new PublishingRole($nodoPublishingRole);
        $this->assertEquals('01', $publishingRole->contents);
    }
}


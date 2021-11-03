<?php
namespace test;
use OnixComponents\WebsiteRole;
use PHPUnit\Framework\TestCase;

class WebsiteRoleTest extends TestCase
{
    public function testWebsiteRole(){
        
        $nodoWebsiteRole = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <WebsiteRole>01</WebsiteRole>');
        
        $websiteRole = new WebsiteRole($nodoWebsiteRole);
        $this->assertEquals('01', $websiteRole->contents);
    }
}


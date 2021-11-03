<?php
namespace test;
use OnixComponents\WebsiteLink;
use PHPUnit\Framework\TestCase;

class WebsiteLinkTest extends TestCase
{
    public function testWebsiteLink(){
        
        $nodoWebsiteLink = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                  <WebsiteLink>http://www.harpercollins.co.uk</WebsiteLink>');
        
        $websiteLink = new WebsiteLink($nodoWebsiteLink);
        $this->assertEquals('http://www.harpercollins.co.uk', $websiteLink->contents);
    }
}


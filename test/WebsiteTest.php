<?php
namespace test;
use OnixComponents\Website;
use PHPUnit\Framework\TestCase;

class WebsiteTest extends TestCase
{
    public function testWebsite(){
        
        $nodoWebsite = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                              <Website>
					                               <WebsiteRole>01</WebsiteRole>
					                               <WebsiteLink>http://www.harpercollins.co.uk</WebsiteLink>
				                              </Website>');
        
        $website = new Website($nodoWebsite);
        $this->assertNotNull($website->websiteRole);
        $this->assertNotNull($website->websiteLink);
    }
    
    public function testNullWebsite(){
        
        $nodoWebsite = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                              <Website>
					                               <WebsiteLink>http://www.harpercollins.co.uk</WebsiteLink>
				                              </Website>');
        
        $website = new Website($nodoWebsite);
        $this->assertNull($website->websiteRole);
        $this->assertNotNull($website->websiteLink);
    }
}


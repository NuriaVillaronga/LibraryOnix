<?php
namespace test;
use PHPUnit\Framework\TestCase;
use OnixComponents\Website;
use OnixComponents\WebsiteList;

class WebsiteListTest extends TestCase
{
    public function testWebsiteList(){
        
        $nodoWebsiteList = simplexml_load_file(__DIR__.'/books/bookWebsiteList.xml');
        
        $websiteList = new WebsiteList($nodoWebsiteList);
        
        $this->assertCount(1, $websiteList->arrayWebsite);
        
        foreach ($websiteList->arrayWebsite as $websiteListComponent){
            $this->assertNotNull($websiteListComponent);
            $this->assertInstanceOf(Website::class, $websiteListComponent);
        }
    }
}


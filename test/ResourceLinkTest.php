<?php
namespace test;
use OnixComponents\ResourceLink;
use PHPUnit\Framework\TestCase;

class ResourceLinkTest extends TestCase
{
    public function testResourceLink(){
        
        $nodoResourceLink = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                   <ResourceLink>http://www.harpercollins.co.uk/covers/9780007232833.jpg</ResourceLink>');
        
        $resourceLink = new ResourceLink($nodoResourceLink);
        $this->assertEquals('http://www.harpercollins.co.uk/covers/9780007232833.jpg', $resourceLink->contents);
    }
}


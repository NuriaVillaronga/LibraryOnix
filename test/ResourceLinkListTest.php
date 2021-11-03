<?php
namespace test;
use OnixComponents\ResourceLink;
use OnixComponents\ResourceLinkList;
use PHPUnit\Framework\TestCase;

class ResourceLinkListTest extends TestCase
{
    public function testResourceLinkList(){
        
        $nodoResourceLinkList = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                       <Dummy>
					                                       <ResourceLink>http://browseinside.harpercollins.co.uk/pageview?isbn=9780007232833</ResourceLink>
				                                        </Dummy>');
        
        $resourceLinkList = new ResourceLinkList($nodoResourceLinkList);
        
        $this->assertCount(1, $resourceLinkList->arrayResourceLink);
        
        foreach ($resourceLinkList->arrayResourceLink as $resourceLinkListComponent){
            $this->assertNotNull($resourceLinkListComponent);
            $this->assertInstanceOf(ResourceLink::class, $resourceLinkListComponent);
        }
    }
}


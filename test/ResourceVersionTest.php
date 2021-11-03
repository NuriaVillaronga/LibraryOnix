<?php
namespace test;
use OnixComponents\ResourceVersion;
use PHPUnit\Framework\TestCase;

class ResourceVersionTest extends TestCase
{
    public function testResourceVersion(){
        
        $nodoResourceVersion = simplexml_load_file(__DIR__.'/books/bookResourceVersion.xml');
        
        $resourceVersion = new ResourceVersion($nodoResourceVersion);
        $this->assertNotNull($resourceVersion->resourceForm);
        $this->assertNotNull($resourceVersion->resourceLinkList);
        $this->assertNotNull($resourceVersion->resourceVersionFeatureList);
        $this->assertNotNull($resourceVersion->contentDateList);
    }
    
    public function testNullResourceVersion(){
        
        $nodoResourceVersion = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                      <ResourceVersion>
                                    					<ResourceForm>01</ResourceForm>
                                    					<ResourceLink>http://browseinside.harpercollins.co.uk</ResourceLink>
                                    				  </ResourceVersion>');
        
        $resourceVersion = new ResourceVersion($nodoResourceVersion);
        $this->assertNotNull($resourceVersion->resourceForm);
        $this->assertNotNull($resourceVersion->resourceLinkList);
        $this->assertNull($resourceVersion->resourceVersionFeatureList);
        $this->assertNull($resourceVersion->contentDateList);
    }
}


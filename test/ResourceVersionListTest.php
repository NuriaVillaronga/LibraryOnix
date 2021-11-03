<?php
namespace test;
use OnixComponents\ResourceVersion; 
use OnixComponents\ResourceVersionList;
use PHPUnit\Framework\TestCase;

class ResourceVersionListTest extends TestCase
{
    public function testReturnsConditionsList(){
        
        $nodoResourceVersionList = simplexml_load_file(__DIR__.'/books/bookResourceVersionList.xml');
        
        $resourceVersionList = new ResourceVersionList($nodoResourceVersionList);
        
        $this->assertCount(1, $resourceVersionList->arrayResourceVersion);
        
        foreach ($resourceVersionList->arrayResourceVersion as $resourceVersionListComponent){
            $this->assertNotNull($resourceVersionListComponent);
            $this->assertInstanceOf(ResourceVersion::class, $resourceVersionListComponent);
        }
    }
}


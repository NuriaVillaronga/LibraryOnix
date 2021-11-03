<?php
namespace test;
use OnixComponents\ResourceVersionFeature;
use OnixComponents\ResourceVersionFeatureList;
use PHPUnit\Framework\TestCase;

class ResourceVersionFeatureListTest extends TestCase
{
    public function testResourceVersionFeatureList(){
        
        $nodoResourceVersionFeatureList = simplexml_load_file(__DIR__.'/books/bookResourceVersionFeatureList.xml');
        
        $resourceVersionFeatureList = new ResourceVersionFeatureList($nodoResourceVersionFeatureList);
        
        $this->assertCount(3, $resourceVersionFeatureList->arrayResourceVersionFeature);
        
        foreach ($resourceVersionFeatureList->arrayResourceVersionFeature as $resourceVersionFeatureListComponent){
            $this->assertNotNull($resourceVersionFeatureListComponent);
            $this->assertInstanceOf(ResourceVersionFeature::class, $resourceVersionFeatureListComponent);
        }
    }
}


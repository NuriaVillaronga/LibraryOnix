<?php
namespace test;
use OnixComponents\ResourceVersionFeature;
use PHPUnit\Framework\TestCase;

class ResourceVersionFeatureTest extends TestCase
{
    public function testResourceVersionFeature(){
        
        $nodoResourceVersionFeature = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                             <ResourceVersionFeature>
                                        						<ResourceVersionFeatureType>03</ResourceVersionFeatureType>
                                        						<FeatureValue>222</FeatureValue>
                                        					 </ResourceVersionFeature>');
        
        $resourceVersionFeature = new ResourceVersionFeature($nodoResourceVersionFeature);
        $this->assertNotNull($resourceVersionFeature->resourceVersionFeatureType);
        $this->assertNotNull($resourceVersionFeature->featureValue);
    }
    
    public function testNullResourceVersionFeature(){
        
        $nodoResourceVersionFeature = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                             <ResourceVersionFeature>
                                        						<ResourceVersionFeatureType>03</ResourceVersionFeatureType>
                                        					 </ResourceVersionFeature>');
        
        $resourceVersionFeature = new ResourceVersionFeature($nodoResourceVersionFeature);
        $this->assertNotNull($resourceVersionFeature->resourceVersionFeatureType);
        $this->assertNull($resourceVersionFeature->featureValue);
    }
}


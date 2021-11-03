<?php
namespace test;
use OnixComponents\ResourceVersionFeatureType;
use PHPUnit\Framework\TestCase;

class ResourceVersionFeatureTypeTest extends TestCase
{
    public function testResourceVersionFeatureType(){
        
        $nodoResourceVersionFeatureType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                                 <ResourceVersionFeatureType>03</ResourceVersionFeatureType>');
        
        $resourceVersionFeatureType = new ResourceVersionFeatureType($nodoResourceVersionFeatureType);
        $this->assertEquals('03', $resourceVersionFeatureType->contents);
    }
}


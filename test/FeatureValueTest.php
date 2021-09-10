<?php
namespace test;
use OnixComponents\FeatureValue;
use PHPUnit\Framework\TestCase;

class FeatureValueTest extends TestCase
{
    public function testFeatureValue(){
        
        $nodoFeatureValue = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                   <FeatureValue>D502</FeatureValue>');
        
        $featureValue = new FeatureValue($nodoFeatureValue);
        $this->assertEquals('D502', $featureValue->contents);
    }
}


<?php
namespace test;
use OnixComponents\RelatedMaterial;
use PHPUnit\Framework\TestCase;

class RelatedMaterialTest extends TestCase
{
    public function testRelatedMaterial(){
        
        $nodoRelatedMaterial = simplexml_load_file(__DIR__.'/books/bookRelatedMaterial.xml');
        
        $relatedMaterial = new RelatedMaterial($nodoRelatedMaterial);
        $this->assertNotNull($relatedMaterial->relatedWorkList);
        $this->assertNotNull($relatedMaterial->relatedProductList);
    }
    
    public function testNullRelatedMaterial(){
        
        $nodoRelatedMaterial = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                      <RelatedMaterial></RelatedMaterial>');
        
        $relatedMaterial = new RelatedMaterial($nodoRelatedMaterial);
        $this->assertNull($relatedMaterial->relatedWorkList);
        $this->assertNull($relatedMaterial->relatedProductList);
    }
    
}


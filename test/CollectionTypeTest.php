<?php
namespace test;
use OnixComponents\CollectionType;
use PHPUnit\Framework\TestCase;

class CollectionTypeTest extends TestCase
{
    public function testCollectionType(){
        
        $nodoCollectionType = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                      <CollectionType>10</CollectionType>');
        
        $collectionType = new CollectionType($nodoCollectionType);
        $this->assertEquals('10', $collectionType->contents); 
    }
}


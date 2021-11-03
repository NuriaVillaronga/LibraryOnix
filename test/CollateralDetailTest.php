<?php
namespace test;
use OnixComponents\CollateralDetail;
use PHPUnit\Framework\TestCase;

class CollateralDetailTest extends TestCase
{
    public function testCollateralDetail(){
        
        $nodoCollateralDetail = simplexml_load_file('test/books/bookCollateralDetail.xml');
        
        $collateralDetail = new CollateralDetail($nodoCollateralDetail);
        //var_dump($collateralDetail);
        $this->assertNotNull($collateralDetail->textContentList);
        $this->assertNotNull($collateralDetail->citedContentList);
        $this->assertNotNull($collateralDetail->supportingResourceList);  
    }
    
    public function testNullCollateralDetail(){
        
        $nodoCollateralDetail = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                       <CollateralDetail></CollateralDetail>');
        
        $collateralDetail = new CollateralDetail($nodoCollateralDetail);
        $this->assertNull($collateralDetail->textContentList);
        $this->assertNull($collateralDetail->citedContentList);
        $this->assertNull($collateralDetail->supportingResourceList);
    } 
}


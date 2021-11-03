<?php
namespace test;
use OnixComponents\PublishingDetail;
use PHPUnit\Framework\TestCase;

class PublishingDetailTest extends TestCase
{
    public function testPublishingDetail(){
        
        $nodoPublishingDetail = simplexml_load_file(__DIR__.'/books/bookPublishingDetail.xml');
        
        $publishingDetail = new PublishingDetail($nodoPublishingDetail);
        $this->assertNotNull($publishingDetail->countryOfPublication);
        $this->assertNotNull($publishingDetail->publishingStatus);
        $this->assertNotNull($publishingDetail->rowSalesRightsType); 
        $this->assertNotNull($publishingDetail->cityOfPublicationList);
        $this->assertNotNull($publishingDetail->imprintList);
        $this->assertNotNull($publishingDetail->publisherList);
        $this->assertNotNull($publishingDetail->publishingDateList);
        $this->assertNotNull($publishingDetail->salesRightsList);
    }
    
    public function testNullPublishingDetail(){
        
        $nodoPublishingDetail = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                       <PublishingDetail></PublishingDetail>');
        
        $publishingDetail = new PublishingDetail($nodoPublishingDetail);
        $this->assertNull($publishingDetail->countryOfPublication);
        $this->assertNull($publishingDetail->publishingStatus);
        $this->assertNull($publishingDetail->rowSalesRightsType);
        $this->assertNull($publishingDetail->cityOfPublicationList);
        $this->assertNull($publishingDetail->imprintList);
        $this->assertNull($publishingDetail->publisherList);
        $this->assertNull($publishingDetail->publishingDateList);
        $this->assertNull($publishingDetail->salesRightsList);  
    }
}


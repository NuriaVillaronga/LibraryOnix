<?php
namespace test;
use OnixComponents\MarketPublishingDetail;
use PHPUnit\Framework\TestCase;

class MarketPublishingDetailTest extends TestCase
{
    public function testMarketPublishingDetail(){
        
        $nodoMarketPublishingDetail = simplexml_load_file(__DIR__.'/books/bookMarketPublishingDetail.xml');
        
        $marketPublishingDetail = new MarketPublishingDetail($nodoMarketPublishingDetail);
        $this->assertNotNull($marketPublishingDetail->marketPublishingStatus);
        $this->assertNotNull($marketPublishingDetail->marketDateList);
    }
    
    public function testNullMarketPublishingDetail(){
        
        $nodoMarketPublishingDetail = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                            <MarketPublishingDetail>
                                                				<MarketPublishingStatus>04</MarketPublishingStatus>
                                                			</MarketPublishingDetail>');
        
        $marketPublishingDetail = new MarketPublishingDetail($nodoMarketPublishingDetail);
        $this->assertNotNull($marketPublishingDetail->marketPublishingStatus);
        $this->assertNull($marketPublishingDetail->marketDateList);
    }
}


<?php
namespace test;
use OnixComponents\MarketPublishingStatus;
use PHPUnit\Framework\TestCase;

class MarketPublishingStatusTest extends TestCase
{
    public function testMarketPublishingStatus(){
        
        $nodoMarketPublishingStatus = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                             <MarketPublishingStatus>04</MarketPublishingStatus>');
        
        $marketPublishingStatus = new MarketPublishingStatus($nodoMarketPublishingStatus);
        $this->assertEquals('04', $marketPublishingStatus->contenido);
    }
}


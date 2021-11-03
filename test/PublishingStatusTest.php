<?php
namespace test;
use OnixComponents\PublishingStatus;
use PHPUnit\Framework\TestCase;

class PublishingStatusTest extends TestCase
{
    public function testPublishingStatus(){
        
        $nodoPublishingStatus = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                       <PublishingStatus>04</PublishingStatus>');
        
        $publishingStatus = new PublishingStatus($nodoPublishingStatus);
        $this->assertEquals('04', $publishingStatus->contents);
    }
}


<?php
namespace test;
use OnixComponents\PublishingDate;
use PHPUnit\Framework\TestCase;

class PublishingDateTest extends TestCase
{
    public function testPublishingDate(){
        
        $nodoPublishingDate = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                     <PublishingDate>
                                        				<PublishingDateRole>01</PublishingDateRole>
                                        				<Date>20060807</Date>
                                                        <DateFormat>00</DateFormat>
                                        			 </PublishingDate>');
        
        $publishingDate = new PublishingDate($nodoPublishingDate);
        $this->assertNotNull($publishingDate->publishingDateRole);
        $this->assertNotNull($publishingDate->date);
        $this->assertNotNull($publishingDate->dateFormat);
    }
}


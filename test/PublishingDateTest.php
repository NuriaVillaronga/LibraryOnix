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
                                        				<Date dateformat="00">20060807</Date>
                                        			 </PublishingDate>');
        
        $publishingDate = new PublishingDate($nodoPublishingDate);
        $this->assertNotNull($publishingDate->publishingDateRole);
        $this->assertNotNull($publishingDate->date);
    }
}


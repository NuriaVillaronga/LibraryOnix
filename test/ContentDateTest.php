<?php
namespace test;
use OnixComponents\ContentDate;
use PHPUnit\Framework\TestCase;

class ContentDateTest extends TestCase
{
    public function testContentDate(){
        
        $nodoContentDate = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                            	   <ContentDate>
					                                   <ContentDateRole>01</ContentDateRole>
					                                   <Date dateformat="00">20091122</Date>
				                                   </ContentDate>');
        
        $contentDate = new ContentDate($nodoContentDate);
        $this->assertNotNull($contentDate->contentDateRole);
        $this->assertNotNull($contentDate->date);
    }
}


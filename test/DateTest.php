<?php
namespace test;
use OnixComponents\Date;
use OnixComponents\dateformatAttr;
use OnixComponents\DateFormatNode;
use PHPUnit\Framework\TestCase;

class DateTest extends TestCase
{
    public function testDate(){
        
        $nodoPublishingDate = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                            <PublishingDate>
                                                <DateFormat>00</DateFormat>
                                                <Date>20210125</Date>
                                            </PublishingDate>');
        
        $date = new Date($nodoPublishingDate);
        
        
        //$dateformat = new dateformatAttr($nodoPublishingDate->Date['dateformat']);
        //var_dump($dateformat->contents);
        
        
        //<DateFormat>01</DateFormat>
        //$dateFormat = new DateFormatNode($nodoPublishingDate->DateFormat);
        //var_dump($dateFormat->contents);
        var_dump($date->valor);
        die();
    }
}


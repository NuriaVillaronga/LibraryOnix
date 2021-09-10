<?php
namespace test;
use OnixComponents\CityOfPublication;
use OnixComponents\CityOfPublicationList;
use PHPUnit\Framework\TestCase;

class CityOfPublicationListTest extends TestCase
{
    public function testCityOfPublicationList(){
        
        $nodoCityOfPublicationList = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                            <PublishingDetail>
                                                                <CityOfPublication>London</CityOfPublication>
                                                            </PublishingDetail>');
        
        $cityOfPublicationList = new CityOfPublicationList($nodoCityOfPublicationList);
        
        $this->assertCount(1, $cityOfPublicationList->arrayCityOfPublication); 
        
        foreach ($cityOfPublicationList->arrayCityOfPublication as $cityOfPublicationListComponent){
            $this->assertNotNull($cityOfPublicationListComponent);
            $this->assertInstanceOf(CityOfPublication::class, $cityOfPublicationListComponent);
        }
    }
}


<?php
namespace test;
use OnixComponents\CityOfPublication;
use PHPUnit\Framework\TestCase;

class CityOfPublicationTest extends TestCase
{
    public function testCityOfPublication(){
        
        $nodoCityOfPublication = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                        <CityOfPublication>London</CityOfPublication>');
        
        $cityOfPublication = new CityOfPublication($nodoCityOfPublication);
        $this->assertEquals('London', $cityOfPublication->contents);
    }
}


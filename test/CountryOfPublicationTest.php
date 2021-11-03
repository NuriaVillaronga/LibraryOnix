<?php
namespace test;
use OnixComponents\CountryOfPublication;
use PHPUnit\Framework\TestCase;

class CountryOfPublicationTest extends TestCase
{
    public function testCountryOfPublication(){
        
        $nodoCountryOfPublication = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                           <CountryOfPublication>GB</CountryOfPublication>');
        
        $countryOfPublication = new CountryOfPublication($nodoCountryOfPublication);
        $this->assertEquals('GB', $countryOfPublication->contents);
    }
}


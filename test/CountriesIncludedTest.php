<?php
namespace test;
use OnixComponents\CountriesIncluded;
use PHPUnit\Framework\TestCase;

class CountriesIncludedTest extends TestCase
{
    public function testCountriesIncluded(){
        
        $nodoCountriesIncluded = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                        <CountriesIncluded>AS CA GU MP PH PR US VI</CountriesIncluded>');
        
        $countriesIncluded = new CountriesIncluded($nodoCountriesIncluded);
        $this->assertEquals('AS CA GU MP PH PR US VI', $countriesIncluded->contents);
    }
}


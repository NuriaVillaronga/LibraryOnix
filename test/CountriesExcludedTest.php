<?php
namespace test;
use OnixComponents\CountriesExcluded;
use PHPUnit\Framework\TestCase;

class CountriesExcludedTest extends TestCase
{
    public function testCountriesExcluded(){
        
        $nodoCountriesExcluded = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                        <CountriesExcluded>AS AU CA GU MP NZ PH PR US VI ZA</CountriesExcluded>');
        
        $countriesExcluded = new CountriesExcluded($nodoCountriesExcluded);
        $this->assertEquals('AS AU CA GU MP NZ PH PR US VI ZA', $countriesExcluded->contents);
    }
}


<?php
namespace test;
use OnixComponents\CountryOfManufacture;
use PHPUnit\Framework\TestCase;

class CountryOfManufactureTest extends TestCase
{
    public function testCountryOfManufacture(){
        
        $nodoCountryOfManufacture = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                           <CountryOfManufacture>GB</CountryOfManufacture>');
        
        $countryOfManufacture = new CountryOfManufacture($nodoCountryOfManufacture);
        $this->assertEquals('GB', $countryOfManufacture->contents);
    }
}


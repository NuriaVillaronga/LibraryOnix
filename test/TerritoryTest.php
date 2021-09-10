<?php
namespace test;
use OnixComponents\Territory;
use PHPUnit\Framework\TestCase;

class TerritoryTest extends TestCase
{
    public function testTerritory(){
        
        $nodoTerritory = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                <Territory>
                                					<RegionsIncluded>WORLD</RegionsIncluded>
                                					<CountriesExcluded>AS AU CA GU MP NZ PH PR</CountriesExcluded>
                                                    <CountriesIncluded>AT BE CY FI FR DE ES GR</CountriesIncluded>
                                				</Territory>');
        
        $territory = new Territory($nodoTerritory);
        $this->assertNotNull($territory->regionsIncluded);
        $this->assertNotNull($territory->countriesExcluded);
        $this->assertNotNull($territory->countriesIncluded);
    }
    
    public function testNullTerritory(){
        
        $nodoTerritory = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                <Territory></Territory>');
        
        $territory = new Territory($nodoTerritory);
        $this->assertNull($territory->regionsIncluded);
        $this->assertNull($territory->countriesExcluded);
        $this->assertNull($territory->countriesIncluded);
    }
}


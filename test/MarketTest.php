<?php
namespace test;
use OnixComponents\Market;
use PHPUnit\Framework\TestCase;

class MarketTest extends TestCase
{
    public function testSalesRights(){
        
        $nodoMarket = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                              <Market>
                                    			 <Territory>
                                    				 <RegionsIncluded>WORLD</RegionsIncluded>
                                    				 <CountriesExcluded>AS AU CA GU MP NZ PH PR US VI ZA</CountriesExcluded>
                                    			 </Territory>
                                    		  </Market>');
        
        $market = new Market($nodoMarket);
        $this->assertNotNull($market->territory);
    }
}


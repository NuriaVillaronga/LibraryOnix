<?php
namespace test;
use OnixComponents\MarketDate;
use PHPUnit\Framework\TestCase;

class MarketDateTest extends TestCase
{
    public function testMarketDate(){
        
        $nodoMarketDate = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                            	 <MarketDate>
					                                  <MarketDateRole>01</MarketDateRole>
					                                  <Date dateformat="00">20060807</Date>
				                                 </MarketDate>');
        
        $marketDate = new MarketDate($nodoMarketDate);
        $this->assertNotNull($marketDate->marketDateRole);
        $this->assertNotNull($marketDate->date);
    }
}


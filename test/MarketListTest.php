<?php
namespace test;
use OnixComponents\Market;
use OnixComponents\MarketList;
use PHPUnit\Framework\TestCase;

class MarketListTest extends TestCase
{
    public function testMarketList(){
        
        $nodoMarketList = simplexml_load_file(__DIR__.'/books/bookMarketList.xml');
        
        $marketList = new MarketList($nodoMarketList);
        
        $this->assertCount(1, $marketList->arrayMarket);
        
        foreach ($marketList->arrayMarket as $marketListComponent){
            $this->assertNotNull($marketListComponent);
            $this->assertInstanceOf(Market::class, $marketListComponent);
        }
    }
}


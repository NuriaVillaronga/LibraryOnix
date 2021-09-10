<?php
namespace test;
use OnixComponents\MarketDate;
use OnixComponents\MarketDateList;
use PHPUnit\Framework\TestCase;

class MarketDateListTest extends TestCase
{
    public function testMarketDateList(){
        
        $nodoMarketDateList = simplexml_load_file(__DIR__.'/books/bookMarketDateList.xml');
        
        $marketDateList = new MarketDateList($nodoMarketDateList);
        
        $this->assertCount(1, $marketDateList->arrayMarketDate);
        
        foreach ($marketDateList->arrayMarketDate as $marketDateListComponent){
            $this->assertNotNull($marketDateListComponent);
            $this->assertInstanceOf(MarketDate::class, $marketDateListComponent);
        }
    }
}


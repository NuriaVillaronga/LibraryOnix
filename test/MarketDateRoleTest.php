<?php
namespace test;
use OnixComponents\MarketDateRole;
use PHPUnit\Framework\TestCase;

class MarketDateRoleTest extends TestCase
{
    public function testMarketDateRole(){
        
        $nodoMarketDateRole = simplexml_load_string('<?xml version="1.0" encoding="UTF-8"?>
                                                      <MarketDateRole>01</MarketDateRole>');
        
        $marketDateRole = new MarketDateRole($nodoMarketDateRole);
        $this->assertEquals('01', $marketDateRole->contenido);
    }
}


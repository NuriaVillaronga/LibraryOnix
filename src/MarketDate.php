<?php
namespace OnixComponents;

use SimpleXMLElement;

class MarketDate
{

    public MarketDateRole $marketDateRole; //(1)
    
    public Date $date; //(1)
    
    public function __construct(SimpleXMLElement $nodeMarketDate)
    {
        $this->marketDateRole = new MarketDateRole($nodeMarketDate->MarketDateRole);
        $this->date = new Date($nodeMarketDate->Date);
    }
}


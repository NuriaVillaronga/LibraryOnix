<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductSupply
{

    public ?MarketList $marketList; //(0,n)
    
    public SupplyDetailList $supplyDetailList; //(1,n)
    
    public ?MarketPublishingDetail $marketPublishingDetail; //(0,1)
    
    public function __construct(SimpleXMLElement $nodeProductSupply)
    {
        $this->supplyDetailList = new SupplyDetailList($nodeProductSupply);

        if (isset($nodeProductSupply->Market) == true) {
            $this->marketList = new MarketList($nodeProductSupply);
        } else {
            $this->marketList = null;
        }

        if (isset($nodeProductSupply->MarketPublishingDetail) == true) {
            $this->marketPublishingDetail = new MarketPublishingDetail($nodeProductSupply->MarketPublishingDetail);
        } else {
            $this->marketPublishingDetail = null;
        }
    }
}


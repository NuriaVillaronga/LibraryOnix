<?php
namespace OnixComponents;

use SimpleXMLElement;

class MarketPublishingDetail
{
    
    public ?MarketDateList $marketDateList; //(0,n)
    
    public MarketPublishingStatus $marketPublishingStatus; //(1)
    
    public function __construct(SimpleXMLElement $nodeMarketPublishingDetail)
    {
        if (isset($nodeMarketPublishingDetail->MarketDate) == true) {
            $this->marketDateList = new MarketDateList($nodeMarketPublishingDetail);
        } else {
            $this->marketDateList = null;
        }

        $this->marketPublishingStatus = new MarketPublishingStatus($nodeMarketPublishingDetail->MarketPublishingStatus);
    }
}


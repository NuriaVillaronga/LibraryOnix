<?php
namespace OnixComponents;

use SimpleXMLElement;

class MarketDateList
{

    /**
     *
     * @var MarketDate[]
     */
    public $arrayMarketDate = array();

    public function __construct(SimpleXMLElement $nodeMarketPublishingDetail)
    {
        foreach ($nodeMarketPublishingDetail->MarketDate as $nodeMarketDate) {
            $this->arrayMarketDate[] = new MarketDate($nodeMarketDate);
        }
    }
}


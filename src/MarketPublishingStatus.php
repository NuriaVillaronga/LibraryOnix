<?php
namespace OnixComponents;

use SimpleXMLElement;

class MarketPublishingStatus
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeMarketPublishingStatus)
    {
        $this->contents = (string) ($nodeMarketPublishingStatus);
    }
}


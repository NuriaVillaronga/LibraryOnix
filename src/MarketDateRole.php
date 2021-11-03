<?php
namespace OnixComponents;

use SimpleXMLElement;

class MarketDateRole
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeMarketDateRole)
    {
        $this->contents = (string) ($nodeMarketDateRole);
    }
}


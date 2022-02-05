<?php
namespace OnixComponents;

use SimpleXMLElement;

class PrizeJury 
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePrizeJury)
    {
        $this->contents = (string) ($nodePrizeJury);
    }
}
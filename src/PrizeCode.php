<?php
namespace OnixComponents;

use SimpleXMLElement;
 
class PrizeCode
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePrizeCode) 
    {
        $this->contents = (string) $nodePrizeCode;
    }
}
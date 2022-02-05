<?php
namespace OnixComponents;

use SimpleXMLElement;

class PrizeNameList
{

    /**
     *
     * @var PrizeName[]  
     */
    public $arrayPrizeName = array();

    public function __construct(SimpleXMLElement $nodePrize) 
    {
        foreach ($nodePrize->PrizeName as $nodePrizeName) {
            $this->arrayPrizeName[] = new PrizeName($nodePrizeName);
        }
    }
}
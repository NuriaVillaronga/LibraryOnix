<?php
namespace OnixComponents;

use SimpleXMLElement;

class PrizeList 
{

    /**
     *
     * @var Prize[]
     */
    public $arrayPrize = array();

    public function __construct(SimpleXMLElement $nodeContributor) 
    {
        foreach ($nodeContributor->Prize as $nodePrize) {
            $this->arrayPrize[] = new Prize($nodePrize);
        }
    }
}
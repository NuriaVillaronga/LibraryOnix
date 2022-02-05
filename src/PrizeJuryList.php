<?php
namespace OnixComponents;

use SimpleXMLElement;

class PrizeJuryList
{

    /**
     *
     * @var PrizeJury[] 
     */
    public $arrayPrizeJury = array();

    public function __construct(SimpleXMLElement $nodePrize) 
    {
        foreach ($nodePrize->PrizeJury as $nodePrizeJury) {
            $this->arrayPrizeJury[] = new PrizeJury($nodePrizeJury);
        }
    }
}
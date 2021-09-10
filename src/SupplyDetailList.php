<?php
namespace OnixComponents;

use SimpleXMLElement;

class SupplyDetailList
{

    /**
     *
     * @var SupplyDetail[]
     */
    public $arraySupplyDetail = array();

    public function __construct(SimpleXMLElement $nodeProductSupply)
    {
        foreach ($nodeProductSupply->SupplyDetail as $nodeSupplyDetail) {
            $this->arraySupplyDetail[] = new SupplyDetail($nodeSupplyDetail);
        }
    }
}


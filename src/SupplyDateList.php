<?php
namespace OnixComponents;

use SimpleXMLElement;

class SupplyDateList 
{

    /**
     *
     * @var SupplyDate[] 
     */
    public $arraySupplyDate = array();

    public function __construct(SimpleXMLElement $nodeSupplyDetail)
    {
        foreach ($nodeSupplyDetail->SupplyDate as $nodeSupplyDate) {
            $this->arraySupplyDate[] = new SupplyDate($nodeSupplyDate);
        }
    }
}
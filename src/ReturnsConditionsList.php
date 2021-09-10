<?php
namespace OnixComponents;

use SimpleXMLElement;

class ReturnsConditionsList
{

    /**
     *
     * @var ReturnsConditions[]
     */
    public $arrayReturnsConditions = array();

    public function __construct(SimpleXMLElement $nodeSupplyDetail)
    {
        foreach ($nodeSupplyDetail->ReturnsConditions as $nodeReturnsConditions) {
            $this->arrayReturnsConditions[] = new ReturnsConditions($nodeReturnsConditions);
        }
    }
}


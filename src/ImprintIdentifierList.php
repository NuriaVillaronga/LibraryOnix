<?php
namespace OnixComponents;

use SimpleXMLElement;

class ImprintIdentifierList 
{

    /**
     *
     * @var ImprintIdentifier[]
     */
    public $arrayImprintIdentifier = array();

    public function __construct(SimpleXMLElement $nodeImprint) 
    {
        foreach ($nodeImprint->ImprintIdentifier as $nodeImprintIdentifier) {
            $this->arrayImprintIdentifier[] = new ImprintIdentifier($nodeImprintIdentifier);
        }
    }
}
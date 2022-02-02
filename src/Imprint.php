<?php
namespace OnixComponents;

use SimpleXMLElement;

class Imprint
{

    public ?ImprintName $imprintName; // (0,1)

    public ?ImprintIdentifierList $imprintIdentifierList; // (0,n)

    public function __construct(SimpleXMLElement $nodeImprint)
    {
        if (isset($nodeImprint->ImprintName) == true) {
            $this->imprintName = new ImprintName($nodeImprint->ImprintName);
        } else {
            $this->imprintName = null;
        }

        if (isset($nodeImprint->ImprintIdentifier) == true) {
            $this->ImprintIdentifierList = new ImprintIdentifierList($nodeImprint); 
        } else {
            $this->ImprintIdentifierList = null;
        }
    }
}


<?php
namespace OnixComponents;

use SimpleXMLElement;

class CollectionList
{

    /**
     *
     * @var Collection[] 
     */
    public $arrayCollection = array();

    public function __construct(SimpleXMLElement $nodeDescriptiveDetail)
    {
        foreach ($nodeDescriptiveDetail->Collection as $nodeCollection) {
            $this->arrayCollection[] = new Collection($nodeCollection);
        }
    }
}


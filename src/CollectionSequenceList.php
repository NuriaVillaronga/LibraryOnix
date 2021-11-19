<?php
namespace OnixComponents;

use SimpleXMLElement;

class CollectionSequenceList
{

    /**
     *
     * @var CollectionSequence[]
     */
    public $arrayCollectionSequence = array();

    public function __construct(SimpleXMLElement $nodeCollection)
    {
        foreach ($nodeCollection->CollectionSequence as $nodeCollectionSequence) {
            $this->arrayCollectionSequence[] = new CollectionSequence($nodeCollectionSequence);
        }
    }
}
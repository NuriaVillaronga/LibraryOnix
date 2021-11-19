<?php
namespace OnixComponents;

use SimpleXMLElement;

class CollectionSequence
{
    
    public CollectionSequenceNumber $collectionSequenceNumber; //(1)
    
    public function __construct(SimpleXMLElement $nodeCollectionSequence)
    {
        $this->collectionSequenceNumber = new CollectionSequenceNumber($nodeCollectionSequence->CollectionSequenceNumber);
    }
}
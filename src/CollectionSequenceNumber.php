<?php
namespace OnixComponents;

use SimpleXMLElement;

class CollectionSequenceNumber
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeCollectionSequenceNumber)
    {
        $this->contents = (string) ($nodeCollectionSequenceNumber);
    }
}
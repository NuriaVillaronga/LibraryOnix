<?php
namespace OnixComponents;

use SimpleXMLElement;

class CollectionType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeCollectionType)
    {
        $this->contents = (string) ($nodeCollectionType);
    }
}


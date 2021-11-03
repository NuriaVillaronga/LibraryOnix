<?php
namespace OnixComponents;

use SimpleXMLElement;

class RecordReference
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeRecordReference)
    {
        $this->contents = (string) ($nodeRecordReference);
    }
}


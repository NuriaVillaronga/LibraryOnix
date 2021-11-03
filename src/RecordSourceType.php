<?php
namespace OnixComponents;

use SimpleXMLElement;

class RecordSourceType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeRecordSourceType)
    {
        $this->contents = (string) ($nodeRecordSourceType);
    }
}


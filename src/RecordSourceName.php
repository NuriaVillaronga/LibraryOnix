<?php
namespace OnixComponents;

use SimpleXMLElement;

class RecordSourceName
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeRecordSourceName)
    {
        $this->contents = (string) ($nodeRecordSourceName);
    }
}


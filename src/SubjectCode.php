<?php
namespace OnixComponents;

use SimpleXMLElement;

class SubjectCode
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeSubjectCode)
    {
        $this->contents = (string) ($nodeSubjectCode);
    }
}


<?php
namespace OnixComponents;

use SimpleXMLElement;

class SubjectSchemeVersion
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeSubjectSchemeVersion)
    {
        $this->contents = (string) ($nodeSubjectSchemeVersion);
    }
}


<?php
namespace OnixComponents;

use SimpleXMLElement;

class SubjectSchemeIdentifier
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeSubjectSchemeIdentifier)
    {
        $this->contents = (string) ($nodeSubjectSchemeIdentifier);
    }
}


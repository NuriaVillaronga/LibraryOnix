<?php
namespace OnixComponents;

use SimpleXMLElement;

class SubjectHeadingText
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeSubjectHeadingText)
    {
        $this->contents = (string) ($nodeSubjectHeadingText);
    }
}


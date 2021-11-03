<?php
namespace OnixComponents;

use SimpleXMLElement;

class CitationNote
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeCitationNote)
    {
        $this->contents = (string) $nodeCitationNote;
    }
}


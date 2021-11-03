<?php
namespace OnixComponents;

use SimpleXMLElement;

class MessageNote
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeMessageNote)
    {
        $this->contents = (string) $nodeMessageNote;
    }
}


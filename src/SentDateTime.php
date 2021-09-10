<?php
namespace OnixComponents;

use SimpleXMLElement;

class SentDateTime
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeSentDateTime)
    {
        $this->contents = (string) $nodeSentDateTime;
    }
}


<?php
namespace OnixComponents;

use SimpleXMLElement;

class SenderName
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeSenderName)
    {
        $this->contents = (string) $nodeSenderName;
    }
}


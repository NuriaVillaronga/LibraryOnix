<?php
namespace OnixComponents;

use SimpleXMLElement;

class TitleType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeTitleType)
    {
        $this->contents = (string) ($nodeTitleType);
    }
}


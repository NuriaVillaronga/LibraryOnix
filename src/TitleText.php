<?php
namespace OnixComponents;

use SimpleXMLElement;

class TitleText
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeTitleText)
    {
        $this->contents = (string) ($nodeTitleText);
    }
}


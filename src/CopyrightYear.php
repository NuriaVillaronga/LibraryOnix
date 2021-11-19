<?php
namespace OnixComponents;

use SimpleXMLElement;

class CopyrightYear
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeCopyrightYear)
    {
        $this->contents = (string) $nodeCopyrightYear;
    }
}
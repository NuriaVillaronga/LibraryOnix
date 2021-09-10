<?php
namespace OnixComponents;

use SimpleXMLElement;

class ContributorStatement
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeContributorStatement)
    {
        $this->contents = (string) ($nodeContributorStatement);
    }
}


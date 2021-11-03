<?php
namespace OnixComponents;

use SimpleXMLElement;

class ContributorRole
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeContributorRole)
    {
        $this->contents = (string) ($nodeContributorRole);
    }
}


<?php
namespace OnixComponents;

use SimpleXMLElement;

class EpubTechnicalProtection
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeEpubTechnicalProtection)
    {
        $this->contents = (string) $nodeEpubTechnicalProtection;
    }
}
<?php
namespace OnixComponents;

use SimpleXMLElement;

class Language
{

    public LanguageRole $languageRole; // (1)

    public LanguageCode $languageCode; // (1)

    public function __construct(SimpleXMLElement $nodeLanguage)
    {
        $this->languageRole = new LanguageRole($nodeLanguage->LanguageRole);
        $this->languageCode = new LanguageCode($nodeLanguage->LanguageCode);
    }
}


<?php
namespace OnixComponents;

use SimpleXMLElement;

class LanguageList
{

    /**
     *
     * @var Language[]
     */
    public $arrayLanguage = array();

    public function __construct(SimpleXMLElement $nodeDescriptiveDetail)
    {
        foreach ($nodeDescriptiveDetail->Language as $nodeLanguage) {
            $this->arrayLanguage[] = new Language($nodeLanguage);
        }
    }
}


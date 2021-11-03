<?php
namespace OnixComponents;

use SimpleXMLElement;

class FromLanguageList
{

    /**
     *
     * @var FromLanguage[]
     */
    public $arrayFromLanguage = array();

    public function __construct(SimpleXMLElement $nodeContributor)
    {
        foreach ($nodeContributor->FromLanguage as $nodeFromLanguage) {
            $this->arrayFromLanguage[] = new FromLanguage($nodeFromLanguage);
        }
    }
}


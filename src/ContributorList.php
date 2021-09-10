<?php
namespace OnixComponents;

use SimpleXMLElement;

class ContributorList
{

    /**
     *
     * @var Contributor[]
     */
    public $arrayContributor = array();

    public function __construct(SimpleXMLElement $nodeDescriptiveDetail)
    {
        foreach ($nodeDescriptiveDetail->Contributor as $nodeContributor) {
            $this->arrayContributor[] = new Contributor($nodeContributor);
        }
    }
}


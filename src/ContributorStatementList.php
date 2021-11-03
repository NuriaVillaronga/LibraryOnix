<?php
namespace OnixComponents;

use SimpleXMLElement;

class ContributorStatementList
{

    /**
     *
     * @var ContributorStatement[]
     */
    public $arrayContributorStatement = array();

    public function __construct(SimpleXMLElement $nodeDescriptiveDetail)
    {
        foreach ($nodeDescriptiveDetail->ContributorStatement as $nodeContributorStatement) {
            $this->arrayContributorStatement[] = new ContributorStatement($nodeContributorStatement);
        }
    }
}


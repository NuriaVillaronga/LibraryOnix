<?php
namespace OnixComponents;

use SimpleXMLElement;

class ContributorRoleList
{

    /**
     *
     * @var ContributorRole[]
     */
    public $arrayContributorRole = array();

    public function __construct(SimpleXMLElement $nodeContributor)
    {
        foreach ($nodeContributor->ContributorRole as $nodeContributorRole) {
            $this->arrayContributorRole[] = new ContributorRole($nodeContributorRole);
        }
    }
}


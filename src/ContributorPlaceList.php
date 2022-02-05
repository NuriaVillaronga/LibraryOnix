<?php
namespace OnixComponents;

use SimpleXMLElement;

class ContributorPlaceList 
{

    /**
     *
     * @var ContributorPlace[]
     */
    public $arrayContributorPlace = array();

    public function __construct(SimpleXMLElement $nodeContributor) 
    {
        foreach ($nodeContributor->ContributorPlace as $nodeContributorPlace) {
            $this->arrayContributorPlace[] = new ContributorPlace($nodeContributorPlace);
        }
    }
}
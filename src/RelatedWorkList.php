<?php
namespace OnixComponents;

use SimpleXMLElement;

class RelatedWorkList
{

    /**
     *
     * @var RelatedWork[]
     */
    public $arrayRelatedWork = array();

    public function __construct(SimpleXMLElement $nodeRelatedMaterial)
    {
        foreach ($nodeRelatedMaterial->RelatedWork as $nodeRelatedWork) {
            $this->arrayRelatedWork[] = new RelatedWork($nodeRelatedWork);
        }
    }
}


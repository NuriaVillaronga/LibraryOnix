<?php
namespace OnixComponents;

use SimpleXMLElement;

class WorkIdentifierList
{

    /**
     *
     * @var WorkIdentifier[]
     */
    public $arrayWorkIdentifier = array();

    public function __construct(SimpleXMLElement $nodeRelatedWork)
    {
        foreach ($nodeRelatedWork->WorkIdentifier as $nodeWorkIdentifier) {
            $this->arrayWorkIdentifier[] = new WorkIdentifier($nodeWorkIdentifier);
        }
    }
}


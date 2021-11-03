<?php
namespace OnixComponents;

use SimpleXMLElement;

class RecordSourceIdentifierList
{

    /**
     *
     * @var RecordSourceIdentifier[]
     */
    public $arrayRecordSourceIdentifier = array();

    public function __construct(SimpleXMLElement $nodeProduct)
    {
        foreach ($nodeProduct->RecordSourceIdentifier as $nodeRecordSourceIdentifier) {
            $this->arrayRecordSourceIdentifier[] = new RecordSourceIdentifier($nodeRecordSourceIdentifier);
        }
    }
}


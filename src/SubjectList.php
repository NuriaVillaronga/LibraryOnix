<?php
namespace OnixComponents;

use SimpleXMLElement;

class SubjectList
{

    /**
     *
     * @var Subject[]
     */
    public $arraySubject = array();

    public function __construct(SimpleXMLElement $nodeDescriptiveDetail)
    {
        foreach ($nodeDescriptiveDetail->Subject as $nodeSubject) {
            $this->arraySubject[] = new Subject($nodeSubject);
        }
    }
}


<?php
namespace OnixComponents;

use SimpleXMLElement;

class SubjectHeadingTextList
{

    /**
     *
     * @var SubjectHeadingText[]
     */
    public $arraySubjectHeadingText = array();

    public function __construct(SimpleXMLElement $nodeSubject)
    {
        foreach ($nodeSubject->SubjectHeadingText as $nodeSubjectHeadingText) {
            $this->arraySubjectHeadingText[] = new SubjectHeadingText($nodeSubjectHeadingText);
        }
    }
}


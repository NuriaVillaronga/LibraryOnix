<?php
namespace OnixComponents;

use SimpleXMLElement;

class Subject
{
    
    public SubjectSchemeIdentifier $subjectSchemeIdentifier; //(1)
    
    public ?SubjectSchemeVersion $subjectSchemeVersion; //(0,1)
    
    public ?SubjectCode $subjectCode; //(0,1)
    
    public ?SubjectHeadingTextList $subjectHeadingTextList; //(0,n)
    
    public ?MainSubject $mainSubject; //(0,1) bandera
    
    public function __construct(SimpleXMLElement $nodeSubject)
    {
        $this->subjectSchemeIdentifier = new SubjectSchemeIdentifier($nodeSubject->SubjectSchemeIdentifier);

        if (isset($nodeSubject->SubjectSchemeVersion) == true) {
            $this->subjectSchemeVersion = new SubjectSchemeVersion($nodeSubject->SubjectSchemeVersion);
        } else {
            $this->subjectSchemeVersion = null;
        }

        if (isset($nodeSubject->SubjectCode) == true) {
            $this->subjectCode = new SubjectCode($nodeSubject->SubjectCode);
        } else {
            $this->subjectCode = null;
        }

        if (isset($nodeSubject->SubjectHeadingText) == true) {
            $this->subjectHeadingTextList = new SubjectHeadingTextList($nodeSubject);
        } else {
            $this->subjectHeadingTextList = null;
        }

        if (isset($nodeSubject->MainSubject) == true) {
            $this->mainSubject = new MainSubject($nodeSubject->MainSubject);
        } else {
            $this->mainSubject = null;
        }
    }
}


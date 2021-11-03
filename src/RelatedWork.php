<?php
namespace OnixComponents;

use SimpleXMLElement;

class RelatedWork
{
    public WorkIdentifierList $workIdentifierList; //(1,n)
    
    public WorkRelationCode $workRelationCode; //(1)
    
    public function __construct(SimpleXMLElement $nodeRelatedWork)
    {
        $this->workIdentifierList = new WorkIdentifierList($nodeRelatedWork);
        $this->workRelationCode = new WorkRelationCode($nodeRelatedWork->WorkRelationCode);
    }
}


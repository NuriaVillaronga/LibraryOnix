<?php
namespace OnixComponents;

use SimpleXMLElement;

class RecordSourceIdentifier
{
    
    public RecordSourceIDType $recordSourceIDType; //(1)
    
    public IDValue $idValue; //(1)
    
    public function __construct(SimpleXMLElement $nodeRecordSourceIdentifier)
    {
        $this->recordSourceIDType = new RecordSourceIDType($nodeRecordSourceIdentifier->RecordSourceIDType);
        $this->idValue = new IDValue($nodeRecordSourceIdentifier->IDValue);
    }
}


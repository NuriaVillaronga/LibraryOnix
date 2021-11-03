<?php
namespace OnixComponents;
use SimpleXMLElement;

class RecordSourceIDType
{
    public string $contents;
    
    public function __construct(SimpleXMLElement $nodeRecordSourceIDType){
        $this->contents = (string)($nodeRecordSourceIDType);
    }
}


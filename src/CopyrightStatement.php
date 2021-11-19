<?php
namespace OnixComponents;

use SimpleXMLElement;

class CopyrightStatement
{
    
    public CopyrightYearList $CopyrightYearList; //(1,n)
    
    public function __construct(SimpleXMLElement $nodeCopyrightStatement)
    {
        $this->copyrightYearList = new CopyrightYearList($nodeCopyrightStatement);
    }
}
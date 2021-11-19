<?php
namespace OnixComponents;

use SimpleXMLElement;

class CopyrightStatement
{
    
    public CopyrightYearList $copyrightYearList; //(1,n)
    
    public function __construct(SimpleXMLElement $nodeCopyrightStatement)
    {
        $this->copyrightYearList = new CopyrightYearList($nodeCopyrightStatement);
    }
}
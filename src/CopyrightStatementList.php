<?php
namespace OnixComponents;

use SimpleXMLElement;

class CopyrightStatementList
{

    /**
     *
     * @var CopyrightStatement[]
     */
    public $arrayCopyrightStatement = array();

    public function __construct(SimpleXMLElement $nodePublishingDetail)
    {
        foreach ($nodePublishingDetail->CopyrightStatement as $nodeCopyrightStatement) {
            $this->arrayCopyrightStatement[] = new CopyrightStatement($nodeCopyrightStatement);
        }
    }
}
<?php
namespace OnixComponents;

use SimpleXMLElement;

class CopyrightYearList
{

    /**
     *
     * @var CopyrightYear[]
     */
    public $arrayCopyrightYear = array();

    public function __construct(SimpleXMLElement $nodeCopyrightStatement)
    {
        foreach ($nodeCopyrightStatement->CopyrightYear as $nodeCopyrightYear) {
            $this->arrayCopyrightYear[] = new CopyrightYear($nodeCopyrightYear);
        }
    }
}
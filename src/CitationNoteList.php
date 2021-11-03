<?php
namespace OnixComponents;

use SimpleXMLElement;

class CitationNoteList
{

    /**
     *
     * @var CitationNote[]
     */
    public $arrayCitationNote = array();

    public function __construct(SimpleXMLElement $nodeCitedContent)
    {
        foreach ($nodeCitedContent->CitationNote as $nodeCitationNote) {
            $this->arrayCitationNote[] = new CitationNote($nodeCitationNote);
        }
    }
}


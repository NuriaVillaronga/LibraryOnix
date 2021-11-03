<?php
namespace OnixComponents;

use SimpleXMLElement;

class MessageNoteList
{

    /**
     *
     * @var MessageNote[]
     */
    public $arrayMessageNote = array();

    public function __construct(SimpleXMLElement $nodeHeader)
    {
        foreach ($nodeHeader->MessageNote as $nodeMessageNote) {
            $this->arrayMessageNote[] = new MessageNote($nodeMessageNote);
        }
    }
}


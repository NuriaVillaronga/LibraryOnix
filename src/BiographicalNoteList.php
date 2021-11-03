<?php
namespace OnixComponents;

use SimpleXMLElement;

class BiographicalNoteList
{

    /**
     *
     * @var BiographicalNote[]
     */
    public $arrayBiographicalNote = array();

    public function __construct(SimpleXMLElement $nodeContributor)
    {
        foreach ($nodeContributor->BiographicalNote as $nodeBiographicalNote) {
            $this->arrayBiographicalNote[] = new BiographicalNote($nodeBiographicalNote);
        }
    }
}


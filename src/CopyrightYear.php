<?php
namespace OnixComponents;

use DateTime;
use SimpleXMLElement;

class CopyrightYear
{

    public string $contents;

    public ?DateTime $valor;

    public ?dateformatAttr $dateformat; // (0,1)

    public function __construct(SimpleXMLElement $nodeCopyrightYear)  
    {
        $this->contents = (string)($nodeCopyrightYear); 

        if (isset($nodeCopyrightYear['dateformat']) == true) {
            $this->dateformat = new dateformatAttr($nodeCopyrightYear['dateformat']);
            $this->valor= $this->getValor($this->dateformat);
        }
        else {
            $this->dateformat = new dateformatAttr();
            $this->valor= $this->getValor($this->dateformat);
        } 
    }

    private function getValor($format) {
        if (DateTime::createFromFormat($format->contents, $this->contents) != null) {
            $valor = DateTime::createFromFormat($format->contents, $this->contents);
        } 
        else {
            $valor = null;
        }
        return $valor;
    }
}
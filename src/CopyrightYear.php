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
        $this->contents = (string)($nodeCopyrightYear->Date); 

        if (isset($nodeCopyrightYear->Date['dateformat']) == true) {
            $this->dateformat = new dateformatAttr($nodeCopyrightYear->Date['dateformat']);
            $this->valor= $this->getValor($this->dateformat);
        }
        else {
            $this->dateformat = new dateformatAttr();
            $this->valor= $this->getValor($this->dateformat);
        } 
    }

    private function getValor($dateformat) {
        if (DateTime::createFromFormat($dateformat->contents, $this->contents) != null) {
            $valor = DateTime::createFromFormat($dateformat->contents, $this->contents);
        } 
        else {
            $valor = null;
        }
        return $valor;
    }
}
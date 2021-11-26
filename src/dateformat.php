<?php

namespace OnixComponents;

use SimpleXMLElement;

class dateformat
{

    public string $contents;

    public function __construct(?SimpleXMLElement $nodeAttributeDateformat_nodeDateformat = null)
    {
        $this->contents = (string) ($nodeAttributeDateformat_nodeDateformat);

        if ($this->contents == "00"){
            $this->contents = "Ymd"; //AAAAMMDD
        }
        else if ($this->contents == "01"){
            $this->contents = "Ym"; //AAAAMM
        }
        else if ($this->contents == "02"){
            $this->contents = "oW"; //AAAASS siendo S numero de la semana del año (o)
        }
        else if ($this->contents == "05"){
            $this->contents = "Y"; //AAAA
        }
        else if ($this->contents == "06"){
            $this->contents = "YmdYmd"; //AAAAMMDDAAAAMMDD
        }
        else if ($this->contents == "07"){
            $this->contents = "YmYm"; //AAAAMMAAAAMM
        }
        else if ($this->contents == "08"){
            $this->contents = "oWoW"; //formato AAAASSAAAASS
        }
        else if ($this->contents == "11"){
            $this->contents = "YY"; //AAAAAAAA
        }
        else if ($this->contents == "13"){
            $this->contents = "YmdHi"; //YYYYMMDDThhmm
        }
        else if ($this->contents == "14"){
            $this->contents = "YmdHis"; //YYYYMMDDThhmmss
        }
        else if ($this->contents == "20"){
            $this->contents = "Ymd"; //YYYYMMDD (Calendario Hijri)
        }
        else if ($this->contents == "21"){
            $this->contents = "Ym"; //YYYYMM (Calendario Hijri)
        }
        else if ($this->contents == "25"){
            $this->contents = "Y"; //YYYY (Calendario Hijri)
        }
        else if ($this->contents == null){
            $this->contents = "Ymd"; //YYYY (Calendario Hijri)
        }
        /*
        if ($this->contents == "03"){
            $this->contents = ""; //AAAAT -> trimestre ( T = 1,2,3,4)
        }
        if ($this->contents == "04"){
            $this->contents = ""; //AAAAE -> estación (E = 1, 2, 3, 4, siendo 1 = primavera)
        }
        if ($this->contents == "09"){
            $this->contents = ""; //formato AAAATAAAAT
        }
        if ($this->contents == "10"){
            $this->contents = ""; //AAAAEAAAAE
        }
        else if ($this->contents == "12"){
            $this->contents = ""; //Texto. Para fechas complejas, aproximadas o inciertas, o para fechas antes de la era común (AEC o a.C.)
        }
        else if ($this->contents == "32"){
            $this->contents = ""; //Cadena de texto (H)
        }
        */
        
    }
}

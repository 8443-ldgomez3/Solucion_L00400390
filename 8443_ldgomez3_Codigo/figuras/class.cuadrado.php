<?php
class cuadrado extends figura implements formulas
{
    private $lado_1;
    function __construct($lado_1)
    {
        $this->lado_1 = $lado_1;
    }
    function get_lado_1()
    {
        return $this->lado_1;
    }

    //----------
    function area(){

    }
    function perimetro(){

    }
    public function GetArea(){

    }
    public function GetPerimetro(){

    }
    public function GetTipo(){

    }

}

?>
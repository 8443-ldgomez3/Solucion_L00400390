<?php
class rectangulo extends figura implements formulas
{

    private $lado_1, $lado_2;
    function __construct($lado_1, $lado_2)
    {
        $this->lado_1 = $lado_1;
        $this->lado_2 = $lado_2;
    }
    function get_lado_1()
    {
        return $this->lado_1;
    }
    function get_lado_2()
    {
        return $this->lado_2;
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

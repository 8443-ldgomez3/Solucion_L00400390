<?php
class triangulo extends figura implements formulas
{
	
    private $lado_1, $lado_2, $lado_3;
    function __construct($lado_1, $lado_2, $lado_3)
    {
        $this->lado_1 = $lado_1;
        $this->lado_2 = $lado_2;
        $this->lado_2 = $lado_3;
    }
    function get_lado_1()
    {
        return $this->lado_1;
    }
    function get_lado_2()
    {
        return $this->lado_2;
    }
    function get_lado_3()
    {
        return $this->lado_3;
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


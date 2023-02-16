

var input1 = document.getElementById('lado_1');
var input2 = document.getElementById('lado_2');
var input3 = document.getElementById('lado_3');


function llamar_figura(elemento) {
    tipo = elemento.value;

    if (tipo == "cuadrado") {
        input1.disabled = false;
        input2.disabled = true;
        input3.disabled = true;
    } else {
        if (tipo == "rectangulo") {
            input1.disabled = false;
            input2.disabled = false;
            input3.disabled = true;
        } else {
            if (tipo == "triangulo") {
                input1.disabled = false;
                input2.disabled = false;
                input3.disabled = false;
            }else{
                
                input1.disabled = true;
                input2.disabled = true;
                input3.disabled = true
            }
        }
    }





}

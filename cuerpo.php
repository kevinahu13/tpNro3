<?php


class Datos {
    public $datoUno;
    public $datoDos;
    public $resultado;



  public function __construct($dato1, $dato2)
    {
        $this->datoUno = $dato1;
        $this->datoDos = $dato2;
        
    }
    public function elegirCuenta($valor){
        if ($valor == 0 ) {
            $this->sumar();
        } else if ($valor == 1) {
            $this->resta();
        } else if ($valor == 2){
            $this->multiplicar();
        } else  {
            $this->dividir();
        }
    }

 public function sumar() {
    $this->resultado =  $this->dato1 + $this->dato2;
    return $this->resultado;
}
public function  resta() {
    $this->resultado = $this->dato1 - $this->dato2;
    return $this ->resultado;
}
public function  multiplicar() {
    $this->resultado = $this->dato1 * $this->dato2;
    return $this ->resultado;
}
public function  dividir() {
    $this->resultado = $this->dato1 / $this->dato2;
    return $this ->resultado;
}
}
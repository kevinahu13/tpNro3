<?php


class Datos
{
    public $nroUno;
    public $nroDos;
    public $resultado;



    public function __construct($a, $b)
    {
        $this->nroUno = $a;
        $this->nroDos = $b;
    }
    public function elegirCuenta($valor)
    {
        if ($valor == 0) {
            return $this->sumar();
        } else if ($valor == 1) {
            return $this->resta();
        } else if ($valor == 2) {
            return $this->multiplicar();
        } else if ($valor == 3) {
            return $this->dividir();
        } else {
            return $this->promedio();
        }
    }

    public function sumar()
    {
        $this->resultado =  $this->nroUno + $this->nroDos;
        return $this->resultado;
    }

    public function resta()
    {
        $this->resultado = $this->nroUno - $this->nroDos;
        return $this->resultado;
    }

    public function multiplicar()
    {
        $this->resultado = $this->nroUno * $this->nroDos;
        return $this->resultado;
    }

    public function dividir()
    {
        $this->resultado = $this->nroUno / $this->nroDos;
        return $this->resultado;
    }

    public function promedio()
    {
        $this->resultado = ($this->nroUno + $this->nroDos) / 2;
        return $this->resultado;
    }
}

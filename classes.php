<?php

class Cliente {
    public $nombre;
    public $genero;

    public function __construct($nombre, $genero) {
        $this->nombre = $nombre;
        $this->genero = $genero;
    }
}

class Libro {
    public $titulo;
    public $tipo;
    public $precio;

    public function __construct($titulo, $tipo) {
        $this->titulo = $titulo;
        $this->tipo = $tipo;
        switch ($tipo) {
            case 1:
                $this->precio = 90.00;
                break;
            case 2:
                $this->precio = 100.00;
                break;
            case 3:
                $this->precio = 80.00;
                break;
            case 4:
                $this->precio = 150.00;
                break;
            default:
                $this->precio = 0.00;
        }
    }
}

?>

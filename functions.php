<?php

function calcularDescuento($cantidad, $tipo) {
    if ($cantidad >= 1 && $cantidad <= 2) {
        switch ($tipo) {
            case 1: // Ficción
                return 0.05;
            case 2: // Novelas
                return 0.08;
            case 3: // Cuentos
                return 0.09;
            case 4: // Física Cuántica
                return 0.02;
            default:
                return 0;
        }
    } elseif ($cantidad >= 3 && $cantidad <= 6) {
        switch ($tipo) {
            case 1: // Ficción
                return 0.06;
            case 2: // Novelas
                return 0.16;
            case 3: // Cuentos
                return 0.18;
            case 4: // Física Cuántica
                return 0.02;
            default:
                return 0;
        }
    } elseif ($cantidad > 6) {
        switch ($tipo) {
            case 1: // Ficción
                return 0.08;
            case 2: // Novelas
                return 0.32;
            case 3: // Cuentos
                return 0.36;
            case 4: // Física Cuántica
                return 0.04;
            default:
                return 0;
        }
    } else {
        return 0;
    }
}


function calcularImporteBruto($cantidad, $precio) {
    return $cantidad * $precio;
}


function calcularImporteNeto($importeBruto, $descuento) {
    return $importeBruto * (1 - $descuento);
}

?>

<?php

require_once 'classes.php';
require_once 'functions.php';

$servername = "localhost";
$username = "root";
$password = "";
$database = "libreria";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


function validarDatos($dato) {
  
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nombre = validarDatos($_POST["nombre"]);
    $genero = validarDatos($_POST["genero"]);
    $tituloLibro = validarDatos($_POST["titulo"]);
    $tipoLibro = validarDatos($_POST["tipo"]);
    $cantidadLibros = validarDatos($_POST["cantidad"]);
    
    
    $cliente = new Cliente($nombre, $genero);
    
  
    $libro = new Libro($tituloLibro, $tipoLibro);
    

    $descuento = calcularDescuento($cantidadLibros, $libro->tipo);
    
    
    $importeBruto = calcularImporteBruto($cantidadLibros, $libro->precio);
    

    $importeNeto = calcularImporteNeto($importeBruto, $descuento);
    

    $sql = "INSERT INTO ventas_libros (nombre_cliente, genero_cliente, titulo_libro, tipo_libro, cantidad_libros, importe_bruto, descuento, importe_neto) VALUES ('$nombre', '$genero', '$tituloLibro', '$tipoLibro', '$cantidadLibros', '$importeBruto', '$descuento', '$importeNeto')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Venta registrada correctamente en la base de datos.";
    } else {
        echo "Error al registrar la venta en la base de datos: " . $conn->error;
    }
}

$conn->close();

?>

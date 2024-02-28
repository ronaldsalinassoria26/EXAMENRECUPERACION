<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de lectores</title>
</head>
<body>
    <h2>Registro de lectores</h2>
    <form action="conex.php" method="post">
        <label for="nombre">Nombre del lector:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="genero">Género de lector:</label><br>
        <select id="genero" name="genero" required>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select><br><br>
        
        <label for="titulo">Título del Libro:</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>
        
        <label for="tipo">Tipo de Libro:</label><br>
        <select id="tipo" name="tipo" required>
            <option value="1">Ficción</option>
            <option value="2">Novelas</option>
            <option value="3">Cuentos</option>
            <option value="4">Física Cuántica</option>
        </select><br><br>
        
        <label for="cantidad">Cantidad de Libros:</label><br>
        <input type="number" id="cantidad" name="cantidad" min="1" required><br><br>
        
        <input type="submit" value="Registrar lector">
    </form>
</body>
</html>

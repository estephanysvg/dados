<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
// Función para lanzar un dado y mostrar el resultado en caracteres UTF-8
function lanzarDado() {
    $valoresDado = [
        1 => "&#9856;", 
        2 => "&#9857;", 
        3 => "&#9858;", 
        4 => "&#9859;", 
        5 => "&#9860;", 
        6 => "&#9861;"
    ];
    $resultado = array_rand($valoresDado);
    echo $valoresDado[$resultado];
    return $resultado;
}
//Cambio con git
// Jugador Rojo
$jugadorRojo = [];
echo "<b>Jugador 1:</b>";
$puntuacionRojo = 0;
for ($i = 0; $i < 6; $i++) {
    $valorDado = lanzarDado();
    $jugadorRojo[] = $valorDado;
    $puntuacionRojo += $valorDado;
}
// Elimina el dado con el número más alto y el de menor número
$puntuacionRojo -= max($jugadorRojo);
$puntuacionRojo -= min($jugadorRojo);
echo "<b> $puntuacionRojo puntos</b>";
echo "<br>";
// Jugador Azul
$jugadorAzul = [];
echo "<b>Jugador 2:</b>";
$puntuacionAzul = 0;
for ($i = 0; $i < 6; $i++) {
    $valorDado = lanzarDado();
    $jugadorAzul[] = $valorDado;
    $puntuacionAzul += $valorDado;
}
// Elimina el dado con el número más alto y el de menor número
$puntuacionAzul -= max($jugadorAzul);
$puntuacionAzul -= min($jugadorAzul);
echo "<b> $puntuacionAzul puntos</b>";

// Determinar al ganador
if ($puntuacionRojo > $puntuacionAzul) {
    echo "<p><b>Resultado</b> Ha Ganado el Jugador 1</p>";
} elseif ($puntuacionAzul > $puntuacionRojo) {
    echo "<p><b>Resultado</b> Ha Ganado el Jugador 2</p>";
} else {
    echo "<h2>Empate</h2>";
}
?>
</body>
</html>

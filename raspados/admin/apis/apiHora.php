<?php
function obtenerHoraActual() {
    date_default_timezone_set('America/Mexico_City');
    $hora_actual = date('H:i');
    return $hora_actual;
}


$hora_actual = obtenerHoraActual();

header('Content-Type: application/json');
echo json_encode(['hora_actual' => $hora_actual]);
?>

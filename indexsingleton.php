<?php
include 'singleton.php';
$objeto=basedatos::obtenconexion();
$objeto1=basedatos::obtenconexion();
$objeto2=basedatos::obtenconexion();

writeln('Se conectado a la base de datos exitosamente');
function writeln($line_in) {
    echo $line_in."<br/>";
}
?>

<?php
$nombre = $_GET['nombre'];
$correo = $_GET['email'];
$contraseña = $_GET['pwd'];
$fecha = $_GET['fecha'];
$hora = $_GET['hora'];
$ciudad = $_GET['ciudad'];
$numero = $_GET['numero'];
$color = $_GET['color'];
$mensaje = $_GET['mensaje'];

echo"DATOS INGRESADOS:"."<br>";
echo"nombre: ".$nombre."<br>";
echo"correo: ".$correo."<br>";
echo"contraseña: ".$contraseña."<br>";
echo"fecha: ".$fecha."<br>";
echo"hora: ".$hora."<br>";
echo"ciudad: ".$ciudad."<br>";
echo"numero: ".$numero."<br>";
echo"color: ".$color."<br>";
echo"mensaje: ".$mensaje."<br>";
?>

<style>
    body{
        background-color:rgb(39,39,39);
        font-family: "Arial";
        color: white;
    }
</style>

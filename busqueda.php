<?php //abrimos las etiquetas en php

$busqueda=$_GET['busqueda'];//obtenemos la variable que contiene el valor a buscar
$sql="SELECT * FROM tb_usuarios WHERE documento='$busqueda'"; //Seleccione todos los campos de la tabla usuarios donde documento sea igual a la busqueda.
$conexion=mysqli_connect('localhost','root','','bd_analiza');//Hacemos la conexion a la bese de datos 
$resultado=$conexion->query()
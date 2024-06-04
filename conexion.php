<?php

$conex = mysqli_connect("localhost", "root", "", "formulario_contacto");


if (!$conex) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}
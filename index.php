<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion empleados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $empleado1 = [
        'nombre' => 'Miguel',
        'apellido' =>'Tudares',
        'cedula' => 27849731,
        'departamento' => 'Tecnologico',
        'sueldo' => 25000,
        'lugarTrabajo' => 'URBE'
    ];

    $empleado2 = [
        'nombre' => 'Jose',
        'apellido' =>'Leal',
        'cedula' => 25556455,
        'departamento' => 'Recursos humanos',
        'sueldo' => 16000,
        'lugarTrabajo' => 'URU'
    ];

    $empleado3 = [
        'nombre' => 'Maria',
        'apellido' =>'Franco',
        'cedula' => 9712345,
        'departamento' => 'Administracion',
        'sueldo' => 20000,
        'lugarTrabajo' => 'Centro 99'
    ];
        echo '<h1>Lista de empleados</h1>';
        echo '<h2> Empleado 1</h2>';
        echo 'Nombre: ', $empleado1['nombre'], "<br/>";
        echo 'Apellido: ', $empleado1['apellido'], "<br/>";
        echo 'Cedula: ', $empleado1['cedula'], "<br/>";
        echo 'Departamento de trabajo: ', $empleado1['departamento'], "<br/>";
        echo 'Sueldo: ', $empleado1['sueldo'], "<br/>";
        echo 'Sitio de trabajo: ', $empleado1['lugarTrabajo'], "<br/><br/>";

        echo '<h2> Empleado 2</h2>';
        echo 'Nombre: ', $empleado2['nombre'], "<br/>";
        echo 'Apellido: ', $empleado2['apellido'], "<br/>";
        echo 'Cedula: ', $empleado2['cedula'], "<br/>";
        echo 'Departamento de trabajo: ', $empleado2['departamento'], "<br/>";
        echo 'Sueldo: ', $empleado2['sueldo'], "<br/>";
        echo 'Sitio de trabajo: ', $empleado2['lugarTrabajo'], "<br/><br/>";

        echo '<h2> Empleado 3</h2>';
        echo 'Nombre: ', $empleado3['nombre'], "<br/>";
        echo 'Apellido: ', $empleado3['apellido'], "<br/>";
        echo 'Cedula: ', $empleado3['cedula'], "<br/>";
        echo 'Departamento de trabajo: ', $empleado3['departamento'], "<br/>";
        echo 'Sueldo: ', $empleado3['sueldo'], "<br/>";
        echo 'Sitio de trabajo: ', $empleado3['lugarTrabajo'], "<br/><br/>";
?>


</body>
	
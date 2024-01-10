<?php
    $correo =$_POST['correo'];
    $contraseña =$_POST['contraseña'];
    $ciudad =$_POST['ciudad'];

    $conexion = new mysqli('localhost', 'root', '','curso');
    echo var_dump($conexion);

    $consulta="insert into users(id, email, password, city)values (NULL, '$correo', '$contraseña', '$ciudad')";
    $conexion->query($consulta);

    echo('<p>datosguardados</p>');

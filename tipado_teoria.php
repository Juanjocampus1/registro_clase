<?php

    echo('tipado de datos en php');

    $dato = NULL;
    echo($dato);

    $precision_int = PHP_INT_MAX;
    echo('<br>precision de int '.$precision_int);

    $precio =9.95;
    echo('<p>el precio con decimales es'.$precio.'</p>');
    $precio_int = (int)$precio;
    echo('<p>el precio sin decimales '.$precio_int.'</p>');

    $clientes =[
      'juan' => 1500,
      'marta' => 2000,
      'luis' => 1800
    ];

    $alumno = array(
        'eduardo' => 8.5,
        'ana' => 4.6,
        'andres' => 6.74
    );

    echo('<p>los alumnos son'.var_dump($alumno).'</p>');
    echo('<p>la factura de juan es: '.$clientes['juan'].'</p>');

    unset($clientes['marta']);
    echo('<p>los clientes son'.var_dump($clientes).'</p>');

    $clientes['marcos'] = 500;

    foreach($clientes as $cliente){

        echo('<p>la facturacion del cliente es: '.$cliente.'</p>');

    }
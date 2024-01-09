<?php
    echo('<h2>hola mundo</h2>');

    $nombre = 'juan lopez';
    $unidades = 15;
    $precio = 9.95;
    $descuento = true;

    var_dump($unidades);

    $total = $unidades*$precio;

    if($descuento) {
        $total *= 0.65;
    }
    echo('<h3>el total de compra es: ' .$total. '</h3>');
<?php
    // Recopilar datos del formulario
    $temperaturas = array(
        'Lunes'    => $_POST['lunes'],
        'Martes'   => $_POST['martes'],
        'Miércoles' => $_POST['miercoles'],
        'Jueves'   => $_POST['jueves'],
        'Viernes'  => $_POST['viernes'],
        'Sábado'   => $_POST['sabado'],
        'Domingo'  => $_POST['domingo'],
    );

    // Ordenar temperaturas por día
    arsort($temperaturas);

    // Calcular la media de las temperaturas y redondear
    $media = round(array_sum($temperaturas) / count($temperaturas));

    // Mostrar las temperaturas y la media
    echo '<h3>Temperaturas:</h3>';
    echo '<ul>';
    foreach ($temperaturas as $dia => $temperatura) {
        echo "<li>$dia: $temperatura °C</li>";
    }
    echo '</ul>';

    echo "<p>Media de temperaturas: $media °C</p>";

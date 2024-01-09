<?php
    echo ('respuestas');

    $correo =$_POST['correo'];
    $producto =$_POST['producto'];
    $unidades =$_POST['unidades'];

    echo ('<p>tu correo es'.$correo.'</p> <br>');
    echo ('<p>tu producto es'.$producto.'</p> <br>');
    echo ('<p>tus unidades son'.$unidades.'</p>');

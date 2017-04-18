<?php

function cargarAlumnos($ruta) {
    $dirs = scandir($ruta);

    $alumnos = array();

    foreach($dirs as $dir) {
        if($dir == "." || $dir == "..") continue;

        $alumnos[] = $dir;
    }

    return $alumnos;
}

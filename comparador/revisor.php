<?php

if(file_exists(".local")) {
    define("BASE_URL",  "http://localhost/apr-01-2017/comparador");
} else {
    define("BASE_URL", "http://apr-01-2017.herokuapp.com/comparador");
}


function myUrlEncode($string) {
    $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
    $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
    return str_replace($entities, $replacements, urlencode($string));
}

function recuperar($alumno, $a, $b, $esperado, $folder = "alumnos") {
    $getdata = http_build_query(
        array(
            'a' => $a,
            'b' => $b
        )
    );
    
    $opts = array('http' => array( 'method'  => 'GET' ) );

    $context  = stream_context_create($opts);


    $url = BASE_URL . "/" . $folder . "/" . ($alumno) . "/comparador.php?" ;

    $pagina = file_get_contents($url.$getdata, false, $context);

    $doc = new DOMDocument();
    try {
        $doc->loadHTML($pagina);
    } catch(Exception $e) {
        return "Html mal formado";
    }
    

    $span = $doc->getElementById("res");

    if(!$span) {
        return "No hay elemento 'res'";
    }

    try {
        $contenido = $span->textContent;
    } catch(Exception $e) {
        return "No hay elemento 'res'";
    }

    if($contenido == $esperado) {
        return "Aprobado";
    } else {
        return "Error";
    }
}


function alumnoCumple($alumno) {

    if(!file_exists("alumnos/".$alumno . "/comparador.php") ) {
        return "Archivo no existe";
    }

    $resultados = array();
    $resultados[] = recuperar($alumno, "hola", "hola", "ok");
    $resultados[] = recuperar($alumno, "h o l a", "hola", "ok");
    $resultados[] = recuperar($alumno, "hola", "h o l a", "ok");
    $resultados[] = recuperar($alumno, "chao", "c h a o", "No ok");
    $resultados[] = recuperar($alumno, "c h a o", "chao", "No ok");
    
    return $resultados;
}
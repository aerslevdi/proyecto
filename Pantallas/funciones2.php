<?php



function validar($datos){
    $errores = [];
    $nombre = trim($datos['name']);
    $email = trim($datos['email']);
    $pais = $datos['nameuser'];
    $cuit = trim('cuit');
    $puesto = trim('puesto');
    if ($nombre == '') {
        $errores['name'] = 'Por favor completa tu nombre';
    }
    if ($email == '') {
        $errores['email'] = 'Por favor completa tu email';
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = 'Por favor completa tu email, con un formato valido';
    }
    if ($cuit  == '' ) {
        $errores['cuit'] = 'Por favor completa tu cuit';
    }elseif ($puesto== '') {
        $errores['puesto'] = 'Por Favor completa puesto';
    }
    return $errores;
}

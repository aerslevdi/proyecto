<?php
function crear($usu){
$usu=json_encode($usu);

file_put_contents('../datos/dato.json',  $usu .PHP_EOL, FILE_APPEND);
}

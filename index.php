<?php

// solo llamar a la funcion
include_once 'apipeliculas.php';
$api = new ApiPeliculas();
$api->getAll();

?>
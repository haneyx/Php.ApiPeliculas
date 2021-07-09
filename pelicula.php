<?php
include_once 'db.php';

class Pelicula extends DB{
    function getPeliculas(){
        $q = $this->connect()->query('SELECT * FROM pelicula');
        return $q;
    }
}
?>
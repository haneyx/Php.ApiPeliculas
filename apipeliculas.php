<?php

include_once 'pelicula.php';

// no importa query a la base de datos
// solo se que necesito un resultado PDO (Php Data Objects)
// que contenga arreglos de objectos
// JSON JavaScript Object Notation
// http://json.parser.online.fr/

class ApiPeliculas{
    function getAll(){
        $pelicula = new Pelicula();
        $peliculas = array();
        $peliculas["items"]=array();

        $res = $pelicula->getPeliculas();

        if($res->rowCount()){
            while($row=$res->fetch(PDO::FETCH_ASSOC)){
                $itm = array(
                    'id'=>$row['id'],
                    'nombre'=>$row['nombre'],
                    'anio'=>$row['anio'],
                );
                array_push($peliculas['items'],$itm);
            }
            echo json_encode($peliculas);
        }else{
            echo json_encode(array('mensaje'=>'No hay elementos'));
        }
    }
}

?>
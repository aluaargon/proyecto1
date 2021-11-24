<?php
session_start();

require_once "./entity/ImagenGaleria.php";
require_once "./database/Connection.php";
require_once "./database/QueryBuilder.php";

$config = require_once 'app/config.php';
App::bind("config", $config);
App::bind("connection", Connection::make($config['database']));
    
try {
    $imagenes = $queryBuilder->findAll('imagenes', 'imagenGaleria');
    foreach ($imagenes as $imagen) {
        echo "id: " . $imagen->getId() . "<br>";
        echo "Imagen: " . $imagen->getUrlGallery() . "<br>";
        echo "Descripcion: " . $imagen->getDescription() . "<br>"; 
    }
} catch (QueryException $qe) {
    die($qe->getMessage());
    
}
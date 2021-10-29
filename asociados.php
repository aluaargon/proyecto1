<?php
    $title = "Galeria";
    require_once "./utils/utils.php";
    require_once "./entity/Asociado.php";
    require_once "./utils/File.php";
    require_once "./exceptions/FileException.php";
    require_once "./utils/SimpleImage.php";

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> fd20d845d4ea088e727501ae674099528bc7c2f0
    $info = $nombre = $descripcion = $urlImagen = "";
    $nombreErr = $imagenErr = $hayErrores = false;
    $errores = [];
    if ("POST" === $_SERVER["REQUEST_METHOD"]) {
<<<<<<< HEAD
        try {
=======
        try { 
=======
    
    $info = $nombre = $logo = $description = "";
    $imagenErr = $nombreError = $hayErrores = false;
    $errores = [];
    if ("POST" === $_SERVER["REQUEST_METHOD"]) {
        try {
>>>>>>> 725605a1e4c72898394f70c6a70db7311c3dd1b7
>>>>>>> fd20d845d4ea088e727501ae674099528bc7c2f0
            
                if (empty($_POST)) {
                throw new FileException("Se ha producido un error al procesar el formulario");
                }
                $imageFile = new File("imagen", array("image/jpeg", "image/jpg", "image/png"), (2*1024*1024));
<<<<<<< HEAD

                $imageFile->saveUploadedFile(Asociado::RUTA_IMAGENES_ASOCIADO);
=======
<<<<<<< HEAD

                $imageFile->saveUploadedFile(Asociado::RUTA_IMAGENES_ASOCIADO);
=======
                $imageFile->saveUploadedFile(Asociado::RUTA_IMAGENES_LOGO);
>>>>>>> 725605a1e4c72898394f70c6a70db7311c3dd1b7
>>>>>>> fd20d845d4ea088e727501ae674099528bc7c2f0
                try {

                    // Create a new SimpleImage object
                    $simpleImage = new \claviska\SimpleImage();
                    $simpleImage
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> fd20d845d4ea088e727501ae674099528bc7c2f0
                    ->fromFile(Asociado::RUTA_IMAGENES_ASOCIADO . $imageFile->getFileName())
                    ->resize(50, 50)
                    ->toFile(Asociado::RUTA_IMAGENES_ASOCIADO . $imageFile->getFileName());

<<<<<<< HEAD
=======
=======
                    ->fromFile(Asociado::RUTA_IMAGENES_LOGO . $imageFile->getFileName())
                    ->resize(50, 50)
                    ->toFile(Asociado::RUTA_IMAGENES_LOGO. $imageFile->getFileName());
                    
>>>>>>> 725605a1e4c72898394f70c6a70db7311c3dd1b7
>>>>>>> fd20d845d4ea088e727501ae674099528bc7c2f0
                }catch(Exception $err) {
                    $errores[]= $err->getMessage();
                    $imagenErr = true;
                }
        } catch (FileException $fe) {
            $errores[] = $fe->getMessage();
            $imagenErr = true;
        }
        $nombre = sanitizeInput(($_POST["nombre"] ?? ""));
        if (empty($nombre)) {
            $errores[] = "El nombre es obligatorio";
            $nombreError = true;
        }
        if (0 == count($errores)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> fd20d845d4ea088e727501ae674099528bc7c2f0
            $descripcion = sanitizeInput(($_POST["descripcion"] ?? ""));
            $info = "Imagen enviada correctamente:";
            $urlImagen = Asociado::RUTA_IMAGENES_ASOCIADO. $imageFile->getFileName();
            
            $descripcion = "";
<<<<<<< HEAD
=======
=======
            $description = sanitizeInput(($_POST["description"] ?? ""));
            $info = "Asociado añadido correctamente:";
            $logo = $imageFile->getFileName();
            $asociado = new Asociado($nombre, $logo, $description);
            
            $description = "";
>>>>>>> 725605a1e4c72898394f70c6a70db7311c3dd1b7
>>>>>>> fd20d845d4ea088e727501ae674099528bc7c2f0
        } else {
            $info = "Datos erróneos";
        }
        
       
    } 

<<<<<<< HEAD
    include("./views/asociados.view.php");
=======
<<<<<<< HEAD
    include("./views/asociados.view.php");
=======
    include("./views/galeria.view.php");
>>>>>>> 725605a1e4c72898394f70c6a70db7311c3dd1b7
>>>>>>> fd20d845d4ea088e727501ae674099528bc7c2f0


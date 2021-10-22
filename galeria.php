<?php
    $title = "Contact";
    require_once "./utils/utils.php";
    require_once "./entity/ImagenGaleria.php";
    require_once "./utils/File.php";
    require_once "./exceptions/FileExexption.php";

    $info = $description = $urlImagen = "";
    $descriptionError = $imagenErr = $hayErrores = false;
    $errores = [];
    if ("POST" === $_SERVER["REQUEST_METHOD"]) {
        try {
            
                if (empty($_POST)) {
                throw new FileException("Se ha producido un error al procesar el formulario");
                }
                $imageFile = new File("imagen", array("image/jpeg", "image/jpg", "image/png"), (2*1024*1024));
                $imageFile->saveUploadedFile(ImagenGaleria::RUTA_IMAGENES_GALLERY);
                
        } catch (FileException $fe) {
            $errores[] = $fe->getMessage();
            $imagenErr = true;
        }

        $description = sanitazeInput(($_POST["description"] ?? ""));
        if (empty($description)) {
            $errores[] = "La descripción es obligatoria";
            $descriptionError = true;
        }
        
        if (0 == count($errores)) {
            $description = sanitizeInput(($_POST["description"] ?? ""));
            $info = "Imagen enviad correctamente:";
            $urlImagen = ImagenGaleria::RUTA_IMAGENES_GALLERY . $imageFile->getFileName();
            
            $description = "";
        } else {
            $info = "Datos erróneos";
        }
        
       
    } 

    include("./views/galeria.view.php");


<?php
    function esOpcionMenuActiva($option){
        if(strpos($_SERVER["REQUEST_URI"], $option) !== false){
            return true;
        } else {
            return false;
        }
    }
    function existeOpcionMenuActivaEnArray($options) {
       
      foreach ($options as $opcion) {
            if (esOpcionMenuActiva($opcion)) {
                return true;
            }
            
        }
        return false;
    }

    function sanitizeInput(string $data) : string
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function getAsociados(array $asociados) : array
    {
        shuffle($asociados);
        return array_slice($asociados, 0, 3);
        
    }

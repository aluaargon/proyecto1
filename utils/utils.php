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
<?php 
class Asociado 
{

    const RUTA_IMAGENES_PORTFOLIO = 'images/logo/';

    /**
     * @var string
     */
    private $nombre;

    /**
     * Guarda el nombre de la imagen del logo
     * @var string
     */
    private $logo;

    /**
     * @var string
     */
    private $descripcion;

    public function __construct(String $nombre, String $logo, String $descripcion){
        $this->nombre = $nombre;
        $this->log = $logo;
        $this->descripcion = $descripcion;
    }


    /**
     * Get the value of nombre
     *
     * @return  string
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param  string  $nombre
     *
     * @return  self
     */ 
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get guarda el nombre de la imagen del logo
     *
     * @return  string
     */ 
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set guarda el nombre de la imagen del logo
     *
     * @param  string  $logo  Guarda el nombre de la imagen del logo
     *
     * @return  self
     */ 
    public function setLogo(string $logo)
    {
        $this->logo = self::RUTA_IMAGENES_PORTFOLIO . $logo;

        return $this;
    }

    /**
     * Get the value of descripcion
     *
     * @return  string
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @param  string  $descripcion
     *
     * @return  self
     */ 
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }
}
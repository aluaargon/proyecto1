<?php
class Asociado
{
    const RUTA_IMAGENES_ASOCIADO = 'images/index/';

    /**
     * En esta variable guardaremos el nombre del 
     *
     * @var string
     */
    private $nombre;

    /**
     * En esta variable se guarda el nombre del logo del 
     *
     * @var string
     */
    private $logo;
    
    /**
     * En esta variable se guarda el texto que se usara como texto alternativo
     * en el atributo alt y el atributo title del html
     *
     * @var string
     */
    private $descripcion;

    public function __construct(String $nombre, String $logo, String $descripcion)
    {
        $this->nombre = $nombre;
        $this->logo = $logo;
        $this->descripcion = $descripcion;
    }

    /**
     * Get en esta variable guardaremos el nombre del 
     *
     * @return  string
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set en esta variable guardaremos el nombre del 
     *
     * @param  string  $nombre  En esta variable guardaremos el nombre del 
     *
     * @return  self
     */ 
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get en esta variable se guarda el nombre del logo del 
     *
     * @return  string
     */ 
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set en esta variable se guarda el nombre del logo del 
     *
     * @param  string  $logo  En esta variable se guarda el nombre del logo del 
     *
     * @return  self
     */ 
    public function setLogo(string $logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get en el atributo alt y el atributo title del html
     *
     * @return  string
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    /**
     * Set en el atributo alt y el atributo title del html
     *
     * @param  string  $descripcion  en el atributo alt y el atributo title del html
     *
     * @return  self
     */ 
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getUrlLogoAsociado() : string
    {
        return self::RUTA_IMAGENES_ASOCIADO . $this->getLogo();
    }
   
}
<?php



class vistaentra {

    
    public $base;
    public $slider;
    public $textoregistro;
    public $servicios;







    public function __construct() {
        
        $this->base = file_get_contents('../plantilla/base.html');
        $this->slider = file_get_contents('../plantilla/slider.html');
        $this->textoregistro = file_get_contents('../plantilla/textoregistro.html');
        
        $this->servicios = file_get_contents('../plantilla/servicios.html'); 
    }


    

    public function refactory_perfil($datos) {



    }
    public function refactory_descripcion(){


        $this->base = str_ireplace('{contenido}', $this->slider, $this->base);
        $this->base = str_ireplace('{contenido1}', $this->textoregistro, $this->base);
         $this->base = str_ireplace('{contenido2}', $this->servicios, $this->base);

        return $this->base;

    }

}

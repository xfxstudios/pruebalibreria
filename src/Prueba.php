<?php
namespace emcpublicidad\miclase;

class Prueba{

    private $name;
    private $apellido;
    private $bienvenida;
    private $uri;

    public function setName($name){
        $this->name = $name;
        return $this;
    }

    public function setApellido($x){
        $this->apellido = $x;
        return $this;
    }

    public function setBienvenida($x=null){
        $this->bienvenida = ($x==null) ? "Bienvenido " : $x;
        return $this;
    }

    public function setUri($x){
        $this->uri = $x;
        return $this;
    }

    public function getSaludo(){
        return $this->uri.'/sendMail';
    }

}


?>
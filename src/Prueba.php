<?php
namespace xfxstudios\Miclase;

class Prueba{

    private $name;
    private $apellido;
    private $bienvenida;

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

    public function getSaludo(){
        return $this->bienvenida.' '.$this->name.' '.$this->apellido;
    }

}


?>
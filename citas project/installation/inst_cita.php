<?php
class Cita{
    public $idcita;
    public $ciudad;
    public $direccion;
    public $f_inst;
    public $h_inst;


    // Método constructor para inicializar los atributos.
    public function __construct(){
        $this->idcita = "";
        $this-> ciudad= "";
        $this-> direccion = "";
        $this->f_inst = "";
        $this->h_inst = "";
    }
    // Función para crear cliente.
    public function crearCita($idcita, $ciudad, $direccion, $f_inst, $h_inst){
        $this->idcita = $idcita;
        $this->ciudad = $ciudad;
        $this->direccion = $direccion;
        $this->f_inst = $f_inst;
        $this->h_inst = $h_inst;


        return [$this->f_inst, $this->h_inst];
    }
    // Función para consultar datos de la cita.
    public function consultarDatos($idcita){
        if($this->validarDatos($idcita)){
            echo "<br>ID de la cita: ".$this->idcita;
            echo "<br>Ciudad: ".$this->ciudad;
            echo "<br>Dirección de la cita: ".$this->direccion;    
            echo "<br>Fecha de instalación: ".$this->f_inst;
            echo "<br>Hora de la visita: ".$this->h_inst; 
        }
    }
    // Función para validar datos.
    public function validarDatos($idcita){
            if($idcita == $this->$idcita){
                return true;
            }else{
                echo "<br>Datos incorrectos!";
                return false;
            }
    }
    // Función para actualizar datos.
    function ActualizarDatos($h_inst, $f_inst, $direccion, $ciudad, $idcita){
        if($this->validarDatos($idcita)){
            $this->$ciudad = $ciudad;
            $this->$direccion = $direccion;
            $this->$f_inst = $f_inst;
            $this->$h_inst = $h_inst;
            echo "<br>Datos de la cita actualizados correctamente";
            return [$f_inst, $h_inst];
        }else{
            echo "<br> la cita ingresada es incorrecta";
        }
    }  
}
$appo = new Cita();

?>
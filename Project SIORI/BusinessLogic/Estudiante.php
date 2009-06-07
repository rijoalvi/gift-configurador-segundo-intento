<?php
include("./DataTier/ConsultaEstudiante.php");
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estudiante
 *
 * @author luiscarlosch@gmail.com
 */
class Estudiante {
    //put your code here
    public $carne;
    public $nombre;
    public $apellido1;
    public $apellido2;
    public $sexo;
    public $nacionalidad;
    public $telefono;
    public $provincia;
    public $canton;
    public $consultaEstudiante;
    public function Estudiante(){
        $this->consultaEstudiante= new ConsultaEstudiante();
    }

    public function set($carne){
        $resultSet=$this->consultaEstudiante->getDatosPersonalesPorCarne($carne);
        //if($resultSet!=null){
        //echo $this->carne=mysql_result($resultSet,"nombre");;
            $this->carne=mysql_result($resultSet,0,"carne");
            $this->nombre=mysql_result($resultSet,0,"nombre");
            $this->apellido1=mysql_result($resultSet,0,"apellido1");
            $this->apellido2=mysql_result($resultSet,0,"apellido2");
            $this->sexo=mysql_result($resultSet,0,"sexo");
            $this->nacionalidad=mysql_result($resultSet,0,"nacionalidad");
            $this->telefono=mysql_result($resultSet,0,"telefono");
            $this->provincia=mysql_result($resultSet,0,"provincia");
            $this->canton=mysql_result($resultSet,0,"canton");
        //}
    }
}
?>

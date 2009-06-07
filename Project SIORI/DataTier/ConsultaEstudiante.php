<?php
include("ControladorBD.php");
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConsultaEstudiante
 *
 * @author luiscarlosch@gmail.com
 */
class ConsultaEstudiante {
    private $controladorBD;
    public function ConsultaEstudiante(){
        $this->controladorBD = new ControladorBD();
    }
    public function getDatosPersonalesPorCarne($carne){
        $resultSet=$this->controladorBD->hacerConsulta("select nombre, carne, apellido1, apellido2, sexo, nacionalidad ,telefono, provincia, canton from Estudiante where carne='a61521';");
        return $resultSet;
    }
}
?>

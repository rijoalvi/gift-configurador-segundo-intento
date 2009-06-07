<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControladorBD
 *
 * @author
 */
class ControladorBD {
    private $user;
    private $password;
    private $database;   
    private $result;

    public function ControladorBD(){
        $this->user="lucachac_user";
        $this->password="todosepuede";
        $this->database="lucachac_db";
        mysql_connect("lucachaco.bluechiphosting.com",$this->user,$this->password);
        @mysql_select_db($this->database) or die( "Unable to select database");
    }
    public function hacerConsulta($query){
        //$query="select Carne, nombre, Apellido1, Apellido2, Sexo, Nacionalidad, Telefono, Provincia, Canton, PromedioAdmision from Estudiante where Carne='".$carne."';";
        $this->result=mysql_query($query);
        return $this->result;
    }
}
?>

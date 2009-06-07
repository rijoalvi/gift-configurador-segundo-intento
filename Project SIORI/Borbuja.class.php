<?php
class Borbuja{
	private $margenArriba=4; 
	private $margenAbajo=2;
	private $margenDerecho=2;
	private $margenIzquierdo=5;
	private $ancho=25;
	private $alineacion="left";
	public $borbujaCodigo;
	public $elementos;

	
	
	public function setElementos($elementos){
		$this->elementos=$elementos;

	}
	
	
	public function Borbuja(){
		$this->borbujaCodigo="<div style=\"margin: ".$this->margenArriba."em ".$this->margenAbajo."em ".$this->margenDerecho."em ".$this->margenIzquierdo."em; float: ".$this->alineacion."; width: ".$this->ancho."em;\"> 
		<div class=\"pmeta_bubble_bg\"> 
		<div class=\"round4\"></div> 
		<div class=\"round2\"></div> 
		<div class=\"round1\"></div> 
		<div class=\"box-inner\"> </div> 
 <table class=\"pmeta\" cellpadding=\"5\">
 
 <tbody>";
 for($i=0; $i<sizeof($this->elementos);$i++){
 $this->borbujaCodigo.="<tr>
 <th><span style=\"white-space: nowrap;\">Code license:</span></th>
 <td>
 <a href=\"http://www.gnu.org/licenses/old-licenses/gpl-2.0.html\" rel=\"nofollow\">GNU General Public License v2</a>
 </td>
 </tr>";
}
 $this->borbujaCodigo.="</tbody></table>
		<div class=\"box-inner\"> </div> 
		<div class=\"round1\"></div> 
		<div class=\"round2\"></div> 
		<div class=\"round4\"></div> 
		</div>
		</div>";
	}
	/*public function setBorbuja(){// con link
		$this->borbujaCodigo="<div style=\"margin: ".$this->margenArriba."em ".$this->margenDerecho."em ".$this->margenAbajo."em ".$this->margenIzquierdo."em; float: ".$this->alineacion."; width: ".$this->ancho."em;\"> 
		<div class=\"pmeta_bubble_bg\"> 
		<div class=\"round4\"></div> 
		<div class=\"round2\"></div> 
		<div class=\"round1\"></div> 
		
		<table class=\"pmeta\" cellpadding=\"5\">
 
		<tbody>";
		 for($i=0; $i<sizeof($this->elementos);$i++){
			 $this->borbujaCodigo.="<tr>
			 <th><span style=\"white-space: nowrap;\">".$this->elementos[$i][0]."</span></th>
			 <td>
			 <a href=\"".$this->elementos[$i][2]."\" rel=\"nofollow\">".$this->elementos[$i][1]."</a>
			 </td>
			 </tr>";
		}
			$this->borbujaCodigo.="</tbody></table>
			
			<div class=\"round1\"></div> 
			<div class=\"round2\"></div> 
			<div class=\"round4\"></div> 
			</div>
			</div>";
	}*/
	public function setBorbuja(){//mismo al de arriba pero si link
		$this->borbujaCodigo="<div style=\"margin: ".$this->margenArriba."em ".$this->margenDerecho."em ".$this->margenAbajo."em ".$this->margenIzquierdo."em; float: ".$this->alineacion."; width: ".$this->ancho."em;\"> 
		<div class=\"pmeta_bubble_bg\"> 
		<div class=\"round4\"></div> 
		<div class=\"round2\"></div> 
		<div class=\"round1\"></div> 
		
		<table class=\"pmeta\" cellpadding=\"5\">
 
		<tbody>";
		 for($i=0; $i<sizeof($this->elementos);$i++){
			 $this->borbujaCodigo.="<tr>
			 <th><span style=\"white-space: nowrap;\">".$this->elementos[$i][0]."</span></th>
			 <td>
			 ".$this->elementos[$i][1]."
			 </td>
			 </tr>";
		}
			$this->borbujaCodigo.="</tbody></table>
			
			<div class=\"round1\"></div> 
			<div class=\"round2\"></div> 
			<div class=\"round4\"></div> 
			</div>
			</div>";
	}	
	public function setBorbujaConfiguracion($margenArriba,$margenAbajo,$margenDerecho,$margenIzquierdo,$alineacion,$ancho){
		$this->margenArriba=$margenArriba; 
		$this->margenDerecho=$margenDerecho;
		$this->margenAbajo=$margenAbajo;
		$this->margenIzquierdo=$margenIzquierdo;
		$this->ancho=$ancho;
		$this->alineacion=$alineacion;
	}
}
?>
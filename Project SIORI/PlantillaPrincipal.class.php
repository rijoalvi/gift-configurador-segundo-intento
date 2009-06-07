<?php
class PlantillaPrincipal{
	
	private $margenArriba=4; 

	public function PlantillaPrincipal(){
	}
	public function getCodigoInformacionLogin($nombreUsuarioDeLaSesion,$nombreUnidadOperativaActiva){

		 
		$codigoInformacionLogin='
		<div id="gaia">
		<span>
		<b>'.$nombreUsuarioDeLaSesion.'</b>
		| <b>'.$nombreUnidadOperativaActiva.'</b>
		| <a href="construccion.php">Ayuda</a>
		| <a href="construccion.php">Salir</a>
		</span>
		</div>';
		return $codigoInformacionLogin;
 	}
	public function getCodigoTab($valorTab,$estado){
		$codigoTab='<th onclick="if (!cancelBubble) _go(\'main.php?tab='.$valorTab.'\');">
		<div class="tab '.$estado.'">
		<div class="round4"></div>
		<div class="round2"></div>
		<div class="round1"></div>
		<div class="box-inner">
		<a onclick="cancelBubble=true;" href="main.php?tab='.$valorTab.'">'.$valorTab.'</a>
		</div>
		</div>
		</th><td>&nbsp;&nbsp;</td>';
		return $codigoTab;
	 }
	 public function getCodigoTabValidado($tab,$tabARevisar){//si es seleccionado o no
		if ($tab==$tabARevisar){
			return $this->getCodigoTab($tabARevisar,"active");
		}
		else{
			return $this->getCodigoTab($tabARevisar,"inactive");
		}
	}
	public function getCodigoSubTab($valorSubTab,$class,$tabSeleccionada){
	$valorSubTab=' <span class="'.$class.'">
	<a href="main.php?tab='.$tabSeleccionada.'&subTab='.$valorSubTab.'">'.$valorSubTab.'</a>
	</span>';
	return $valorSubTab;
	}
	public function getCodigoSubTabValidado($subTabSeleccionado,$subTabARevisar,$tabSeleccionado){//si es seleccionado o no
		if($subTabSeleccionado==$subTabARevisar){
			$codigoSubTabValidado=$this->getCodigoSubTab($subTabARevisar,"inst1",$tabSeleccionado);
		}else{
			$codigoSubTabValidado=$this->getCodigoSubTab($subTabARevisar,"inst2",$tabSeleccionado);
		}
		return $codigoSubTabValidado;
	}
	public function getCodigoBuscar(){
		$codigoBuscar='<form action="construccion.php" method="get" style="display: inline;" onsubmit="document.getElementById(\'codesearchq\').value = document.getElementById(\'origq\').value + \' package:http://proyecto-inge1\\.googlecode\\.com\'">
		 <input name="q0" id="codesearchq" value="" type="hidden">
		 <input maxlength="2048" size="35" id="origq" name="origq" value="" title="Google Code Search" style="font-size: 92%;">&nbsp;<input value="Buscar" name="btnG" style="font-size: 92%;" type="submit">
		 </form>';
		 return $codigoBuscar;
	}
}
?>
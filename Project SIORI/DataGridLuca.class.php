<?php
class DataGridLuca{
	
	private $margenArriba=4; 
	private $margenDerecho=2;
	private $margenAbajo=2;
	private $margenIzquierdo=5;
	private $alineacion="left";
	private $ancho=50;
	public $elementos;
	public $datos;
	public $variables;
	public $listaCodigosConsultas;
	
	public $codigoDataGridLuca;
	
	public function setListaCodigosConsultas($listaCodigosConsultas){
		$this->listaCodigosConsultas=$listaCodigosConsultas;
	}
	public function DataGridLuca(){
		$this->variables='tab=Consultas&subTab=Inicio&seleccionado=true&cita=true';
	}
	public function setVariables($nuevasVariables){
		$this->variables =$nuevasVariables;
	}
	public function setElementos($elementos){
		$this->elementos=$elementos;

	}
	
	public function setDatos($datos){
		$this->datos=$datos;
	}
	
	public function setDataGridLucaConfiguracion($margenArriba,$margenAbajo,$margenDerecho,$margenIzquierdo,$alineacion,$ancho){
		$this->margenArriba=$margenArriba; 
		$this->margenDerecho=$margenDerecho;
		$this->margenAbajo=$margenAbajo;
		$this->margenIzquierdo=$margenIzquierdo;
		$this->alineacion=$alineacion;
		$this->ancho=$ancho;
	}
	public function getCodigoCeldaLink($numeroColumna,$valor){
		$getCodigoCeldaLink =' <td class="vt id col_'.$numeroColumna.'">
		<a href="http://proyecto-inge1.googlecode.com/files/Ingreso%20Datos%20a%20la%20BD.txt" style="white-space: nowrap;">
		'.$valor.'
		</a>
		</td>';
		return $getCodigoCeldaLink;
	}
	public function getCodigoCelda($numeroColumna,$valor,$numeroTupla){
		$codigoCelda ='<td class="vt col_'.$numeroColumna.'" onclick="if (!cancelBubble) _go(\'main.php?'.$this->variables.'&codigoConsulta='.$this->listaCodigosConsultas[$numeroTupla].'\')" style="width: 85%"><a onclick="cancelBubble=true;" href="main.php?'.$this->variables.'&codigoConsulta='.$this->listaCodigosConsultas[$numeroTupla].'">
		'.$valor.'
		</a>
		</td>';
		return $codigoCelda;
	}
	public function getCodigoColumnaTitulo($numeroColumna,$valor){
		$codigoColumnaTitulo ='<th class="col_'.$numeroColumna.'" onclick="_showBelow(\'pop_'.$numeroColumna.'\',this)" nowrap="nowrap" style="height: 22px"><a href="#" style="text-decoration: none;">'.$valor.'</a></th>';
		return $codigoColumnaTitulo;
	}
	public function getCodigoPieDeTabla(){//estas tres lineas son para el pie de la tabla
		//$codigoPieDeTabla='<div class="pagination"> 1 - 5 de 5 </div>&nbsp;&nbsp;<div style="margin-top: 1px; font-size: small;"> </div>';
		$codigoPieDeTabla='<div class="pagination"> </div>&nbsp;&nbsp;<div style="margin-top: 1px; font-size: small;"> </div>';//
		
		return $codigoPieDeTabla;
	}

	public function getCodigoTodasTuplasYColumnas(){
		$codigoTodasTuplasYColumnas=' <table class="results" id="resultstable" border="0" cellpadding="2" cellspacing="0" width="100%">
		<tbody>
		<tr id="headingrow"><th style="border-left: 0pt none; height: 22px;"> &nbsp; </th>
		
		
		
		';
		for($i=0; $i<sizeof($this->elementos); $i++){
			$codigoTodasTuplasYColumnas.=$this->getCodigoColumnaTitulo($i,$this->elementos[$i][0]);
		}
		/*
		$codigoTodasTuplasYColumnas.=$this->getCodigoColumnaTitulo(1,"Motivo");
		$codigoTodasTuplasYColumnas.=$this->getCodigoColumnaTitulo(2,"Profesional");
		$codigoTodasTuplasYColumnas.=$this->getCodigoColumnaTitulo(3,"Citas");
		$codigoTodasTuplasYColumnas.=$this->getCodigoColumnaTitulo(4,"Estado");*/
		
		/*'.$this->getCodigoColumnaTitulo(1,"Motivo").'
		'.$this->getCodigoColumnaTitulo(2,"Profesional").'
		'.$this->getCodigoColumnaTitulo(3,"Citas").'
		'.$this->getCodigoColumnaTitulo(4,"Estado").'*/
		
		
		$codigoTodasTuplasYColumnas.='<th onclick="return _showBelow(\'pop__dot\',this)" style="width: 3ex; height: 22px;"><a href="#columnprefs" style="background: transparent none repeat scroll 0% 0%; text-decoration: none; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial; margin-right: 0pt; padding-right: 0pt;"> ...</a></th>
		</tr>';
		 

		for($i=0;$i<sizeof($this->datos[0]);$i++){
			$codigoTodasTuplasYColumnas.=$this->getCodigoTuplaNueva($i);
		}
		$codigoTodasTuplasYColumnas.='</tbody>';
		$codigoTodasTuplasYColumnas.='</table>';
		
		$codigoTodasTuplasYColumnas.=$this->getCodigoPieDeTabla();
		return $codigoTodasTuplasYColumnas;
	}
	public function getCodigoTuplaNueva($numeroTupla){

		
			$codigoTuplaNueva='<tr class="" onmouseover="_rowRolloverOn(this)" onmouseout="_rowRolloverOff(this); cancelBubble=false">
			<td class="vt" style="padding: 2px 2px 0pt;" nowrap="nowrap">
			</td>';
			
			for($i=0; $i<sizeof($this->datos); $i++){
				//$codigoTuplaNueva.=$this->getCodigoCeldaLink(0,"valor1");
				$codigoTuplaNueva.=$this->getCodigoCelda($i,$this->datos[$i][$numeroTupla],$numeroTupla);
			}
		/*	$codigoTuplaNueva.=$this->getCodigoCelda(1,"valor2");
			$codigoTuplaNueva.=$this->getCodigoCelda(2,"valor3");
			$codigoTuplaNueva.=$this->getCodigoCelda(3,"valor4");
			$codigoTuplaNueva.=$this->getCodigoCelda(4,"valor5");*/
			
			
			$codigoTuplaNueva.='<td>&nbsp;</td></tr>';
			return $codigoTuplaNueva;
	}

	public function getCodigoEventosColumnas($numeroColumna){
		$codigoEventosColumnas=' <div id="pop_'.$numeroColumna.'" class="popup">
		<table border="0" cellpadding="0" cellspacing="0">
		<tbody><tr onmouseover="_rowRolloverOn(this)" onmouseout="_rowRolloverOff(this)" onclick="_closeAllPopups(this);_sortUp(\'filename\')"><td>
		Ascendente</td></tr>
		<tr onmouseover="_rowRolloverOn(this)" onmouseout="_rowRolloverOff(this)" onclick="_closeAllPopups(this);_sortDown(\'filename\')"><td>
		Descendente</td></tr>
		<tr onmouseover="_rowRolloverOn(this)" onmouseout="_rowRolloverOff(this)" onclick="_closeAllPopups(this);_toggleColumn(\'hide_col_'.$numeroColumna.'\')"><td>
		Ocultar</td></tr>
		</tbody></table>
		</div>';
		return $codigoEventosColumnas;
	}
	public function getCodigoEventosFiltros($numeroColumna){
		$codigoEventosColumnas=' <div id="filter_'.$numeroColumna.'" class="popup subpopup">
		<table border="0" cellpadding="0" cellspacing="0">
		</table>
		</div>';
		return $codigoEventosColumnas;
	}
	public function getCodigoRollOver($numeroColumna,$valor){
	$codigoRollOver='<tr onmouseover="_rowRolloverOn(this)" onmouseout="_rowRolloverOff(this)" onclick="_closeAllPopups(this);_toggleColumn(\'hide_col_'.$numeroColumna.'\')"><td>&nbsp;<span class="col_'.$numeroColumna.'">*</span>&nbsp;'.$valor.'</td></tr>';
	return $codigoRollOver;
	}
	public function getCodigoPopUp(){
		$CodigoPopUp='<div id="pop__dot" class="popup">
		<table border="0" cellpadding="0" cellspacing="0">
		<tbody><tr><th>Mostrar columnas:</th></tr>';
		//$CodigoPopUp.=$this->getCodigoRollOver(0,"FechSa cita");
		
		
		for($i=0; $i<sizeof($this->elementos); $i++){
			//$codigoTodasTuplasYColumnas.=$this->getCodigoColumnaTitulo(0,$this->elementos[$i][0]);
			$CodigoPopUp.=$this->getCodigoRollOver($i,$this->elementos[$i][0]);
		}
		
		
	/*$CodigoPopUp.=$this->getCodigoRollOver(1,"Motivo");
		$CodigoPopUp.=$this->getCodigoRollOver(2,"Prefesional");
		$CodigoPopUp.=$this->getCodigoRollOver(3,"Citas");
		$CodigoPopUp.=$this->getCodigoRollOver(4,"Estado");*/
		
		$CodigoPopUp.='<tr onmouseover="_rowRolloverOn(this)" onmouseout="_rowRolloverOff(this)" onclick="_closeAllPopups(this);addcol(\'UploadedBy\')"><td>&nbsp;&nbsp;&nbsp;&nbsp;UploadedBy</td></tr>
		<tr onmouseover="_rowRolloverOn(this)" onmouseout="_rowRolloverOff(this)" onclick="_closeAllPopups(this); document.getElementById(\'columnspec\').style.display=\'\'; return true;"><td>&nbsp;&nbsp;&nbsp;&nbsp;Edit&nbsp;column&nbsp;spec...</td></tr>
		</tbody></table>
		</div>';
		return $CodigoPopUp;
	
	}
	function getCodigoEncabezadoBorbujaYGrid(){
		$codigoEncabezadoBorbujaYGrid='<div id="colcontrol">
		<div style="margin: '.$this->margenArriba.'em '.$this->margenDerecho.'em '.$this->margenAbajo.'em '.$this->margenIzquierdo.'em; float: '.$this->alineacion.'; width: '.$this->ancho.'em;">
		<div class="bubble_bg">

		<div class="round4"></div>
		<div class="round2"></div>
		<div class="round1"></div>
		<div class="box-inner" id="bub">';
		return $codigoEncabezadoBorbujaYGrid;
	}
	function getCodigoPieBorbujaYGrid(){
			$codigoPieBorbujaYGrid='</div>
			</div>
			</div>
			</div>';
			return $codigoPieBorbujaYGrid;
	}
	function getCodigoEncabezadoTabla(){
	//despues de <div class="pagination"> va: 1 - 5 de 5
		$codigoEncabezadoTabla='<div style="margin-bottom: 6px;">
		<div class="pagination">
		
		</div>
		&nbsp;&nbsp;
		<form id="colspecform" action="list" method="get" autocomplete="off" style="display: inline;">
		<input name="can" value="2" type="hidden">
		<input name="q" value="" type="hidden">
		<input name="sort" value="" type="hidden">
		<span id="columnspec" style="display: none;"><span style="font-size: 95%;">
		Columns: </span><input size="60" style="font-size: 80%;" name="colspec" id="colspec" value="manzana naranja uva Size DownloadCount" type="text">&nbsp; <input style="font-size: 80%;" name="nobtn" value="Update" type="submit">&nbsp;
		</span>
		</form>
		</div>';
		return $codigoEncabezadoTabla;
	}
	function getCodigoEventosColumnasCompleto(){
		for($i=0; $i<sizeof($this->elementos); $i++){
		//	$codigoEventosColumnasCompleto=$this->getCodigoEventosColumnas(0);
			$codigoEventosColumnasCompleto.=$this->getCodigoEventosColumnas($i);
		}
		
	/*	$codigoEventosColumnasCompleto.=$this->getCodigoEventosColumnas(1);
		$codigoEventosColumnasCompleto.=$this->getCodigoEventosColumnas(2);
		$codigoEventosColumnasCompleto.=$this->getCodigoEventosColumnas(3);
		$codigoEventosColumnasCompleto.=$this->getCodigoEventosColumnas(4);*/
		
		return $codigoEventosColumnasCompleto;
	}
	function getCodigoEventosFiltrosCompleto(){

	
	
		for($i=0; $i<sizeof($this->elementos); $i++){
		//$codigoEventosFiltrosCompleto=$this->getCodigoEventosFiltros(0);
			$codigoEventosFiltrosCompleto=$this->getCodigoEventosFiltros($i);
		}

	/*	$codigoEventosFiltrosCompleto.=$this->getCodigoEventosFiltros(1);
		$codigoEventosFiltrosCompleto.=$this->getCodigoEventosFiltros(2);
		$codigoEventosFiltrosCompleto.=$this->getCodigoEventosFiltros(3);
		$codigoEventosFiltrosCompleto.=$this->getCodigoEventosFiltros(4);*/
		
		return $codigoEventosFiltrosCompleto;
	}
	function getCodigoDataGridLuca(){
		return $this->codigoDataGridLuca;
	}
	function setCodigoDataGridLuca(){
	$this->codigoDataGridLuca=$this->getCodigoEncabezadoScripts();
		$this->codigoDataGridLuca=$this->getCodigoEncabezadoBorbujaYGrid();
		$this->codigoDataGridLuca.=$this->getCodigoEncabezadoTabla();
		$this->codigoDataGridLuca.=$this->getCodigoTodasTuplasYColumnas();
		$this->codigoDataGridLuca.=$this->getCodigoEventosColumnasCompleto();
		$this->codigoDataGridLuca.=$this->getCodigoEventosFiltrosCompleto();
		$this->codigoDataGridLuca.=$this->getCodigoPopUp();
		$this->codigoDataGridLuca.=$this->getCodigoPieBorbujaYGrid();
		$this->codigoDataGridLuca.=$this->getCodigoScripts();
	}
	
	function getCodigoEncabezadoScripts(){
		$codigoEncabezadoScripts='
		<script type="text/javascript">
		function _showBelow(){}
		function _toggleStar(){}
		function _rowRolloverOn(){}
		function _rowRolloverOff(){}
		function _goIssue(){}
		function _goFile(){}
		</script>';
		return $codigoEncabezadoScripts;
	}
	function getCodigoScripts(){
		$codigoScripts="<script type=\"text/javascript\" src=\"list_files/dit_scripts_20081013.js\"></script>

		<script type=\"text/javascript\">
		 var cancelBubble = false;
		 var _allColumnNames = [
		 'manzana', 'naranja', 'uva', 'size', 'downloadcount'
		 ];
		 
		 function addcol(colname) {
		 var colspec = _getElById('colspec');
		 colspec.value += ' ' + colname;
		 document.getElementById('colspecform').submit();
		 }
		 _onload();
		</script>";
		return $codigoScripts;
		
	}

}
?>
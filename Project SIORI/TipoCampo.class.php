<?php
class TipoCampo{
	private $margenIzquierdo;
	public $linkBoton;
	public $miembrosCombo;
	public function setConfiguracion($margenIzquierdo){
		$this->margenIzquierdo=$margenIzquierdo;
	}
	public function setMiembrosCombo(){
		$this->miembrosCombo=$miembrosCombo;
	}
	
	public function setLinkBoton($linkBoton){
		$this->linkBoton=$linkBoton;
	}
	public function TipoCampo(){
		$this->margenIzquierdo=0;
		$this->linkBoton="";
	}
	public function getCodigoFormulario(){

	$codigoFormulario='	<div style="margin: 0em 6em 0em 0em; float: left; width: 27em; height: 276px;">
  	<form id="createaccount" name="createaccount" action="main.php?tab=Consultas&subTab=Inicio&seleccionado=true" method="post" onsubmit="return(onPreCreateAccountSubmit());" class="style1" style="width: 427px; height: 220px;">
		
		<table bgcolor="#cbdced" border="0" cellpadding="2" cellspacing="0" style="height: 92px; width: 98%">
			<tbody>
				<tr><td>
				<table bgcolor="#ffffff" border="0" cellpadding="5" cellspacing="0" width="100%">';
				
		
					$codigoFormulario.=$this->getCodigoTitulo('Estudiante');
					$codigoFormulario.=$this->getCodigoCampoTexto("Carne",'');
			//		$codigoFormulario.=$this->getCodigoCampoTexto("Nombre",'');
			//		$codigoFormulario.=$this->getCodigoCampoTexto("Apellido 1",'');
			//		$codigoFormulario.=$this->getCodigoCampoTexto("Apellido 2",'');
			//		$codigoFormulario.=$this->getCodigoCampoCombo();
			//		$codigoFormulario.=$this->getCodigoCampoBoton("Seleccionar",10);

				//	$codigoFormulario.=$this->getCodigoCampoCheckBox("Creating a Google Account will enable Web History. ");
				//	$codigoFormulario.=$this->getCodigoCampoTexto("Apellido 2",'');
					$codigoFormulario.=$this->getCodigoCampoBoton("Buscar",10);
				//	$codigoFormulario.=$this->getCodigoCampoTexto("Apellido 2",'');
				//	$codigoFormulario.=$this->getCodigoCampoCombo();
				//	$codigoFormulario.=$this->getCodigoCampoCombo();




		
				
				
	$codigoFormulario.='</table>
  				</td></tr>
  			</tbody>
  		</table>
  </form>
 
  </div>';
	return $codigoFormulario;
	
	}
	public function getCodigoFormularioNuevaAtencion(){

	$codigoFormulario='	<div style="margin: 0em 15em 0em 0em; float: left; width: 27em; height: 116px;">
  	<form id="createaccount" name="createaccount" action="main.php?tab=Consultas&subTab=Inicio&seleccionado=true" method="post" onsubmit="return(onPreCreateAccountSubmit());" class="style1" style="width: 427px; height: 220px;">
		
		<table bgcolor="#cbdced" border="0" cellpadding="2" cellspacing="0" style="height: 92px; width: 98%">
			<tbody>
				<tr><td>
				<table bgcolor="#ffffff" border="0" cellpadding="5" cellspacing="0" width="100%">';
				
		
					$codigoFormulario.=$this->getCodigoTitulo('Nueva Atenci&#243n');

					
										$listaPrueba[0]="Acad&#233mica";
					$listaPrueba[1]="Personal";
					$listaPrueba[2]="Vocacional-Ocupacional";
					$listaPrueba[3]="Accesibilidad";
					$this->miembrosCombo=$listaPrueba;
					$codigoFormulario.=$this->getCodigoCampoCombo("Motivo");

					
					$listaPrueba[0]="CASE";
					$listaPrueba[1]="COVO";
					$listaPrueba[2]="CASED";
					$listaPrueba[3]="PROFESOR";
					$listaPrueba[4]="ADMINISTRATIVO";
					$listaPrueba[5]="OTRO";
					$this->miembrosCombo=$listaPrueba;
					$codigoFormulario.=$this->getCodigoCampoCombo("Referido por");					
				





		
				
				
	$codigoFormulario.='</table>
  				</td></tr>
  			</tbody>
  		</table>
  </form>
 
  </div>';
	return $codigoFormulario;
	
	}

	
		public function getCodigoFormularioNuevaCita(){

	$codigoFormulario='	<div style="margin: 0em 6em 0em 0em; float: left; width: 27em; height: 220px;">
  	<form id="createaccount" name="createaccount" action="main.php?tab=Consultas&subTab=Inicio&seleccionado=true" method="post" onsubmit="return(onPreCreateAccountSubmit());" class="style1" style="width: 427px; height: 220px;">
		
		<table bgcolor="#cbdced" border="0" cellpadding="2" cellspacing="0" style="height: 92px; width: 98%">
			<tbody>
				<tr><td>
				<table bgcolor="#ffffff" border="0" cellpadding="5" cellspacing="0" width="100%">';
				
		
					$codigoFormulario.=$this->getCodigoTitulo('Nueva Cita');
					$listaPrueba[0]="Soltero";
					$listaPrueba[1]="Casado";
					$listaPrueba[2]="Divorciado";
					$listaPrueba[3]="Otro";
					$this->miembrosCombo=$listaPrueba;
					$codigoFormulario.=$this->getCodigoCampoCombo("Estado Civil");

					
					$listaPrueba[0]="0";
					$listaPrueba[1]="1";
					$listaPrueba[2]="2";
					$listaPrueba[3]="3";
					$listaPrueba[4]="4";
					$listaPrueba[5]="5";
					$listaPrueba[6]="6";	
					$listaPrueba[7]="7";					
					$listaPrueba[8]="8";					
					$listaPrueba[9]="9";					
					$listaPrueba[10]="10";					
					$listaPrueba[11]="11";					
					$listaPrueba[12]="12";					
					$listaPrueba[13]="13";					
					$listaPrueba[14]="14";					
					$listaPrueba[15]="15";					
					$listaPrueba[16]="16";					
					$listaPrueba[17]="17";					
					$listaPrueba[18]="18";					
					$listaPrueba[19]="19";					
					$listaPrueba[20]="20";					
					$listaPrueba[21]="21";					
					$listaPrueba[22]="22";					
					$listaPrueba[23]="23";					
					$listaPrueba[24]="24";					
					$listaPrueba[25]="25";					
					$listaPrueba[26]="26";					
					$listaPrueba[27]="27";					
					$listaPrueba[28]="28";					
					$listaPrueba[29]="29";					
					$listaPrueba[30]="30";					
					$this->miembrosCombo=$listaPrueba;
					$codigoFormulario.=$this->getCodigoCampoCombo("Carga Acad&#233;mica");		

					$tipoBeca[0]="Socioecon&#243;mica";					
					$tipoBeca[1]="Excelencia";					
					$tipoBeca[2]="Est&#237;mulo";					
					$tipoBeca[3]="Ninguna";									
					$this->miembrosCombo=$tipoBeca;
					$codigoFormulario.=$this->getCodigoCampoCombo("Tipo Beca");		
					$tipoBeca[0]="Asistida";					
					$tipoBeca[1]="No Asistidada";					
					$tipoBeca[2]="Cancelada";					
					$tipoBeca[3]="Pendiente";									
					$this->miembrosCombo=$tipoBeca;
	
					$codigoFormulario.=$this->getCodigoCampoCombo("Estado");						
					$codigoFormulario.=$this->getCodigoCampoTexto("Promedio ponderado",'');
					$codigoFormulario.=$this->getCodigoCampoTexto("Observaciones",'');
					$codigoFormulario.=$this->getCodigoCampoCheckBox("Dar seguimiento ");




		
				
				
	$codigoFormulario.='</table>
  				</td></tr>
  			</tbody>
  		</table>
  </form>
 
  </div>';
	return $codigoFormulario;
	
	}

	public function getCodigoFormularioBoton($textoBoton){

	$codigoFormulario='	<div style="margin: 5em 6em 0em '.$this->margenIzquierdo.'em; float: left; width: 40em; height: 276px;">
  	<form id="createaccount" name="createaccount" action="main.php?tab=Consultas&subTab=Inicio&seleccionado=true" method="post" onsubmit="return(onPreCreateAccountSubmit());" class="style1" style="width: 427px; height: 220px;">
		
		<table bgcolor="#cbdced" border="0" cellpadding="2" cellspacing="0" style="height: 92px; width: 98%">
			<tbody>
				<tr><td>
				<table bgcolor="#ffffff" border="0" cellpadding="5" cellspacing="0" width="100%">';
				
		

				$codigoFormulario.=$this->getCodigoCampoBoton2($textoBoton,10,$this->linkBoton);

	$codigoFormulario.='</table>
  				</td></tr>
  			</tbody>
  		</table>
  </form>
 
  </div>';
	return $codigoFormulario;
	
	}
	
	public function getCodigoTitulo($textoTitulo){
		$codigoTitulo='
		<tr>
		<td colspan="2" valign="top">
		<span class="gaia ops gsl">
		'.$textoTitulo.'
		<br>
		</span>
		</td>
		</tr>';
		return $codigoTitulo;
	}
	public function getCodigoCampoTexto($nombreEtiquetaCampo,$mensajeError){
	if($mensajeError!=''){
	 $codigoCampoTextoError='<div id="errorDIV0">
  <font face="Arial, sans-serif" size="-1">
  '.$mensajeError.'
  <br>
  </font>
</div>';
	}else{
	$codigoCampoTextoError='';
	}
	  $codigoCampoTexto='
		<tr id="AttrRowFirstName">
	  <td id="AttrLabelCellFirstName" nowrap="nowrap" valign="top" style="width: 1%; height: 35px">
	  <span class="gaia cca al">
	  '.$nombreEtiquetaCampo.':
	  </span>
	  </td>
	  <td id="AttrLabelCellFirstName" style="height: 35px">
	  <script type="text/javascript"><!--
				  function openWindow(url, w, h) {
					var popupWin =
					  window.open(url, \'windowname\',
					  \'width=\' + w + \', height=\' + h + \', location=no, menubar=no, status=no, toolbar=no, scrollbars=yes, resizable=yes\');
				  }
				 --></script>
	  <div>
	  <input name="CarneName" id="Carne" size="30" value="" type="text">
	  '.$codigoCampoTextoError.'
	  </div>
	  </td>
		</tr>
	';
	  return($codigoCampoTexto);
	}
	public function getCodigoCampoCheckBox($nombre){
	$codigoCampoCheckBox=' <tr>
  <td nowrap="nowrap" style="width: 1%">&nbsp;</td>
  <td align="left">
  <font size="-1">
  <input name="PersistentCookie" id="PersistentCookie" value="yes" checked="checked" type="checkbox">
&nbsp;<input name="rmShown" value="1" type="hidden">'.$nombre.'
  </font>
  </td>
  </tr>';
	return $codigoCampoCheckBox;
	}
	public function getCodigoCampoBoton($texto,$ancho){
	$codigoCampoBoton='  <tr>
  <td colspan="1" style="width: 1%">
  &nbsp;
  </td>
  <td colspan="1" align="left">
  <input style="width: '.$ancho.'em;" id="submitbutton" name="submitbutton" value="'.$texto.'" type="submit">
  </td>
  </tr>';
	return $codigoCampoBoton;
	}
	public function getCodigoCampoBoton2($texto,$ancho,$link){
	$codigoCampoBoton='  <tr>
  <td colspan="1" style="width: 1%">
  &nbsp;
  </td>
  <td colspan="1" align="left">

  <INPUT style="width: '.$ancho.'em;"  TYPE="BUTTON" VALUE="'.$texto.'" ONCLICK="window.location.href=\''.$link.'\'"> 
  </td>
  </tr>';
	return $codigoCampoBoton;
	}
	public function getCodigoCampoCombo($etiqueta){
	$codigoCampoCombo='<tr id="AttrRowSecretQuestion">
  <td id="AttrLabelCellSecretQuestion" nowrap="nowrap" valign="top" style="width: 1%">
  <span class="gaia cca al">
  '.$etiqueta.':
  </span>
  </td>
  <td id="AttrLabelCellSecretQuestion">
  <script type="text/javascript"><!--
              function openWindow(url, w, h) {
                var popupWin =
                  window.open(url, \'windowname\',
                  \'width=\' + w + \', height=\' + h + \', location=no, menubar=no, status=no, toolbar=no, scrollbars=yes, resizable=yes\');
              }
             --></script>
  <div>
<script>
  <!--
  var chooseQuestionValue = "choosequestion";
  var ownQuestionValue = "ownquestion";
  var ownQuestionName =  "ownquestion";
  var textSize = "53";

  
  function updateOwnQuestionBox(value) { 
    var ownQuestionField = document.forms[\'createaccount\'].elements[ownQuestionName];
    if (value == ownQuestionValue) { 
      ownQuestionField.style.display = \'block\';  
      ownQuestionField.focus();

    } else { 
      ownQuestionField.style.display = \'none\'; 
    }  
  }
  -->
</script>
<select id="questions" name="selection" onchange="updateOwnQuestionBox(this.value)">
  <option value="choosequestion" style="font-style: italic;">
  Escojer...
  </option>';
  
	$total = count($this->miembrosCombo);
	for ($i = 0; $i < $total; $i++) {
		$codigoCampoCombo.='<option value="What is your primary frequent flyer number">'.$this->miembrosCombo[$i].'</option>';
	}
  
    $codigoCampoCombo.='<script>
  <!--
    var lastIndex = "5";
    var value = "ownquestion";


    
    document.forms[\'createaccount\'].questions.options[lastIndex] = new Option(label, value);
    document.forms[\'createaccount\'].questions.options[lastIndex].style.fontStyle = \'italic\';

    

    -->
  </script>
</select>
<div style="padding-top: 5px;">
  <input name="ownquestion" id="ownquestion" size="53" value="" style="display: none;" type="text">
</div>
<script>
  <!--
  updateOwnQuestionBox(document.forms[\'createaccount\'].questions.value);
  -->
</script>
  </div>
  </td>
  </tr>';
	return $codigoCampoCombo;
	}	
}
?>
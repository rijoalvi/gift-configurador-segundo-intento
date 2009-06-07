<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
 <script type="text/javascript"> 
 </script>
 <title>
SIORI</title>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 		<link type="text/css" rel="stylesheet" href="formulario.css">
		
		
 <link type="text/css" rel="stylesheet" href="main_files/ph_core.css">
 
 <link type="text/css" rel="stylesheet" href="main_files/ph_detail.css">
<link type="text/css" rel="stylesheet" href="list_files/ph_core.css">
<link type="text/css" rel="stylesheet" href="list_files/ph_list.css">
 
 
 
<!--[if IE]>
 <link type="text/css" rel="stylesheet" href="http://www.gstatic.com/codesite/ph/3587378734775261633/css/d_ie.css" >
<![endif]-->
<script charset="utf-8" id="injection_graph_func" src="main_files/injection_graph_func.js"></script><script type="text/javascript" src="main_files/ga.js"></script></head><body class="t1">
 
<?php
include ("PlantillaPrincipal.class.php");
$a=new PlantillaPrincipal();
print($a->getCodigoInformacionLogin("Marcela Herrera","Case Letras"));
?>
 
 <div class="gbh" style="left: 0pt;"></div>
 <div class="gbh" style="right: 0pt;"></div>
 <div style="height: 1px;"></div>
 <table style="margin: 20px 0px 0px; padding: 0px; width: 100%;" cellpadding="0" cellspacing="0">
 <tbody><tr style="height: 58px;">
 <td style="width: 55px; text-align: center;">
 <a href="main.php">
 
 
 
 <img src="oo.gif" alt="Project Logo">
 
 
 
 </a>
 </td>
 <td style="padding-left: 0.8em;">
 
 <div id="pname" style="margin: 0px 0px -3px;">
 	<a href="main.php" style="text-decoration: none; color: rgb(0, 0, 0);">
	 SIORI</a></div>
 <div id="psum">
 	<i>
	 <a id="project_summary_link" href="main.php" style="text-decoration: none; color: rgb(0, 0, 0);">
	 Módulo Atención Individual</a></i>
 </div>
 
 </td>
 <td style="white-space: nowrap; text-align: right;">
 
 &nbsp;</td></tr>
 </tbody></table>


<table id="mt" border="0" cellpadding="0" cellspacing="0" width="100%">
 <tbody><tr>

 
 
 <?php


 
 
 
 
 
 
 
 
 
 
 
 $tab1="Expedientes...";
 $tab2="Estudiantes";
 $tab3="Mi_Perfil";
 $tab4="UnidadesOperativas";
$a=new PlantillaPrincipal();
$tabSeleccionado = $_GET['tab'];
//echo $tabSeleccionado;
print($a->getCodigoTabValidado($tabSeleccionado, $tab1));

print($a->getCodigoTabValidado($tabSeleccionado, $tab2));

print($a->getCodigoTabValidado($tabSeleccionado, $tab3));

print($a->getCodigoTabValidado($tabSeleccionado, $tab4));



 ?>
 
 
 

 <td width="100%">&nbsp;</td>
 </tr>
</tbody></table>
<table class="st" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
 <tbody><tr>
 
 
 
 
 
 
 
 
 <td>
 <div class="st1">
 <div class="isf">
  <?php

$subTabSeleccionado = $_GET['subTab'];
//echo $subTabSeleccionado;


switch($tabSeleccionado){
	case $tab1://Consultas
		print($a->getCodigoSubTabValidado($subTabSeleccionado,"Inicio",$tabSeleccionado));
		/*print("|");
		print($a->getCodigoSubTabValidado($subTabSeleccionado,"valor2",$tabSeleccionado));
		print("|");
		print($a->getCodigoSubTabValidado($subTabSeleccionado,"valor3",$tabSeleccionado));*/
		break;
	case $tab2://Estudiantes
		print($a->getCodigoSubTabValidado($subTabSeleccionado,"Listar",$tabSeleccionado));
		print("|");
		print($a->getCodigoBuscar());
	break;
	case $tab3://Mi_Perfil
		print($a->getCodigoSubTabValidado($subTabSeleccionado,"Mis Datos",$tabSeleccionado));
		print("|");
		print($a->getCodigoSubTabValidado($subTabSeleccionado,"Mis Atenciones",$tabSeleccionado));
		print("|");
		print($a->getCodigoSubTabValidado($subTabSeleccionado,"Mis Estadísticas",$tabSeleccionado));		
	break;
	case $tab4://UnidadesOperativas
		print($a->getCodigoSubTabValidado($subTabSeleccionado,"Listar",$tabSeleccionado));
		print("|");
		print($a->getCodigoBuscar());
	break;	
	default:
		//print($a->getCodigoSubTabValidado($subTabSeleccionado,"valor1",$tabSeleccionado));
	break;
	


}

?>
 </div>
</div>

 </td>
 
 
 
 <td class="bevel-right" align="right" height="4" valign="top">
 <div class="round4"></div>
 <div class="round2"></div>
 <div class="round1"></div>
 </td>
 </tr>
</tbody></table>
<script type="text/javascript">
 var cancelBubble = false;
 function _go(url) { document.location = url; }
</script>

<div id="maincol" style="height: 216px">
<!-- IE -->
<?php
include ("DataGridLuca.class.php");
include ("TipoCampo.class.php");
include ("Borbuja.class.php");
$codigoMensajeCentral='<div style="padding: 3em; text-align: center;">
This project currently has no wiki pages.<br>
You may want to create a <a href="http://code.google.com/p/proyecto-inge1/w/edit">new wiki page</a>.
</div>';
//print($codigoMensajeCentral);



if(0){

	$tp=new TipoCampo();
	print($tp->getCodigoFormulario());
}
	
	
//borbuja
if(0){


	$b =new Borbuja();

						
	$colorList2[0][0]="manzana";
	$colorList2[0][1]="manazana link";
	$colorList2[0][2]="www.manzana.com";

	$colorList2[1][0]="naranja";
	$colorList2[1][1]="naranja link";
	$colorList2[1][2]="www.naranja.com";

	$colorList2[2][0]="uva";
	$colorList2[2][1]="uva link";
	$colorList2[2][2]="www.uva.com";



	$b->setElementos($colorList2);
	$b->setBorbujaConfiguracion(1,2,3,6,"right",15);
	$b->setBorbuja();
	print($b->borbujaCodigo);
}
//fin borbuja

//------data grid

$subTabSeleccionado = $_GET['subTab'];
if("Mis Consultas"==$subTabSeleccionado){
	$colorList2[0][0]="ESTUDIANTE";
	$colorList2[1][0]="FECHA";
	$colorList2[2][0]="CANTIDAD CITAS";
	$colorList2[3][0]="ESTADO";
	$colorList2[4][0]="MOTIVO";

	$datos[0][0]="LILIANA ALPIZAR";
	$datos[1][0]="3/3/2008";
	$datos[2][0]="2";
	$datos[3][0]="FINALIZADA";
	$datos[4][0]="VOCACIONAL";

	$datos[0][1]="MARCELA HERRERA";
	$datos[1][1]="3/3/2008";
	$datos[2][1]="1";
	$datos[3][1]="FINALIZADA";
	$datos[4][1]="VOCACIONAL";

	$datos[0][2]="RICARDO MONTERO";
	$datos[1][2]="3/3/2008";
	$datos[2][2]="3";
	$datos[3][2]="EN_SEGUIMIENTO";
	$datos[4][2]="PERSONAL";

	$datos[0][3]="HELEN PICADO";
	$datos[1][3]="3/3/2008";
	$datos[2][3]="1";
	$datos[3][3]="EN_SEGUIMIENTO";
	$datos[4][3]="PERSONAL";
	$dg=new DataGridLuca();

	$dg->setDatos($datos);

	$dg->setElementos($colorList2);
	$dg->setDataGridLucaConfiguracion(0,0,0,0,"left",60);
	$dg->setCodigoDataGridLuca();
	print($dg->getCodigoDataGridLuca());
}
if("UnidadesOperativas"==$tabSeleccionado){
	$colorList2[0][0]="NOMBRE";
	$colorList2[1][0]="TELEFONO";
	$colorList2[2][0]="CANTIDAD PROFESIONALES";


	$datos[0][0]="CASE Artes y Letras";
	$datos[1][0]="2511-5119";
	$datos[2][0]="3";


	$datos[0][1]="CASE Ciencias Básicas";
	$datos[1][1]="2511-5083";
	$datos[2][1]="5";


	$datos[0][2]="CASE Ciencias de la Salud";
	$datos[1][2]="2511-4627";
	$datos[2][2]="4";


	$datos[0][3]="CASE Ciencias Sociales";
	$datos[1][3]="2511-5678";
	$datos[2][3]="3";
	

	
	$datos[0][4]="CASE Ingeniería";
	$datos[1][4]="2511-4326";
	$datos[2][4]="2";
	
	$datos[0][5]="CASE Ciencias Agroalimentarias";
	$datos[1][5]="2511-5662";
	$datos[2][5]="6";
	
	$datos[0][6]="CASED";
	$datos[1][6]="2511-5662";
	$datos[2][6]="6";
	
	$datos[0][7]="COVO";
	$datos[1][7]="2511-5662";
	$datos[2][7]="6";
	


	$dg=new DataGridLuca();

	$dg->setDatos($datos);

	$dg->setElementos($colorList2);
	$dg->setDataGridLucaConfiguracion(0,0,0,0,"left",45);
	$dg->setCodigoDataGridLuca();
	print($dg->getCodigoDataGridLuca());
}
if("Mis Datos"==$subTabSeleccionado){






	$b =new Borbuja();

						
	$colorList2[0][0]="Nombre:";
	$colorList2[0][1]="MARCELA";
	$colorList2[0][2]="www.manzana.com";

	$colorList2[1][0]="Apellido 1:";
	$colorList2[1][1]="HERRERA";
	$colorList2[1][2]="www.naranja.com";

	$colorList2[2][0]="Apellido 2";
	$colorList2[2][1]="SALAZAR";
	$colorList2[2][2]="www.uva.com";

	$colorList2[3][0]="Cédula";
	$colorList2[3][1]="301230459";
	$colorList2[3][2]="www.uva.com";

	$colorList2[3][0]="Unidad Operativa:";
	$colorList2[3][1]="CASE LETRAS";
	$colorList2[3][2]="www.uva.com";
	
	$colorList2[4][0]="Disciplina:";
	$colorList2[4][1]="ORIENTACION";
	$colorList2[4][2]="www.uva.com";
	
	$colorList2[5][0]="Contraseña:";
	$colorList2[5][1]="123";
	$colorList2[5][2]="www.uva.com";

	$b->setElementos($colorList2);
	$b->setBorbujaConfiguracion(0,0,0,0,"center",20);
	$b->setBorbuja();
	print($b->borbujaCodigo);
}
if("Inicio"==$subTabSeleccionado){

	if($_GET['seleccionado']!="true"){
	$tp=new TipoCampo();
	
	print($tp->getCodigoFormulario());
	}
	
	if($_GET['seleccionado']=="true"){
	$b =new Borbuja();
//**************************************************************************************
$user="lucachac_user";
$password="todosepuede";
$database="lucachac_db";
mysql_connect("lucachaco.bluechiphosting.com",$user,$password);
@mysql_select_db($database) or die( "Unable to select database");

//if(cita!=true){
if($_GET['cita']=="true"){
  $carne= $_GET['carne'];
}
else{
  $carne= $_POST['CarneName'];
}
//$carne='a61521';

$query="select Carne, nombre, Apellido1, Apellido2, Sexo, Nacionalidad, Telefono, Provincia, Canton, PromedioAdmision from Estudiante where Carne='".$carne."';";

include("BusinessLogic/Estudiante.php");
//include ("Borbuja.class.php");
$estudiante = new Estudiante();

$estudiante->set($carne);

$result=mysql_query($query);

$num=mysql_numrows($result);

$i=0;
while ($i < $num) {
	//borbuja estudiante
	$colorList2[0][0]="Carné:";
	$colorList2[0][1]=mysql_result($result,$i,"Carne");
	$colorList2[0][2]="";	
	
	$colorList2[1][0]="Nombre:";
	//$colorList2[1][1]=mysql_result($result,$i,"nombre");
    $colorList2[1][1]=$estudiante->nombre;
	$colorList2[1][2]="";

	$colorList2[2][0]="Apellido......... 1:";
	$colorList2[2][1]=$estudiante->apellido1;
	$colorList2[2][2]="";

	$colorList2[3][0]="Apellido 2...........";
	$colorList2[3][1]=$estudiante->apellido2;
	$colorList2[3][2]="";

	$colorList2[4][0]="Sexo";
	$colorList2[4][1]=$estudiante->sexo;
	$colorList2[4][2]="";

	$colorList2[5][0]="Nacionalidad:";
	$colorList2[5][1]=$estudiante->nacionalidad;
	$colorList2[5][2]="";
	
	$colorList2[6][0]="Teléfono:";
	$colorList2[6][1]=$estudiante->telefono;
	$colorList2[6][2]="";

	$colorList2[7][0]="Provincia:";
	$colorList2[7][1]=$estudiante->provincia;
	$colorList2[7][2]="";
	
	$colorList2[8][0]="Cantón:";
	$colorList2[8][1]=$estudiante->canton;
	$colorList2[8][2]="";

	$colorList2[9][0]="Prom. Admisión:";
	$colorList2[9][1]=mysql_result($result,$i,"PromedioAdmision");
	$colorList2[9][2]="";	
	
	
	
	
	
	$i++;
	
}
mysql_close();
	


	$b->setElementos($colorList2);
	$b->setBorbujaConfiguracion(1,1,1,1,"left",20);
	
	$b->setBorbuja();

	print($b->borbujaCodigo);
	
	
	
	
	
	if($_GET['cita']!="true"){

	
	$user="lucachac_user";
	$password="todosepuede";
	$database="lucachac_db";
	mysql_connect("lucachaco.bluechiphosting.com",$user,$password);
	@mysql_select_db($database) or die( "Unable to select database");


	$query="select con.Codigo, con.Motivo, pro.Nombre, pro.Apellido1, pro.Apellido2, con.Estado, pro.Role from Consulta con, Profesional pro where  con.CodigoProfesional=pro.Codigo And Carne='".$carne."';";
	$result=mysql_query($query);

	$num=mysql_numrows($result);

	$i=0;



		//grid atenciones
			$colorList3[0][0]="FECHA";
			$colorList3[1][0]="MOTIVO";
			$colorList3[2][0]="Profesional";
			$colorList3[3][0]="Disciplina";
			$colorList3[4][0]="Estado";
	 // $tireqty = $_POST['tireqty'];
	 // $oilqty = $_POST['oilqty'];
	 // $sparkqty = $_POST['sparkqty'];

			while ($i < $num) {
					$listaCodigosConsultas[$i]=mysql_result($result,$i,"Codigo");
					$datos[0][$i]="--/--/--";
					$datos[1][$i]=mysql_result($result,$i,"Motivo");
					$datos[2][$i]=mysql_result($result,$i,"Nombre")."_".mysql_result($result,$i,"Apellido1");
					$datos[3][$i]=mysql_result($result,$i,"Role");
					
					if(0==mysql_result($result,$i,"Estado")){
						$datos[4][$i]="En_seguimiento";
					}else{
						$datos[4][$i]="Completado";
					}
					//$datos[4][$i]=mysql_result($result,$i,"Estado");


					$i++;
			}
			$dg=new DataGridLuca();
			print($listaCodigosConsultas[0]);
			$dg->setListaCodigosConsultas($listaCodigosConsultas);//para cargar el gride con los codigos de consultas
			$dg->setVariables('tab=Consultas&subTab=Inicio&seleccionado=true&cita=true&carne='.$carne);
			$dg->setDatos($datos);

			$dg->setElementos($colorList3);
			$dg->setDataGridLucaConfiguracion(1,1,1,1,"left",40);

			$dg->setCodigoDataGridLuca();

			print($dg->getCodigoDataGridLuca());
			$tp2=new TipoCampo();
			$tp2->setLinkBoton("http://lucachaco.bluechiphosting.com/SIORI/main.php?tab=Consultas&subTab=Inicio&seleccionado=true&cita=true&carne=".$carne."&nuevaAtencion=true");
			print($tp2->getCodigoFormularioBoton("Nueva Atenci&#243;n"));
	}
	else{
	
	//MatrizBorbujaAtencion
	if($_GET['nuevaAtencion']!="true"){

				$user="lucachac_user";
				$password="todosepuede";
				$database="lucachac_db";
				mysql_connect("lucachaco.bluechiphosting.com",$user,$password);
				@mysql_select_db($database) or die( "Unable to select database");

				$codigoConsulta=$_GET['codigoConsulta'];

				$query="select con.Codigo, con.Motivo, pro.Nombre, pro.Apellido1, pro.Apellido2, con.Estado, pro.Role from Consulta con, Profesional pro where  con.CodigoProfesional=pro.Codigo And con.Codigo=".$codigoConsulta.";";
				$result=mysql_query($query);

				$num=mysql_numrows($result);

				$i=0;
				while ($i < $num) {
						$MatrizBorbujaAtencion[0][0]="Motivo:";
						$MatrizBorbujaAtencion[0][1]=mysql_result($result,$i,"Motivo");
						$MatrizBorbujaAtencion[0][2]="www.manzana.com";

						$MatrizBorbujaAtencion[1][0]="Profesional:";
						$MatrizBorbujaAtencion[1][1]=mysql_result($result,$i,"Nombre")." ".mysql_result($result,$i,"Apellido1");
						$MatrizBorbujaAtencion[1][2]="www.naranja.com";

						$MatrizBorbujaAtencion[2][0]="Estado";
						$MatrizBorbujaAtencion[2][1]=mysql_result($result,$i,"Estado");
						$MatrizBorbujaAtencion[2][2]="www.uva.com";

						$MatrizBorbujaAtencion[3][0]="Disciplina";
						$MatrizBorbujaAtencion[3][1]=mysql_result($result,$i,"Role");
						$MatrizBorbujaAtencion[3][2]="www.uva.com";

					$i++;
				}
				mysql_close();
						
						$baa =new Borbuja();

						$baa->setElementos($MatrizBorbujaAtencion);
						$baa->setBorbujaConfiguracion(1,1,1,1,"left",30);
						$baa->setBorbuja();
							print($baa->borbujaCodigo);
							
							if($_GET['nuevaCita']!=true){
													//grid citas
													
										$user="lucachac_user";
										$password="todosepuede";
										$database="lucachac_db";
										mysql_connect("lucachaco.bluechiphosting.com",$user,$password);
										@mysql_select_db($database) or die( "Unable to select database");

										$query="select Observaciones, Fecha, Estado from Cita where CodigoConsulta=".$codigoConsulta.";";
										$result=mysql_query($query);

										$num=mysql_numrows($result);

										$i=0;	

												$colorList4[0][0]="Observaciones";
												$colorList4[1][0]="Fecha";
												$colorList4[2][0]="Estado";
												while ($i < $num) {	
													
													
													



												$datosCita[0][$i]=mysql_result($result,$i,"Observaciones");
												$datosCita[1][$i]=substr(mysql_result($result,$i,"Fecha"), 0, -9);
												$datosCita[2][$i]=mysql_result($result,$i,"Estado");
										$i++;

										}

												$dg=new DataGridLuca();

												$dg->setDatos($datosCita);

												$dg->setElementos($colorList4);
												$dg->setDataGridLucaConfiguracion(1,1,1,1,"left",52);
												$dg->setCodigoDataGridLuca();
												print($dg->getCodigoDataGridLuca());
												
													$tp2=new TipoCampo();
													$tp2->setLinkBoton("http://lucachaco.bluechiphosting.com/SIORI/main.php?tab=Consultas&subTab=Inicio&seleccionado=true&cita=true&carne=".$_GET['carne']."&codigoConsulta=".$_GET['codigoConsulta']."&nuevaCita=true");
													if($num>=3){
														$tp2->setConfiguracion(22);
													}
													else{
														$tp2->setConfiguracion(0);
													}
													
											print($tp2->getCodigoFormularioBoton("Nueva Cita"));
					
					
					
					}
					else{
							$tpNuevaAtencion=new TipoCampo();
							$tpNuevaAtencion->setLinkBoton("http://lucachaco.bluechiphosting.com/SIORI/main.php?tab=Consultas&subTab=Inicio&seleccionado=true&cita=true&carne=".$_GET['carne']."&codigoConsulta=".$_GET['codigoConsulta']."&nuevaCita=true");
							$tpNuevaAtencion->setConfiguracion(0);
							print($tpNuevaAtencion->getCodigoFormularioNuevaCita(""));
							
							
							$tpGuardarAtencion=new TipoCampo();
							$tpGuardarAtencion->setLinkBoton("http://lucachaco.bluechiphosting.com/SIORI/main.php?tab=Consultas&subTab=Inicio&seleccionado=true&cita=true&carne=".$_GET['carne']."&codigoConsulta=".$_GET['codigoConsulta']."&nuevaCita=true");
							$tpGuardarAtencion->setConfiguracion(0);
							print($tpGuardarAtencion->getCodigoFormularioBoton("Guardar Cita"));
					}
					
					
					
						}//($_GET['nuevaAtencion']!="true")
						else{//Nueva Atención
							$tpNuevaAtencion=new TipoCampo();//Nueva Atención
							$tpNuevaAtencion->setLinkBoton("http://lucachaco.bluechiphosting.com/SIORI/main.php?tab=Consultas&subTab=Inicio&seleccionado=true&cita=true&carne=".$_GET['carne']."&codigoConsulta=".$_GET['codigoConsulta']."&nuevaCita=true");
							$tpNuevaAtencion->setConfiguracion(0);
							print($tpNuevaAtencion->getCodigoFormularioNuevaAtencion(""));
							
							$tpNuevaAtencion=new TipoCampo();
							$tpNuevaAtencion->setLinkBoton("http://lucachaco.bluechiphosting.com/SIORI/main.php?tab=Consultas&subTab=Inicio&seleccionado=true&cita=true&carne=".$_GET['carne']."&codigoConsulta=".$_GET['codigoConsulta']."&nuevaCita=true");
							$tpNuevaAtencion->setConfiguracion(0);
							print($tpNuevaAtencion->getCodigoFormularioNuevaCita(""));
							
							
							$tpGuardarAtencion=new TipoCampo();
							$tpGuardarAtencion->setLinkBoton("http://lucachaco.bluechiphosting.com/SIORI/main.php?tab=Consultas&subTab=Inicio&seleccionado=true&cita=true&carne=".$_GET['carne']."&codigoConsulta=".$_GET['codigoConsulta']."&nuevaCita=true");
							$tpGuardarAtencion->setConfiguracion(22);
							print($tpGuardarAtencion->getCodigoFormularioBoton("Crear Atención y Cita"));
							
							
						}
		}
	}
	
	//
}
if(0){

	$colorList2[0][0]="Nombre";
	$colorList2[1][0]="Apellido 1";
	$colorList2[2][0]="Apellido 2";
	$colorList2[3][0]="Disciplina";
	$colorList2[4][0]="Unidad Operativa";

	$datos[0][0]="LILIANA";
	$datos[1][0]="ALPIZAR";
	$datos[2][0]="SABORIO";
	$datos[3][0]="SICOLOGIA";
	$datos[4][0]="CASE LETRAS";

	$datos[0][1]="MARCELA";
	$datos[1][1]="HERNANDEZ";
	$datos[2][1]="MENDOZA";
	$datos[3][1]="ORIENTACION";
	$datos[4][1]="CASE INGENIERIA";

	$datos[0][2]="RICARDO";
	$datos[1][2]="CHAVARRIA";
	$datos[2][2]="SOTO";
	$datos[3][2]="ADMINISTRACION";
	$datos[4][2]="COVO GENERALES";

	$datos[0][3]="HELEN";
	$datos[1][3]="ARIAS";
	$datos[2][3]="VILLANUEVA";
	$datos[3][3]="SICOLOGIA";
	$datos[4][3]="COVO SALUD";
	$dg=new DataGridLuca();

	$dg->setDatos($datos);

	$dg->setElementos($colorList2);
	$dg->setDataGridLucaConfiguracion(1,3,1,6,"left",50);
	$dg->setCodigoDataGridLuca();
	print($dg->getCodigoDataGridLuca());
	//fin data grid
}



?>



<style type="text/css">
 #downloadbox {
 padding: 6px;
 overflow: hidden;
 white-space: nowrap;
 text-overflow: ellipsis;
 }
 #downloadbox a {
 margin: 6px 0 0 3em;
 display: block;
 padding-left: 18px;
 background: url(http://www.gstatic.com/codesite/ph/images/dl_arrow.gif) no-repeat bottom left;
 }
 #owners a, #members a { white-space: nowrap; }
.style1 {
	margin-left: 1em;
	margin-bottom: 1.4em;
}
</style>

<div style="float: right; width: 25em; height: 37px; margin-right: 0pt; margin-top: 0pt;" class="style1">

 
 
</div>
<br><br><br><br><br><br><br><br>
<script src="main_files/prettify.js"></script>
<script type="text/javascript">
 prettyPrint();
</script>
 
 <script type="text/javascript" src="main_files/core_scripts_20081103.js"></script>
 
 
 
 </div>
<div id="footer" dir="ltr">
 
 <div class="text">
 
 	<a href="http://www.ucr.ac.cr/">UCR</a> -
 <a href="http://www.vve.ucr.ac.cr/oo.php">Oficina de Orientación</a> -
 <a href="construccion.php">Contacto</a>

 
 </div>
</div>
<script type="text/javascript">
/**
 * Reports analytics.
 * It checks for the analytics functionality (window._gat) every 100ms
 * until the analytics script is fully loaded in order to invoke siteTracker.
 */
function _CS_reportAnalytics() {
 window.setTimeout(function() {
 if (window._gat) {
 var siteTracker = _gat._getTracker("UA-18071-1");
 siteTracker._initData();
 siteTracker._trackPageview();
 
 } else {
 _CS_reportAnalytics();
 }
 }, 100);
}
</script>

 
 
 <div class="hostedBy" style="margin-top: -20px;">
 </div>
 
 
 
 


 
 <div style="display: none;" class="menuDiv instance0"><b style="display: block;" class="categoryTitle projects">Projects</b><div class="menuCategory projects"><a href="http://code.google.com/p/projecto1-arquitectura/" style="display: block;" class="menuItem">projecto1-arquitectura</a><a href="http://code.google.com/p/proyecto-inge1/" style="display: block;" class="menuItem">proyecto-inge1</a></div><div class="menuCategory controls"><hr class="menuSeparator"><a href="http://code.google.com/hosting/" style="display: block;" class="menuItem">Find or start a project...</a></div></div></body></html>
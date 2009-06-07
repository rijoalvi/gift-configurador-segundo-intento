
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<script type="text/javascript">
</script>
<title>Data Grid 1.0</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" href="list_files/ph_core.css">
<link type="text/css" rel="stylesheet" href="list_files/ph_list.css">



</head>
<body class="t2">
<?php 
include ("DataGridLuca.class.php");


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


?>
 
</body>
</html>
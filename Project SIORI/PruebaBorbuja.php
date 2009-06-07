<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>

 <title>
 Prueba Borbuja</title>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 
 <link type="text/css" rel="stylesheet" href="proyecto-inge1%20-%20Google%20Code_files/ph_core.css">
 
 <link type="text/css" rel="stylesheet" href="ph_detail.css">
 </head>
 <body>
 
 
<?php       

include ("Borbuja.class.php");

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



?>
 </body>
 </html>
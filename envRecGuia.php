<?php
include('NubeGuiaRemision.php');
$obj = new NubeGuiaRemision();
//$res= $obj->insertarDocumentosGuia(1,'');
$res=$obj->enviarDocRecepcion();
//$res=$obj->enviarDocAutorizacion();
?>
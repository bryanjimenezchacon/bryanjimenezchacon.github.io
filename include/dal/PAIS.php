<?php
$dalTablePAIS = array();
$dalTablePAIS["PAIS_ID"] = array("type"=>14,"varname"=>"PAIS_ID");
$dalTablePAIS["NOMBRE"] = array("type"=>200,"varname"=>"NOMBRE");
$dalTablePAIS["FEC_CREACION"] = array("type"=>135,"varname"=>"FEC_CREACION");
$dalTablePAIS["USUARIO_CREACION"] = array("type"=>200,"varname"=>"USUARIO_CREACION");
$dalTablePAIS["FEC_ULTIMA_MOD"] = array("type"=>135,"varname"=>"FEC_ULTIMA_MOD");
$dalTablePAIS["USUARIO_ULTIMA_MOD"] = array("type"=>200,"varname"=>"USUARIO_ULTIMA_MOD");
	$dalTablePAIS["PAIS_ID"]["key"]=true;
$dal_info["PAIS"]=&$dalTablePAIS;

?>
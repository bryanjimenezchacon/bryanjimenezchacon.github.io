<?php
$dalTableEVENTO = array();
$dalTableEVENTO["EVENTO_ID"] = array("type"=>14,"varname"=>"EVENTO_ID");
$dalTableEVENTO["NOMBRE"] = array("type"=>200,"varname"=>"NOMBRE");
$dalTableEVENTO["FECHA_HORA"] = array("type"=>135,"varname"=>"FECHA_HORA");
$dalTableEVENTO["LUGAR"] = array("type"=>200,"varname"=>"LUGAR");
$dalTableEVENTO["DESCRIPCION"] = array("type"=>200,"varname"=>"DESCRIPCION");
$dalTableEVENTO["FEC_CREACION"] = array("type"=>135,"varname"=>"FEC_CREACION");
$dalTableEVENTO["USUARIO_CREACION"] = array("type"=>200,"varname"=>"USUARIO_CREACION");
$dalTableEVENTO["FEC_ULTIMA_MOD"] = array("type"=>135,"varname"=>"FEC_ULTIMA_MOD");
$dalTableEVENTO["USUARIO_ULTIMA_MOD"] = array("type"=>200,"varname"=>"USUARIO_ULTIMA_MOD");
$dalTableEVENTO["CIUDAD"] = array("type"=>14,"varname"=>"CIUDAD");
	$dalTableEVENTO["EVENTO_ID"]["key"]=true;
$dal_info["EVENTO"]=&$dalTableEVENTO;

?>
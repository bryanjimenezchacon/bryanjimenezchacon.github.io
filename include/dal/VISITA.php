<?php
$dalTableVISITA = array();
$dalTableVISITA["FEC_VISITA"] = array("type"=>135,"varname"=>"FEC_VISITA");
$dalTableVISITA["USERNAME_VISITANTE"] = array("type"=>200,"varname"=>"USERNAME_VISITANTE");
$dalTableVISITA["USERNAME_VISITADA"] = array("type"=>200,"varname"=>"USERNAME_VISITADA");
$dalTableVISITA["FEC_CREACION"] = array("type"=>135,"varname"=>"FEC_CREACION");
$dalTableVISITA["USUARIO_CREACION"] = array("type"=>200,"varname"=>"USUARIO_CREACION");
$dalTableVISITA["FEC_ULTIMA_MOD"] = array("type"=>135,"varname"=>"FEC_ULTIMA_MOD");
$dalTableVISITA["USUARIO_ULTIMA_MOD"] = array("type"=>200,"varname"=>"USUARIO_ULTIMA_MOD");
	$dalTableVISITA["FEC_VISITA"]["key"]=true;
	$dalTableVISITA["USERNAME_VISITANTE"]["key"]=true;
	$dalTableVISITA["USERNAME_VISITADA"]["key"]=true;
$dal_info["VISITA"]=&$dalTableVISITA;

?>
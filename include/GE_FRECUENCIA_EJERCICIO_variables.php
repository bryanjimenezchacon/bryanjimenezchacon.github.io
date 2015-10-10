<?php
$strTableName="GE.FRECUENCIA_EJERCICIO";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="GE.FRECUENCIA_EJERCICIO";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("GE.FRECUENCIA_EJERCICIO");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["GE.FRECUENCIA_EJERCICIO"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
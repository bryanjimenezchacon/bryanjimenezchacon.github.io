<?php
$strTableName="GE.INTERESXCATEGORIA_INTERES";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="GE.INTERESXCATEGORIA_INTERES";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("GE.INTERESXCATEGORIA_INTERES");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["GE.INTERESXCATEGORIA_INTERES"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
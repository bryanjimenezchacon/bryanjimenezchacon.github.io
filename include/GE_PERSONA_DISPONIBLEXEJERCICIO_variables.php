<?php
$strTableName="GE.PERSONA_DISPONIBLEXEJERCICIO";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="GE.PERSONA_DISPONIBLEXEJERCICIO";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("GE.PERSONA_DISPONIBLEXEJERCICIO");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["GE.PERSONA_DISPONIBLEXEJERCICIO"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
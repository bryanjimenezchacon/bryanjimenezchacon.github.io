<?php
$strTableName="GE.ESTADO_CIVIL";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="GE.ESTADO_CIVIL";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("GE.ESTADO_CIVIL");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["GE.ESTADO_CIVIL"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
<?php
$strTableName="GE.COLOR_PIEL";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="GE.COLOR_PIEL";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("GE.COLOR_PIEL");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["GE.COLOR_PIEL"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
<?php
$strTableName="GE.NIVEL_EDUCACION";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="GE.NIVEL_EDUCACION";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("GE.NIVEL_EDUCACION");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["GE.NIVEL_EDUCACION"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
<?php
$strTableName="GE.PERSONA_DISPONIBLEXRELIGION";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="GE.PERSONA_DISPONIBLEXRELIGION";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("GE.PERSONA_DISPONIBLEXRELIGION");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["GE.PERSONA_DISPONIBLEXRELIGION"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
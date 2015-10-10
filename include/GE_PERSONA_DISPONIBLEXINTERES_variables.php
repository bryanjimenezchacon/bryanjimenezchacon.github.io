<?php
$strTableName="GE.PERSONA_DISPONIBLEXINTERES";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="GE.PERSONA_DISPONIBLEXINTERES";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("GE.PERSONA_DISPONIBLEXINTERES");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["GE.PERSONA_DISPONIBLEXINTERES"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
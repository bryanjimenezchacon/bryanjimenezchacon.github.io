<?php
$strTableName="GE.PERSONA_DISPONIBLEXCOLOR_PELO";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="GE.PERSONA_DISPONIBLEXCOLOR_PELO";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("GE.PERSONA_DISPONIBLEXCOLOR_PELO");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["GE.PERSONA_DISPONIBLEXCOLOR_PELO"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
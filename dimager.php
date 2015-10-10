<?php 
ini_set("display_errors","1");
ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/reportfunctions.php");


//	security - begin



if(!postvalue("rname"))
	return;

$rpt_array = getReportArray(postvalue("rname"));

// if old
if (is_wr_project()) 
	return;



	
$field="";
$table="";
WRSplitFieldName(postvalue("field"),$table,$field);
//	check if field is allowed to display
$show=false;
foreach($rpt_array["totals"] as $fld)
{
	if($fld["table"]==$table && $fld["name"]==$field)
	{
		if($fld["show"])
			$show=true;
		break;
	}
}
if(!$show)
	exit();

//	security - end

//	construct sql

$keys = DBGetTableKeys($table);
if(!count($keys))
	exit();
$strkeywhere = "";
foreach($keys as $idx=>$k)
{
	if(strlen($strkeywhere))
		$strkeywhere.=" and ";
	$strkeywhere.=AddTableWrappers($table).".".AddFieldWrappers($k)."=";
	$type=WRGetFieldType($table.".".$k);
	if(NeedQuotes($type))
		$strkeywhere.=db_prepare_string(postvalue("key".($idx+1)));
	else
	{
		$value=postvalue("key".($idx+1));
		$strvalue = (string)$value;
		$strvalue = str_replace(",",".",$strvalue);
		if(is_numeric($strvalue))
			$value=$strvalue;
		else
			$value=0;
		$strkeywhere.=$value;
	}
}

$strSQL = $rpt_array['sql'] . " WHERE ". $strkeywhere;

$rs = db_query($strSQL,$conn);


if(!$rs || !($data=db_fetch_array($rs)))
  return DisplayNoImage();


$value=db_stripslashesbinary($data[GoodFieldName($table.".".$field)]);
if(!$value)
{
	return DisplayNoImage();
}

$itype=SupposeImageType($value);
if($itype)
	header("Content-Type: ".$itype);
else
	return DisplayFile();
echoBinary($value);
return;


?>

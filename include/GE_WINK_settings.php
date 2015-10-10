<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_WINK = array();	
	$tdataGE_WINK[".truncateText"] = true;
	$tdataGE_WINK[".NumberOfChars"] = 80; 
	$tdataGE_WINK[".ShortName"] = "GE_WINK";
	$tdataGE_WINK[".OwnerID"] = "";
	$tdataGE_WINK[".OriginalTable"] = "GE.WINK";

//	field labels
$fieldLabelsGE_WINK = array();
$fieldToolTipsGE_WINK = array();
$pageTitlesGE_WINK = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_WINK["Spanish"] = array();
	$fieldToolTipsGE_WINK["Spanish"] = array();
	$pageTitlesGE_WINK["Spanish"] = array();
	$fieldLabelsGE_WINK["Spanish"]["FEC_WINK"] = "FEC WINK";
	$fieldToolTipsGE_WINK["Spanish"]["FEC_WINK"] = "";
	$fieldLabelsGE_WINK["Spanish"]["USERNAME_EMISOR"] = "USERNAME EMISOR";
	$fieldToolTipsGE_WINK["Spanish"]["USERNAME_EMISOR"] = "";
	$fieldLabelsGE_WINK["Spanish"]["USERNAME_RECEPTOR"] = "USERNAME RECEPTOR";
	$fieldToolTipsGE_WINK["Spanish"]["USERNAME_RECEPTOR"] = "";
	$fieldLabelsGE_WINK["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_WINK["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_WINK["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_WINK["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_WINK["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_WINK["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_WINK["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_WINK["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_WINK["Spanish"]))
		$tdataGE_WINK[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_WINK[""] = array();
	$fieldToolTipsGE_WINK[""] = array();
	$pageTitlesGE_WINK[""] = array();
	$fieldLabelsGE_WINK[""]["FEC_WINK"] = "FEC WINK";
	$fieldToolTipsGE_WINK[""]["FEC_WINK"] = "";
	$fieldLabelsGE_WINK[""]["USERNAME_EMISOR"] = "USERNAME EMISOR";
	$fieldToolTipsGE_WINK[""]["USERNAME_EMISOR"] = "";
	$fieldLabelsGE_WINK[""]["USERNAME_RECEPTOR"] = "USERNAME RECEPTOR";
	$fieldToolTipsGE_WINK[""]["USERNAME_RECEPTOR"] = "";
	$fieldLabelsGE_WINK[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_WINK[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_WINK[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_WINK[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_WINK[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_WINK[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_WINK[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_WINK[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_WINK[""]))
		$tdataGE_WINK[".isUseToolTips"] = true;
}
	
	
	$tdataGE_WINK[".NCSearch"] = true;



$tdataGE_WINK[".shortTableName"] = "GE_WINK";
$tdataGE_WINK[".nSecOptions"] = 0;
$tdataGE_WINK[".recsPerRowList"] = 1;
$tdataGE_WINK[".mainTableOwnerID"] = "";
$tdataGE_WINK[".moveNext"] = 1;
$tdataGE_WINK[".nType"] = 0;

$tdataGE_WINK[".strOriginalTableName"] = "GE.WINK";




$tdataGE_WINK[".showAddInPopup"] = false;

$tdataGE_WINK[".showEditInPopup"] = false;

$tdataGE_WINK[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_WINK[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_WINK[".fieldsForRegister"] = array();

$tdataGE_WINK[".listAjax"] = false;

	$tdataGE_WINK[".audit"] = false;

	$tdataGE_WINK[".locking"] = false;

$tdataGE_WINK[".edit"] = true;

$tdataGE_WINK[".list"] = true;

$tdataGE_WINK[".inlineEdit"] = true;
$tdataGE_WINK[".inlineAdd"] = true;
$tdataGE_WINK[".view"] = true;

$tdataGE_WINK[".import"] = true;

$tdataGE_WINK[".exportTo"] = true;

$tdataGE_WINK[".printFriendly"] = true;

$tdataGE_WINK[".delete"] = true;

$tdataGE_WINK[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_WINK[".searchSaving"] = false;
//

$tdataGE_WINK[".showSearchPanel"] = true;
		$tdataGE_WINK[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_WINK[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_WINK[".isUseAjaxSuggest"] = true;

$tdataGE_WINK[".rowHighlite"] = true;



$tdataGE_WINK[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_WINK[".isUseTimeForSearch"] = false;





$tdataGE_WINK[".allSearchFields"] = array();
$tdataGE_WINK[".filterFields"] = array();
$tdataGE_WINK[".requiredSearchFields"] = array();

$tdataGE_WINK[".allSearchFields"][] = "FEC_WINK";
	$tdataGE_WINK[".allSearchFields"][] = "USERNAME_EMISOR";
	$tdataGE_WINK[".allSearchFields"][] = "USERNAME_RECEPTOR";
	$tdataGE_WINK[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_WINK[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_WINK[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_WINK[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_WINK[".googleLikeFields"] = array();
$tdataGE_WINK[".googleLikeFields"][] = "FEC_WINK";
$tdataGE_WINK[".googleLikeFields"][] = "USERNAME_EMISOR";
$tdataGE_WINK[".googleLikeFields"][] = "USERNAME_RECEPTOR";
$tdataGE_WINK[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_WINK[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_WINK[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_WINK[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_WINK[".advSearchFields"] = array();
$tdataGE_WINK[".advSearchFields"][] = "FEC_WINK";
$tdataGE_WINK[".advSearchFields"][] = "USERNAME_EMISOR";
$tdataGE_WINK[".advSearchFields"][] = "USERNAME_RECEPTOR";
$tdataGE_WINK[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_WINK[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_WINK[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_WINK[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_WINK[".tableType"] = "list";

$tdataGE_WINK[".printerPageOrientation"] = 0;
$tdataGE_WINK[".nPrinterPageScale"] = 100;

$tdataGE_WINK[".nPrinterSplitRecords"] = 40;

$tdataGE_WINK[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_WINK[".pageSize"] = 20;

$tdataGE_WINK[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_WINK[".strOrderBy"] = $tstrOrderBy;

$tdataGE_WINK[".orderindexes"] = array();

$tdataGE_WINK[".sqlHead"] = "SELECT FEC_WINK,   USERNAME_EMISOR,   USERNAME_RECEPTOR,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$tdataGE_WINK[".sqlFrom"] = "FROM GE.WINK";
$tdataGE_WINK[".sqlWhereExpr"] = "";
$tdataGE_WINK[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_WINK[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_WINK[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_WINK[".highlightSearchResults"] = true;

$tableKeysGE_WINK = array();
$tableKeysGE_WINK[] = "FEC_WINK";
$tableKeysGE_WINK[] = "USERNAME_EMISOR";
$tableKeysGE_WINK[] = "USERNAME_RECEPTOR";
$tdataGE_WINK[".Keys"] = $tableKeysGE_WINK;

$tdataGE_WINK[".listFields"] = array();
$tdataGE_WINK[".listFields"][] = "FEC_WINK";
$tdataGE_WINK[".listFields"][] = "USERNAME_EMISOR";
$tdataGE_WINK[".listFields"][] = "USERNAME_RECEPTOR";
$tdataGE_WINK[".listFields"][] = "FEC_CREACION";
$tdataGE_WINK[".listFields"][] = "USUARIO_CREACION";
$tdataGE_WINK[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_WINK[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_WINK[".hideMobileList"] = array();


$tdataGE_WINK[".viewFields"] = array();
$tdataGE_WINK[".viewFields"][] = "FEC_WINK";
$tdataGE_WINK[".viewFields"][] = "USERNAME_EMISOR";
$tdataGE_WINK[".viewFields"][] = "USERNAME_RECEPTOR";
$tdataGE_WINK[".viewFields"][] = "FEC_CREACION";
$tdataGE_WINK[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_WINK[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_WINK[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_WINK[".addFields"] = array();
$tdataGE_WINK[".addFields"][] = "FEC_WINK";
$tdataGE_WINK[".addFields"][] = "USERNAME_EMISOR";
$tdataGE_WINK[".addFields"][] = "USERNAME_RECEPTOR";

$tdataGE_WINK[".inlineAddFields"] = array();
$tdataGE_WINK[".inlineAddFields"][] = "FEC_WINK";
$tdataGE_WINK[".inlineAddFields"][] = "USERNAME_EMISOR";
$tdataGE_WINK[".inlineAddFields"][] = "USERNAME_RECEPTOR";
$tdataGE_WINK[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_WINK[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_WINK[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_WINK[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_WINK[".editFields"] = array();
$tdataGE_WINK[".editFields"][] = "FEC_WINK";
$tdataGE_WINK[".editFields"][] = "USERNAME_EMISOR";
$tdataGE_WINK[".editFields"][] = "USERNAME_RECEPTOR";

$tdataGE_WINK[".inlineEditFields"] = array();
$tdataGE_WINK[".inlineEditFields"][] = "FEC_WINK";
$tdataGE_WINK[".inlineEditFields"][] = "USERNAME_EMISOR";
$tdataGE_WINK[".inlineEditFields"][] = "USERNAME_RECEPTOR";
$tdataGE_WINK[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_WINK[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_WINK[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_WINK[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_WINK[".exportFields"] = array();
$tdataGE_WINK[".exportFields"][] = "FEC_WINK";
$tdataGE_WINK[".exportFields"][] = "USERNAME_EMISOR";
$tdataGE_WINK[".exportFields"][] = "USERNAME_RECEPTOR";
$tdataGE_WINK[".exportFields"][] = "FEC_CREACION";
$tdataGE_WINK[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_WINK[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_WINK[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_WINK[".importFields"] = array();
$tdataGE_WINK[".importFields"][] = "FEC_WINK";
$tdataGE_WINK[".importFields"][] = "USERNAME_EMISOR";
$tdataGE_WINK[".importFields"][] = "USERNAME_RECEPTOR";
$tdataGE_WINK[".importFields"][] = "FEC_CREACION";
$tdataGE_WINK[".importFields"][] = "USUARIO_CREACION";
$tdataGE_WINK[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_WINK[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_WINK[".printFields"] = array();
$tdataGE_WINK[".printFields"][] = "FEC_WINK";
$tdataGE_WINK[".printFields"][] = "USERNAME_EMISOR";
$tdataGE_WINK[".printFields"][] = "USERNAME_RECEPTOR";
$tdataGE_WINK[".printFields"][] = "FEC_CREACION";
$tdataGE_WINK[".printFields"][] = "USUARIO_CREACION";
$tdataGE_WINK[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_WINK[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	FEC_WINK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "FEC_WINK";
	$fdata["GoodName"] = "FEC_WINK";
	$fdata["ownerTable"] = "GE.WINK";
	$fdata["Label"] = GetFieldLabel("GE_WINK","FEC_WINK"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FEC_WINK"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FEC_WINK";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataGE_WINK["FEC_WINK"] = $fdata;
//	USERNAME_EMISOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USERNAME_EMISOR";
	$fdata["GoodName"] = "USERNAME_EMISOR";
	$fdata["ownerTable"] = "GE.WINK";
	$fdata["Label"] = GetFieldLabel("GE_WINK","USERNAME_EMISOR"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "USERNAME_EMISOR"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USERNAME_EMISOR";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "GE.PERSONA";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "USERNAME";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "USERNAME";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataGE_WINK["USERNAME_EMISOR"] = $fdata;
//	USERNAME_RECEPTOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "USERNAME_RECEPTOR";
	$fdata["GoodName"] = "USERNAME_RECEPTOR";
	$fdata["ownerTable"] = "GE.WINK";
	$fdata["Label"] = GetFieldLabel("GE_WINK","USERNAME_RECEPTOR"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "USERNAME_RECEPTOR"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USERNAME_RECEPTOR";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "GE.PERSONA";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "USERNAME";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "USERNAME";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataGE_WINK["USERNAME_RECEPTOR"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.WINK";
	$fdata["Label"] = GetFieldLabel("GE_WINK","FEC_CREACION"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FEC_CREACION"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FEC_CREACION";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataGE_WINK["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.WINK";
	$fdata["Label"] = GetFieldLabel("GE_WINK","USUARIO_CREACION"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "USUARIO_CREACION"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USUARIO_CREACION";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataGE_WINK["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.WINK";
	$fdata["Label"] = GetFieldLabel("GE_WINK","FEC_ULTIMA_MOD"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FEC_ULTIMA_MOD"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FEC_ULTIMA_MOD";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		$edata["ShowTime"] = true; 
		
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataGE_WINK["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.WINK";
	$fdata["Label"] = GetFieldLabel("GE_WINK","USUARIO_ULTIMA_MOD"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "USUARIO_ULTIMA_MOD"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USUARIO_ULTIMA_MOD";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataGE_WINK["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.WINK"]=&$tdataGE_WINK;
$field_labels["GE_WINK"] = &$fieldLabelsGE_WINK;
$fieldToolTips["GE.WINK"] = &$fieldToolTipsGE_WINK;
$page_titles["GE_WINK"] = &$pageTitlesGE_WINK;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.WINK"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.WINK"] = array();


	
				$strOriginalDetailsTable="GE.PERSONA";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="GE.PERSONA";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "GE_PERSONA";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["GE.WINK"][0] = $masterParams;	
				$masterTablesData["GE.WINK"][0]["masterKeys"] = array();
	$masterTablesData["GE.WINK"][0]["masterKeys"][]="USERNAME";
				$masterTablesData["GE.WINK"][0]["masterKeys"][]="USERNAME";
				$masterTablesData["GE.WINK"][0]["detailKeys"] = array();
	$masterTablesData["GE.WINK"][0]["detailKeys"][]="USERNAME_EMISOR";
				$masterTablesData["GE.WINK"][0]["detailKeys"][]="USERNAME_RECEPTOR";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_WINK()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "FEC_WINK,   USERNAME_EMISOR,   USERNAME_RECEPTOR,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.WINK";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_WINK",
	"m_strTable" => "GE.WINK",
	"m_srcTableName" => "GE.WINK"
));

$proto5["m_sql"] = "FEC_WINK";
$proto5["m_srcTableName"] = "GE.WINK";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "USERNAME_EMISOR",
	"m_strTable" => "GE.WINK",
	"m_srcTableName" => "GE.WINK"
));

$proto7["m_sql"] = "USERNAME_EMISOR";
$proto7["m_srcTableName"] = "GE.WINK";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "USERNAME_RECEPTOR",
	"m_strTable" => "GE.WINK",
	"m_srcTableName" => "GE.WINK"
));

$proto9["m_sql"] = "USERNAME_RECEPTOR";
$proto9["m_srcTableName"] = "GE.WINK";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.WINK",
	"m_srcTableName" => "GE.WINK"
));

$proto11["m_sql"] = "FEC_CREACION";
$proto11["m_srcTableName"] = "GE.WINK";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.WINK",
	"m_srcTableName" => "GE.WINK"
));

$proto13["m_sql"] = "USUARIO_CREACION";
$proto13["m_srcTableName"] = "GE.WINK";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.WINK",
	"m_srcTableName" => "GE.WINK"
));

$proto15["m_sql"] = "FEC_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.WINK";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.WINK",
	"m_srcTableName" => "GE.WINK"
));

$proto17["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto17["m_srcTableName"] = "GE.WINK";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "GE.WINK";
$proto20["m_srcTableName"] = "GE.WINK";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "FEC_WINK";
$proto20["m_columns"][] = "USERNAME_EMISOR";
$proto20["m_columns"][] = "USERNAME_RECEPTOR";
$proto20["m_columns"][] = "FEC_CREACION";
$proto20["m_columns"][] = "USUARIO_CREACION";
$proto20["m_columns"][] = "FEC_ULTIMA_MOD";
$proto20["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "GE.WINK";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "GE.WINK";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="GE.WINK";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_WINK = createSqlQuery_GE_WINK();


	
							
	
$tdataGE_WINK[".sqlquery"] = $queryData_GE_WINK;

$tableEvents["GE.WINK"] = new eventsBase;
$tdataGE_WINK[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_EDAD = array();	
	$tdataGE_EDAD[".truncateText"] = true;
	$tdataGE_EDAD[".NumberOfChars"] = 80; 
	$tdataGE_EDAD[".ShortName"] = "GE_EDAD";
	$tdataGE_EDAD[".OwnerID"] = "";
	$tdataGE_EDAD[".OriginalTable"] = "GE.EDAD";

//	field labels
$fieldLabelsGE_EDAD = array();
$fieldToolTipsGE_EDAD = array();
$pageTitlesGE_EDAD = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_EDAD["Spanish"] = array();
	$fieldToolTipsGE_EDAD["Spanish"] = array();
	$pageTitlesGE_EDAD["Spanish"] = array();
	$fieldLabelsGE_EDAD["Spanish"]["EDAD_ID"] = "EDAD ID";
	$fieldToolTipsGE_EDAD["Spanish"]["EDAD_ID"] = "";
	$fieldLabelsGE_EDAD["Spanish"]["RANGO"] = "RANGO";
	$fieldToolTipsGE_EDAD["Spanish"]["RANGO"] = "";
	$fieldLabelsGE_EDAD["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_EDAD["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_EDAD["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_EDAD["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_EDAD["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_EDAD["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_EDAD["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_EDAD["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_EDAD["Spanish"]))
		$tdataGE_EDAD[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_EDAD[""] = array();
	$fieldToolTipsGE_EDAD[""] = array();
	$pageTitlesGE_EDAD[""] = array();
	$fieldLabelsGE_EDAD[""]["EDAD_ID"] = "EDAD ID";
	$fieldToolTipsGE_EDAD[""]["EDAD_ID"] = "";
	$fieldLabelsGE_EDAD[""]["RANGO"] = "RANGO";
	$fieldToolTipsGE_EDAD[""]["RANGO"] = "";
	$fieldLabelsGE_EDAD[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_EDAD[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_EDAD[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_EDAD[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_EDAD[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_EDAD[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_EDAD[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_EDAD[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_EDAD[""]))
		$tdataGE_EDAD[".isUseToolTips"] = true;
}
	
	
	$tdataGE_EDAD[".NCSearch"] = true;



$tdataGE_EDAD[".shortTableName"] = "GE_EDAD";
$tdataGE_EDAD[".nSecOptions"] = 0;
$tdataGE_EDAD[".recsPerRowList"] = 1;
$tdataGE_EDAD[".mainTableOwnerID"] = "";
$tdataGE_EDAD[".moveNext"] = 1;
$tdataGE_EDAD[".nType"] = 0;

$tdataGE_EDAD[".strOriginalTableName"] = "GE.EDAD";




$tdataGE_EDAD[".showAddInPopup"] = false;

$tdataGE_EDAD[".showEditInPopup"] = false;

$tdataGE_EDAD[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_EDAD[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_EDAD[".fieldsForRegister"] = array();

$tdataGE_EDAD[".listAjax"] = false;

	$tdataGE_EDAD[".audit"] = false;

	$tdataGE_EDAD[".locking"] = false;

$tdataGE_EDAD[".edit"] = true;

$tdataGE_EDAD[".list"] = true;

$tdataGE_EDAD[".inlineEdit"] = true;
$tdataGE_EDAD[".inlineAdd"] = true;
$tdataGE_EDAD[".view"] = true;

$tdataGE_EDAD[".import"] = true;

$tdataGE_EDAD[".exportTo"] = true;

$tdataGE_EDAD[".printFriendly"] = true;

$tdataGE_EDAD[".delete"] = true;

$tdataGE_EDAD[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_EDAD[".searchSaving"] = false;
//

$tdataGE_EDAD[".showSearchPanel"] = true;
		$tdataGE_EDAD[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_EDAD[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_EDAD[".isUseAjaxSuggest"] = true;

$tdataGE_EDAD[".rowHighlite"] = true;



$tdataGE_EDAD[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_EDAD[".isUseTimeForSearch"] = false;





$tdataGE_EDAD[".allSearchFields"] = array();
$tdataGE_EDAD[".filterFields"] = array();
$tdataGE_EDAD[".requiredSearchFields"] = array();

$tdataGE_EDAD[".allSearchFields"][] = "EDAD_ID";
	$tdataGE_EDAD[".allSearchFields"][] = "RANGO";
	$tdataGE_EDAD[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_EDAD[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_EDAD[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_EDAD[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_EDAD[".googleLikeFields"] = array();
$tdataGE_EDAD[".googleLikeFields"][] = "EDAD_ID";
$tdataGE_EDAD[".googleLikeFields"][] = "RANGO";
$tdataGE_EDAD[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_EDAD[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_EDAD[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EDAD[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_EDAD[".advSearchFields"] = array();
$tdataGE_EDAD[".advSearchFields"][] = "EDAD_ID";
$tdataGE_EDAD[".advSearchFields"][] = "RANGO";
$tdataGE_EDAD[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_EDAD[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_EDAD[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EDAD[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_EDAD[".tableType"] = "list";

$tdataGE_EDAD[".printerPageOrientation"] = 0;
$tdataGE_EDAD[".nPrinterPageScale"] = 100;

$tdataGE_EDAD[".nPrinterSplitRecords"] = 40;

$tdataGE_EDAD[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_EDAD[".pageSize"] = 20;

$tdataGE_EDAD[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_EDAD[".strOrderBy"] = $tstrOrderBy;

$tdataGE_EDAD[".orderindexes"] = array();

$tdataGE_EDAD[".sqlHead"] = "SELECT EDAD_ID,   RANGO,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$tdataGE_EDAD[".sqlFrom"] = "FROM GE.EDAD";
$tdataGE_EDAD[".sqlWhereExpr"] = "";
$tdataGE_EDAD[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_EDAD[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_EDAD[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_EDAD[".highlightSearchResults"] = true;

$tableKeysGE_EDAD = array();
$tableKeysGE_EDAD[] = "EDAD_ID";
$tdataGE_EDAD[".Keys"] = $tableKeysGE_EDAD;

$tdataGE_EDAD[".listFields"] = array();
$tdataGE_EDAD[".listFields"][] = "EDAD_ID";
$tdataGE_EDAD[".listFields"][] = "RANGO";
$tdataGE_EDAD[".listFields"][] = "FEC_CREACION";
$tdataGE_EDAD[".listFields"][] = "USUARIO_CREACION";
$tdataGE_EDAD[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EDAD[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_EDAD[".hideMobileList"] = array();


$tdataGE_EDAD[".viewFields"] = array();
$tdataGE_EDAD[".viewFields"][] = "EDAD_ID";
$tdataGE_EDAD[".viewFields"][] = "RANGO";
$tdataGE_EDAD[".viewFields"][] = "FEC_CREACION";
$tdataGE_EDAD[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_EDAD[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EDAD[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_EDAD[".addFields"] = array();
$tdataGE_EDAD[".addFields"][] = "EDAD_ID";
$tdataGE_EDAD[".addFields"][] = "RANGO";

$tdataGE_EDAD[".inlineAddFields"] = array();
$tdataGE_EDAD[".inlineAddFields"][] = "EDAD_ID";
$tdataGE_EDAD[".inlineAddFields"][] = "RANGO";
$tdataGE_EDAD[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_EDAD[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_EDAD[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EDAD[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_EDAD[".editFields"] = array();
$tdataGE_EDAD[".editFields"][] = "EDAD_ID";
$tdataGE_EDAD[".editFields"][] = "RANGO";

$tdataGE_EDAD[".inlineEditFields"] = array();
$tdataGE_EDAD[".inlineEditFields"][] = "EDAD_ID";
$tdataGE_EDAD[".inlineEditFields"][] = "RANGO";
$tdataGE_EDAD[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_EDAD[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_EDAD[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EDAD[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_EDAD[".exportFields"] = array();
$tdataGE_EDAD[".exportFields"][] = "EDAD_ID";
$tdataGE_EDAD[".exportFields"][] = "RANGO";
$tdataGE_EDAD[".exportFields"][] = "FEC_CREACION";
$tdataGE_EDAD[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_EDAD[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EDAD[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_EDAD[".importFields"] = array();
$tdataGE_EDAD[".importFields"][] = "EDAD_ID";
$tdataGE_EDAD[".importFields"][] = "RANGO";
$tdataGE_EDAD[".importFields"][] = "FEC_CREACION";
$tdataGE_EDAD[".importFields"][] = "USUARIO_CREACION";
$tdataGE_EDAD[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EDAD[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_EDAD[".printFields"] = array();
$tdataGE_EDAD[".printFields"][] = "EDAD_ID";
$tdataGE_EDAD[".printFields"][] = "RANGO";
$tdataGE_EDAD[".printFields"][] = "FEC_CREACION";
$tdataGE_EDAD[".printFields"][] = "USUARIO_CREACION";
$tdataGE_EDAD[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EDAD[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	EDAD_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EDAD_ID";
	$fdata["GoodName"] = "EDAD_ID";
	$fdata["ownerTable"] = "GE.EDAD";
	$fdata["Label"] = GetFieldLabel("GE_EDAD","EDAD_ID"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EDAD_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EDAD_ID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataGE_EDAD["EDAD_ID"] = $fdata;
//	RANGO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RANGO";
	$fdata["GoodName"] = "RANGO";
	$fdata["ownerTable"] = "GE.EDAD";
	$fdata["Label"] = GetFieldLabel("GE_EDAD","RANGO"); 
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
	
		$fdata["strField"] = "RANGO"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RANGO";
	
		
		
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
			$edata["EditParams"].= " maxlength=20";
	
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

	

	
	$tdataGE_EDAD["RANGO"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.EDAD";
	$fdata["Label"] = GetFieldLabel("GE_EDAD","FEC_CREACION"); 
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

	

	
	$tdataGE_EDAD["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.EDAD";
	$fdata["Label"] = GetFieldLabel("GE_EDAD","USUARIO_CREACION"); 
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
			$edata["EditParams"].= " maxlength=20";
	
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

	

	
	$tdataGE_EDAD["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.EDAD";
	$fdata["Label"] = GetFieldLabel("GE_EDAD","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_EDAD["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.EDAD";
	$fdata["Label"] = GetFieldLabel("GE_EDAD","USUARIO_ULTIMA_MOD"); 
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
			$edata["EditParams"].= " maxlength=20";
	
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

	

	
	$tdataGE_EDAD["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.EDAD"]=&$tdataGE_EDAD;
$field_labels["GE_EDAD"] = &$fieldLabelsGE_EDAD;
$fieldToolTips["GE.EDAD"] = &$fieldToolTipsGE_EDAD;
$page_titles["GE_EDAD"] = &$pageTitlesGE_EDAD;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.EDAD"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.EDAD"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_EDAD()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EDAD_ID,   RANGO,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.EDAD";
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
	"m_strName" => "EDAD_ID",
	"m_strTable" => "GE.EDAD",
	"m_srcTableName" => "GE.EDAD"
));

$proto5["m_sql"] = "EDAD_ID";
$proto5["m_srcTableName"] = "GE.EDAD";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "RANGO",
	"m_strTable" => "GE.EDAD",
	"m_srcTableName" => "GE.EDAD"
));

$proto7["m_sql"] = "RANGO";
$proto7["m_srcTableName"] = "GE.EDAD";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.EDAD",
	"m_srcTableName" => "GE.EDAD"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.EDAD";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.EDAD",
	"m_srcTableName" => "GE.EDAD"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.EDAD";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.EDAD",
	"m_srcTableName" => "GE.EDAD"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.EDAD";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.EDAD",
	"m_srcTableName" => "GE.EDAD"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.EDAD";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.EDAD";
$proto18["m_srcTableName"] = "GE.EDAD";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "EDAD_ID";
$proto18["m_columns"][] = "RANGO";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.EDAD";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.EDAD";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="GE.EDAD";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_EDAD = createSqlQuery_GE_EDAD();


	
						
	
$tdataGE_EDAD[".sqlquery"] = $queryData_GE_EDAD;

$tableEvents["GE.EDAD"] = new eventsBase;
$tdataGE_EDAD[".hasEvents"] = false;

?>
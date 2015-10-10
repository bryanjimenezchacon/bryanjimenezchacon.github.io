<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_COLOR_OJOS = array();	
	$tdataGE_COLOR_OJOS[".truncateText"] = true;
	$tdataGE_COLOR_OJOS[".NumberOfChars"] = 80; 
	$tdataGE_COLOR_OJOS[".ShortName"] = "GE_COLOR_OJOS";
	$tdataGE_COLOR_OJOS[".OwnerID"] = "";
	$tdataGE_COLOR_OJOS[".OriginalTable"] = "GE.COLOR_OJOS";

//	field labels
$fieldLabelsGE_COLOR_OJOS = array();
$fieldToolTipsGE_COLOR_OJOS = array();
$pageTitlesGE_COLOR_OJOS = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_COLOR_OJOS["Spanish"] = array();
	$fieldToolTipsGE_COLOR_OJOS["Spanish"] = array();
	$pageTitlesGE_COLOR_OJOS["Spanish"] = array();
	$fieldLabelsGE_COLOR_OJOS["Spanish"]["COLOR_OJOS_ID"] = "COLOR OJOS ID";
	$fieldToolTipsGE_COLOR_OJOS["Spanish"]["COLOR_OJOS_ID"] = "";
	$fieldLabelsGE_COLOR_OJOS["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_COLOR_OJOS["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGE_COLOR_OJOS["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_COLOR_OJOS["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_COLOR_OJOS["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_COLOR_OJOS["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_COLOR_OJOS["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_COLOR_OJOS["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_COLOR_OJOS["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_COLOR_OJOS["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_COLOR_OJOS["Spanish"]))
		$tdataGE_COLOR_OJOS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_COLOR_OJOS[""] = array();
	$fieldToolTipsGE_COLOR_OJOS[""] = array();
	$pageTitlesGE_COLOR_OJOS[""] = array();
	$fieldLabelsGE_COLOR_OJOS[""]["COLOR_OJOS_ID"] = "COLOR OJOS ID";
	$fieldToolTipsGE_COLOR_OJOS[""]["COLOR_OJOS_ID"] = "";
	$fieldLabelsGE_COLOR_OJOS[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_COLOR_OJOS[""]["NOMBRE"] = "";
	$fieldLabelsGE_COLOR_OJOS[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_COLOR_OJOS[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_COLOR_OJOS[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_COLOR_OJOS[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_COLOR_OJOS[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_COLOR_OJOS[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_COLOR_OJOS[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_COLOR_OJOS[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_COLOR_OJOS[""]))
		$tdataGE_COLOR_OJOS[".isUseToolTips"] = true;
}
	
	
	$tdataGE_COLOR_OJOS[".NCSearch"] = true;



$tdataGE_COLOR_OJOS[".shortTableName"] = "GE_COLOR_OJOS";
$tdataGE_COLOR_OJOS[".nSecOptions"] = 0;
$tdataGE_COLOR_OJOS[".recsPerRowList"] = 1;
$tdataGE_COLOR_OJOS[".mainTableOwnerID"] = "";
$tdataGE_COLOR_OJOS[".moveNext"] = 1;
$tdataGE_COLOR_OJOS[".nType"] = 0;

$tdataGE_COLOR_OJOS[".strOriginalTableName"] = "GE.COLOR_OJOS";




$tdataGE_COLOR_OJOS[".showAddInPopup"] = false;

$tdataGE_COLOR_OJOS[".showEditInPopup"] = false;

$tdataGE_COLOR_OJOS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_COLOR_OJOS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_COLOR_OJOS[".fieldsForRegister"] = array();

$tdataGE_COLOR_OJOS[".listAjax"] = false;

	$tdataGE_COLOR_OJOS[".audit"] = false;

	$tdataGE_COLOR_OJOS[".locking"] = false;

$tdataGE_COLOR_OJOS[".edit"] = true;

$tdataGE_COLOR_OJOS[".list"] = true;

$tdataGE_COLOR_OJOS[".inlineEdit"] = true;
$tdataGE_COLOR_OJOS[".inlineAdd"] = true;
$tdataGE_COLOR_OJOS[".view"] = true;

$tdataGE_COLOR_OJOS[".import"] = true;

$tdataGE_COLOR_OJOS[".exportTo"] = true;

$tdataGE_COLOR_OJOS[".printFriendly"] = true;

$tdataGE_COLOR_OJOS[".delete"] = true;

$tdataGE_COLOR_OJOS[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_COLOR_OJOS[".searchSaving"] = false;
//

$tdataGE_COLOR_OJOS[".showSearchPanel"] = true;
		$tdataGE_COLOR_OJOS[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_COLOR_OJOS[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_COLOR_OJOS[".isUseAjaxSuggest"] = true;

$tdataGE_COLOR_OJOS[".rowHighlite"] = true;



$tdataGE_COLOR_OJOS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_COLOR_OJOS[".isUseTimeForSearch"] = false;



$tdataGE_COLOR_OJOS[".useDetailsPreview"] = true;


$tdataGE_COLOR_OJOS[".allSearchFields"] = array();
$tdataGE_COLOR_OJOS[".filterFields"] = array();
$tdataGE_COLOR_OJOS[".requiredSearchFields"] = array();

$tdataGE_COLOR_OJOS[".allSearchFields"][] = "COLOR_OJOS_ID";
	$tdataGE_COLOR_OJOS[".allSearchFields"][] = "NOMBRE";
	$tdataGE_COLOR_OJOS[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_COLOR_OJOS[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_COLOR_OJOS[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_COLOR_OJOS[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_COLOR_OJOS[".googleLikeFields"] = array();
$tdataGE_COLOR_OJOS[".googleLikeFields"][] = "COLOR_OJOS_ID";
$tdataGE_COLOR_OJOS[".googleLikeFields"][] = "NOMBRE";
$tdataGE_COLOR_OJOS[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_COLOR_OJOS[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_OJOS[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_OJOS[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_COLOR_OJOS[".advSearchFields"] = array();
$tdataGE_COLOR_OJOS[".advSearchFields"][] = "COLOR_OJOS_ID";
$tdataGE_COLOR_OJOS[".advSearchFields"][] = "NOMBRE";
$tdataGE_COLOR_OJOS[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_COLOR_OJOS[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_OJOS[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_OJOS[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_OJOS[".tableType"] = "list";

$tdataGE_COLOR_OJOS[".printerPageOrientation"] = 0;
$tdataGE_COLOR_OJOS[".nPrinterPageScale"] = 100;

$tdataGE_COLOR_OJOS[".nPrinterSplitRecords"] = 40;

$tdataGE_COLOR_OJOS[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_COLOR_OJOS[".pageSize"] = 20;

$tdataGE_COLOR_OJOS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_COLOR_OJOS[".strOrderBy"] = $tstrOrderBy;

$tdataGE_COLOR_OJOS[".orderindexes"] = array();

$tdataGE_COLOR_OJOS[".sqlHead"] = "SELECT COLOR_OJOS_ID,  NOMBRE,  FEC_CREACION,  USUARIO_CREACION,  FEC_ULTIMA_MOD,  USUARIO_ULTIMA_MOD";
$tdataGE_COLOR_OJOS[".sqlFrom"] = "FROM GE.COLOR_OJOS";
$tdataGE_COLOR_OJOS[".sqlWhereExpr"] = "";
$tdataGE_COLOR_OJOS[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_COLOR_OJOS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_COLOR_OJOS[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_COLOR_OJOS[".highlightSearchResults"] = true;

$tableKeysGE_COLOR_OJOS = array();
$tableKeysGE_COLOR_OJOS[] = "COLOR_OJOS_ID";
$tdataGE_COLOR_OJOS[".Keys"] = $tableKeysGE_COLOR_OJOS;

$tdataGE_COLOR_OJOS[".listFields"] = array();
$tdataGE_COLOR_OJOS[".listFields"][] = "COLOR_OJOS_ID";
$tdataGE_COLOR_OJOS[".listFields"][] = "NOMBRE";
$tdataGE_COLOR_OJOS[".listFields"][] = "FEC_CREACION";
$tdataGE_COLOR_OJOS[".listFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_OJOS[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_OJOS[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_OJOS[".hideMobileList"] = array();


$tdataGE_COLOR_OJOS[".viewFields"] = array();
$tdataGE_COLOR_OJOS[".viewFields"][] = "COLOR_OJOS_ID";
$tdataGE_COLOR_OJOS[".viewFields"][] = "NOMBRE";
$tdataGE_COLOR_OJOS[".viewFields"][] = "FEC_CREACION";
$tdataGE_COLOR_OJOS[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_OJOS[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_OJOS[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_OJOS[".addFields"] = array();
$tdataGE_COLOR_OJOS[".addFields"][] = "COLOR_OJOS_ID";
$tdataGE_COLOR_OJOS[".addFields"][] = "NOMBRE";

$tdataGE_COLOR_OJOS[".inlineAddFields"] = array();
$tdataGE_COLOR_OJOS[".inlineAddFields"][] = "COLOR_OJOS_ID";
$tdataGE_COLOR_OJOS[".inlineAddFields"][] = "NOMBRE";
$tdataGE_COLOR_OJOS[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_COLOR_OJOS[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_OJOS[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_OJOS[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_OJOS[".editFields"] = array();
$tdataGE_COLOR_OJOS[".editFields"][] = "COLOR_OJOS_ID";
$tdataGE_COLOR_OJOS[".editFields"][] = "NOMBRE";

$tdataGE_COLOR_OJOS[".inlineEditFields"] = array();
$tdataGE_COLOR_OJOS[".inlineEditFields"][] = "COLOR_OJOS_ID";
$tdataGE_COLOR_OJOS[".inlineEditFields"][] = "NOMBRE";
$tdataGE_COLOR_OJOS[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_COLOR_OJOS[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_OJOS[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_OJOS[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_OJOS[".exportFields"] = array();
$tdataGE_COLOR_OJOS[".exportFields"][] = "COLOR_OJOS_ID";
$tdataGE_COLOR_OJOS[".exportFields"][] = "NOMBRE";
$tdataGE_COLOR_OJOS[".exportFields"][] = "FEC_CREACION";
$tdataGE_COLOR_OJOS[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_OJOS[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_OJOS[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_OJOS[".importFields"] = array();
$tdataGE_COLOR_OJOS[".importFields"][] = "COLOR_OJOS_ID";
$tdataGE_COLOR_OJOS[".importFields"][] = "NOMBRE";
$tdataGE_COLOR_OJOS[".importFields"][] = "FEC_CREACION";
$tdataGE_COLOR_OJOS[".importFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_OJOS[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_OJOS[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_OJOS[".printFields"] = array();
$tdataGE_COLOR_OJOS[".printFields"][] = "COLOR_OJOS_ID";
$tdataGE_COLOR_OJOS[".printFields"][] = "NOMBRE";
$tdataGE_COLOR_OJOS[".printFields"][] = "FEC_CREACION";
$tdataGE_COLOR_OJOS[".printFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_OJOS[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_OJOS[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	COLOR_OJOS_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COLOR_OJOS_ID";
	$fdata["GoodName"] = "COLOR_OJOS_ID";
	$fdata["ownerTable"] = "GE.COLOR_OJOS";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_OJOS","COLOR_OJOS_ID"); 
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
	
		$fdata["strField"] = "COLOR_OJOS_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COLOR_OJOS_ID";
	
		
		
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

	

	
	$tdataGE_COLOR_OJOS["COLOR_OJOS_ID"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "GE.COLOR_OJOS";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_OJOS","NOMBRE"); 
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
	
		$fdata["strField"] = "NOMBRE"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMBRE";
	
		
		
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

	

	
	$tdataGE_COLOR_OJOS["NOMBRE"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.COLOR_OJOS";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_OJOS","FEC_CREACION"); 
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

	

	
	$tdataGE_COLOR_OJOS["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.COLOR_OJOS";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_OJOS","USUARIO_CREACION"); 
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

	

	
	$tdataGE_COLOR_OJOS["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.COLOR_OJOS";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_OJOS","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_COLOR_OJOS["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.COLOR_OJOS";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_OJOS","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_COLOR_OJOS["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.COLOR_OJOS"]=&$tdataGE_COLOR_OJOS;
$field_labels["GE_COLOR_OJOS"] = &$fieldLabelsGE_COLOR_OJOS;
$fieldToolTips["GE.COLOR_OJOS"] = &$fieldToolTipsGE_COLOR_OJOS;
$page_titles["GE_COLOR_OJOS"] = &$pageTitlesGE_COLOR_OJOS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.COLOR_OJOS"] = array();
//	GE.PERSONA_DISPONIBLE
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.PERSONA_DISPONIBLE";
		$detailsParam["dOriginalTable"] = "GE.PERSONA_DISPONIBLE";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_PERSONA_DISPONIBLE";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.COLOR_OJOS"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.COLOR_OJOS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.COLOR_OJOS"][$dIndex]["masterKeys"][]="COLOR_OJOS_ID";

				$detailsTablesData["GE.COLOR_OJOS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.COLOR_OJOS"][$dIndex]["detailKeys"][]="COLOR_OJOS_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.COLOR_OJOS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_COLOR_OJOS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COLOR_OJOS_ID,  NOMBRE,  FEC_CREACION,  USUARIO_CREACION,  FEC_ULTIMA_MOD,  USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.COLOR_OJOS";
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
	"m_strName" => "COLOR_OJOS_ID",
	"m_strTable" => "GE.COLOR_OJOS",
	"m_srcTableName" => "GE.COLOR_OJOS"
));

$proto5["m_sql"] = "COLOR_OJOS_ID";
$proto5["m_srcTableName"] = "GE.COLOR_OJOS";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "GE.COLOR_OJOS",
	"m_srcTableName" => "GE.COLOR_OJOS"
));

$proto7["m_sql"] = "NOMBRE";
$proto7["m_srcTableName"] = "GE.COLOR_OJOS";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.COLOR_OJOS",
	"m_srcTableName" => "GE.COLOR_OJOS"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.COLOR_OJOS";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.COLOR_OJOS",
	"m_srcTableName" => "GE.COLOR_OJOS"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.COLOR_OJOS";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.COLOR_OJOS",
	"m_srcTableName" => "GE.COLOR_OJOS"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.COLOR_OJOS";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.COLOR_OJOS",
	"m_srcTableName" => "GE.COLOR_OJOS"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.COLOR_OJOS";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.COLOR_OJOS";
$proto18["m_srcTableName"] = "GE.COLOR_OJOS";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "COLOR_OJOS_ID";
$proto18["m_columns"][] = "NOMBRE";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.COLOR_OJOS";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.COLOR_OJOS";
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
$proto0["m_srcTableName"]="GE.COLOR_OJOS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_COLOR_OJOS = createSqlQuery_GE_COLOR_OJOS();


	
						
	
$tdataGE_COLOR_OJOS[".sqlquery"] = $queryData_GE_COLOR_OJOS;

$tableEvents["GE.COLOR_OJOS"] = new eventsBase;
$tdataGE_COLOR_OJOS[".hasEvents"] = false;

?>
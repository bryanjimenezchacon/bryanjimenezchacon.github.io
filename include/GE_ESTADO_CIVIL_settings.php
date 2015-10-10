<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_ESTADO_CIVIL = array();	
	$tdataGE_ESTADO_CIVIL[".truncateText"] = true;
	$tdataGE_ESTADO_CIVIL[".NumberOfChars"] = 80; 
	$tdataGE_ESTADO_CIVIL[".ShortName"] = "GE_ESTADO_CIVIL";
	$tdataGE_ESTADO_CIVIL[".OwnerID"] = "";
	$tdataGE_ESTADO_CIVIL[".OriginalTable"] = "GE.ESTADO_CIVIL";

//	field labels
$fieldLabelsGE_ESTADO_CIVIL = array();
$fieldToolTipsGE_ESTADO_CIVIL = array();
$pageTitlesGE_ESTADO_CIVIL = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_ESTADO_CIVIL["Spanish"] = array();
	$fieldToolTipsGE_ESTADO_CIVIL["Spanish"] = array();
	$pageTitlesGE_ESTADO_CIVIL["Spanish"] = array();
	$fieldLabelsGE_ESTADO_CIVIL["Spanish"]["ESTADO_CIVIL_ID"] = "ESTADO CIVIL ID";
	$fieldToolTipsGE_ESTADO_CIVIL["Spanish"]["ESTADO_CIVIL_ID"] = "";
	$fieldLabelsGE_ESTADO_CIVIL["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_ESTADO_CIVIL["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGE_ESTADO_CIVIL["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_ESTADO_CIVIL["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_ESTADO_CIVIL["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_ESTADO_CIVIL["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_ESTADO_CIVIL["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_ESTADO_CIVIL["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_ESTADO_CIVIL["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_ESTADO_CIVIL["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_ESTADO_CIVIL["Spanish"]))
		$tdataGE_ESTADO_CIVIL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_ESTADO_CIVIL[""] = array();
	$fieldToolTipsGE_ESTADO_CIVIL[""] = array();
	$pageTitlesGE_ESTADO_CIVIL[""] = array();
	$fieldLabelsGE_ESTADO_CIVIL[""]["ESTADO_CIVIL_ID"] = "ESTADO CIVIL ID";
	$fieldToolTipsGE_ESTADO_CIVIL[""]["ESTADO_CIVIL_ID"] = "";
	$fieldLabelsGE_ESTADO_CIVIL[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_ESTADO_CIVIL[""]["NOMBRE"] = "";
	$fieldLabelsGE_ESTADO_CIVIL[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_ESTADO_CIVIL[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_ESTADO_CIVIL[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_ESTADO_CIVIL[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_ESTADO_CIVIL[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_ESTADO_CIVIL[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_ESTADO_CIVIL[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_ESTADO_CIVIL[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_ESTADO_CIVIL[""]))
		$tdataGE_ESTADO_CIVIL[".isUseToolTips"] = true;
}
	
	
	$tdataGE_ESTADO_CIVIL[".NCSearch"] = true;



$tdataGE_ESTADO_CIVIL[".shortTableName"] = "GE_ESTADO_CIVIL";
$tdataGE_ESTADO_CIVIL[".nSecOptions"] = 0;
$tdataGE_ESTADO_CIVIL[".recsPerRowList"] = 1;
$tdataGE_ESTADO_CIVIL[".mainTableOwnerID"] = "";
$tdataGE_ESTADO_CIVIL[".moveNext"] = 1;
$tdataGE_ESTADO_CIVIL[".nType"] = 0;

$tdataGE_ESTADO_CIVIL[".strOriginalTableName"] = "GE.ESTADO_CIVIL";




$tdataGE_ESTADO_CIVIL[".showAddInPopup"] = false;

$tdataGE_ESTADO_CIVIL[".showEditInPopup"] = false;

$tdataGE_ESTADO_CIVIL[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_ESTADO_CIVIL[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_ESTADO_CIVIL[".fieldsForRegister"] = array();

$tdataGE_ESTADO_CIVIL[".listAjax"] = false;

	$tdataGE_ESTADO_CIVIL[".audit"] = false;

	$tdataGE_ESTADO_CIVIL[".locking"] = false;

$tdataGE_ESTADO_CIVIL[".edit"] = true;

$tdataGE_ESTADO_CIVIL[".list"] = true;

$tdataGE_ESTADO_CIVIL[".inlineEdit"] = true;
$tdataGE_ESTADO_CIVIL[".inlineAdd"] = true;
$tdataGE_ESTADO_CIVIL[".view"] = true;

$tdataGE_ESTADO_CIVIL[".import"] = true;

$tdataGE_ESTADO_CIVIL[".exportTo"] = true;

$tdataGE_ESTADO_CIVIL[".printFriendly"] = true;

$tdataGE_ESTADO_CIVIL[".delete"] = true;

$tdataGE_ESTADO_CIVIL[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_ESTADO_CIVIL[".searchSaving"] = false;
//

$tdataGE_ESTADO_CIVIL[".showSearchPanel"] = true;
		$tdataGE_ESTADO_CIVIL[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_ESTADO_CIVIL[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_ESTADO_CIVIL[".isUseAjaxSuggest"] = true;

$tdataGE_ESTADO_CIVIL[".rowHighlite"] = true;



$tdataGE_ESTADO_CIVIL[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_ESTADO_CIVIL[".isUseTimeForSearch"] = false;



$tdataGE_ESTADO_CIVIL[".useDetailsPreview"] = true;


$tdataGE_ESTADO_CIVIL[".allSearchFields"] = array();
$tdataGE_ESTADO_CIVIL[".filterFields"] = array();
$tdataGE_ESTADO_CIVIL[".requiredSearchFields"] = array();

$tdataGE_ESTADO_CIVIL[".allSearchFields"][] = "ESTADO_CIVIL_ID";
	$tdataGE_ESTADO_CIVIL[".allSearchFields"][] = "NOMBRE";
	$tdataGE_ESTADO_CIVIL[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_ESTADO_CIVIL[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_ESTADO_CIVIL[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_ESTADO_CIVIL[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_ESTADO_CIVIL[".googleLikeFields"] = array();
$tdataGE_ESTADO_CIVIL[".googleLikeFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_ESTADO_CIVIL[".googleLikeFields"][] = "NOMBRE";
$tdataGE_ESTADO_CIVIL[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_ESTADO_CIVIL[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_ESTADO_CIVIL[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_ESTADO_CIVIL[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_ESTADO_CIVIL[".advSearchFields"] = array();
$tdataGE_ESTADO_CIVIL[".advSearchFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_ESTADO_CIVIL[".advSearchFields"][] = "NOMBRE";
$tdataGE_ESTADO_CIVIL[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_ESTADO_CIVIL[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_ESTADO_CIVIL[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_ESTADO_CIVIL[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_ESTADO_CIVIL[".tableType"] = "list";

$tdataGE_ESTADO_CIVIL[".printerPageOrientation"] = 0;
$tdataGE_ESTADO_CIVIL[".nPrinterPageScale"] = 100;

$tdataGE_ESTADO_CIVIL[".nPrinterSplitRecords"] = 40;

$tdataGE_ESTADO_CIVIL[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_ESTADO_CIVIL[".pageSize"] = 20;

$tdataGE_ESTADO_CIVIL[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_ESTADO_CIVIL[".strOrderBy"] = $tstrOrderBy;

$tdataGE_ESTADO_CIVIL[".orderindexes"] = array();

$tdataGE_ESTADO_CIVIL[".sqlHead"] = "SELECT ESTADO_CIVIL_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$tdataGE_ESTADO_CIVIL[".sqlFrom"] = "FROM GE.ESTADO_CIVIL";
$tdataGE_ESTADO_CIVIL[".sqlWhereExpr"] = "";
$tdataGE_ESTADO_CIVIL[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_ESTADO_CIVIL[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_ESTADO_CIVIL[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_ESTADO_CIVIL[".highlightSearchResults"] = true;

$tableKeysGE_ESTADO_CIVIL = array();
$tableKeysGE_ESTADO_CIVIL[] = "ESTADO_CIVIL_ID";
$tdataGE_ESTADO_CIVIL[".Keys"] = $tableKeysGE_ESTADO_CIVIL;

$tdataGE_ESTADO_CIVIL[".listFields"] = array();
$tdataGE_ESTADO_CIVIL[".listFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_ESTADO_CIVIL[".listFields"][] = "NOMBRE";
$tdataGE_ESTADO_CIVIL[".listFields"][] = "FEC_CREACION";
$tdataGE_ESTADO_CIVIL[".listFields"][] = "USUARIO_CREACION";
$tdataGE_ESTADO_CIVIL[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_ESTADO_CIVIL[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_ESTADO_CIVIL[".hideMobileList"] = array();


$tdataGE_ESTADO_CIVIL[".viewFields"] = array();
$tdataGE_ESTADO_CIVIL[".viewFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_ESTADO_CIVIL[".viewFields"][] = "NOMBRE";
$tdataGE_ESTADO_CIVIL[".viewFields"][] = "FEC_CREACION";
$tdataGE_ESTADO_CIVIL[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_ESTADO_CIVIL[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_ESTADO_CIVIL[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_ESTADO_CIVIL[".addFields"] = array();
$tdataGE_ESTADO_CIVIL[".addFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_ESTADO_CIVIL[".addFields"][] = "NOMBRE";

$tdataGE_ESTADO_CIVIL[".inlineAddFields"] = array();
$tdataGE_ESTADO_CIVIL[".inlineAddFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_ESTADO_CIVIL[".inlineAddFields"][] = "NOMBRE";
$tdataGE_ESTADO_CIVIL[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_ESTADO_CIVIL[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_ESTADO_CIVIL[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_ESTADO_CIVIL[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_ESTADO_CIVIL[".editFields"] = array();
$tdataGE_ESTADO_CIVIL[".editFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_ESTADO_CIVIL[".editFields"][] = "NOMBRE";

$tdataGE_ESTADO_CIVIL[".inlineEditFields"] = array();
$tdataGE_ESTADO_CIVIL[".inlineEditFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_ESTADO_CIVIL[".inlineEditFields"][] = "NOMBRE";
$tdataGE_ESTADO_CIVIL[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_ESTADO_CIVIL[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_ESTADO_CIVIL[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_ESTADO_CIVIL[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_ESTADO_CIVIL[".exportFields"] = array();
$tdataGE_ESTADO_CIVIL[".exportFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_ESTADO_CIVIL[".exportFields"][] = "NOMBRE";
$tdataGE_ESTADO_CIVIL[".exportFields"][] = "FEC_CREACION";
$tdataGE_ESTADO_CIVIL[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_ESTADO_CIVIL[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_ESTADO_CIVIL[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_ESTADO_CIVIL[".importFields"] = array();
$tdataGE_ESTADO_CIVIL[".importFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_ESTADO_CIVIL[".importFields"][] = "NOMBRE";
$tdataGE_ESTADO_CIVIL[".importFields"][] = "FEC_CREACION";
$tdataGE_ESTADO_CIVIL[".importFields"][] = "USUARIO_CREACION";
$tdataGE_ESTADO_CIVIL[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_ESTADO_CIVIL[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_ESTADO_CIVIL[".printFields"] = array();
$tdataGE_ESTADO_CIVIL[".printFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_ESTADO_CIVIL[".printFields"][] = "NOMBRE";
$tdataGE_ESTADO_CIVIL[".printFields"][] = "FEC_CREACION";
$tdataGE_ESTADO_CIVIL[".printFields"][] = "USUARIO_CREACION";
$tdataGE_ESTADO_CIVIL[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_ESTADO_CIVIL[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	ESTADO_CIVIL_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ESTADO_CIVIL_ID";
	$fdata["GoodName"] = "ESTADO_CIVIL_ID";
	$fdata["ownerTable"] = "GE.ESTADO_CIVIL";
	$fdata["Label"] = GetFieldLabel("GE_ESTADO_CIVIL","ESTADO_CIVIL_ID"); 
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
	
		$fdata["strField"] = "ESTADO_CIVIL_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ESTADO_CIVIL_ID";
	
		
		
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

	

	
	$tdataGE_ESTADO_CIVIL["ESTADO_CIVIL_ID"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "GE.ESTADO_CIVIL";
	$fdata["Label"] = GetFieldLabel("GE_ESTADO_CIVIL","NOMBRE"); 
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

	

	
	$tdataGE_ESTADO_CIVIL["NOMBRE"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.ESTADO_CIVIL";
	$fdata["Label"] = GetFieldLabel("GE_ESTADO_CIVIL","FEC_CREACION"); 
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

	

	
	$tdataGE_ESTADO_CIVIL["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.ESTADO_CIVIL";
	$fdata["Label"] = GetFieldLabel("GE_ESTADO_CIVIL","USUARIO_CREACION"); 
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

	

	
	$tdataGE_ESTADO_CIVIL["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.ESTADO_CIVIL";
	$fdata["Label"] = GetFieldLabel("GE_ESTADO_CIVIL","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_ESTADO_CIVIL["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.ESTADO_CIVIL";
	$fdata["Label"] = GetFieldLabel("GE_ESTADO_CIVIL","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_ESTADO_CIVIL["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.ESTADO_CIVIL"]=&$tdataGE_ESTADO_CIVIL;
$field_labels["GE_ESTADO_CIVIL"] = &$fieldLabelsGE_ESTADO_CIVIL;
$fieldToolTips["GE.ESTADO_CIVIL"] = &$fieldToolTipsGE_ESTADO_CIVIL;
$page_titles["GE_ESTADO_CIVIL"] = &$pageTitlesGE_ESTADO_CIVIL;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.ESTADO_CIVIL"] = array();
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
			
	$detailsTablesData["GE.ESTADO_CIVIL"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.ESTADO_CIVIL"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.ESTADO_CIVIL"][$dIndex]["masterKeys"][]="ESTADO_CIVIL_ID";

				$detailsTablesData["GE.ESTADO_CIVIL"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.ESTADO_CIVIL"][$dIndex]["detailKeys"][]="ESTADO_CIVIL_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.ESTADO_CIVIL"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_ESTADO_CIVIL()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ESTADO_CIVIL_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.ESTADO_CIVIL";
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
	"m_strName" => "ESTADO_CIVIL_ID",
	"m_strTable" => "GE.ESTADO_CIVIL",
	"m_srcTableName" => "GE.ESTADO_CIVIL"
));

$proto5["m_sql"] = "ESTADO_CIVIL_ID";
$proto5["m_srcTableName"] = "GE.ESTADO_CIVIL";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "GE.ESTADO_CIVIL",
	"m_srcTableName" => "GE.ESTADO_CIVIL"
));

$proto7["m_sql"] = "NOMBRE";
$proto7["m_srcTableName"] = "GE.ESTADO_CIVIL";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.ESTADO_CIVIL",
	"m_srcTableName" => "GE.ESTADO_CIVIL"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.ESTADO_CIVIL";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.ESTADO_CIVIL",
	"m_srcTableName" => "GE.ESTADO_CIVIL"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.ESTADO_CIVIL";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.ESTADO_CIVIL",
	"m_srcTableName" => "GE.ESTADO_CIVIL"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.ESTADO_CIVIL";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.ESTADO_CIVIL",
	"m_srcTableName" => "GE.ESTADO_CIVIL"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.ESTADO_CIVIL";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.ESTADO_CIVIL";
$proto18["m_srcTableName"] = "GE.ESTADO_CIVIL";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "ESTADO_CIVIL_ID";
$proto18["m_columns"][] = "NOMBRE";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.ESTADO_CIVIL";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.ESTADO_CIVIL";
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
$proto0["m_srcTableName"]="GE.ESTADO_CIVIL";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_ESTADO_CIVIL = createSqlQuery_GE_ESTADO_CIVIL();


	
						
	
$tdataGE_ESTADO_CIVIL[".sqlquery"] = $queryData_GE_ESTADO_CIVIL;

$tableEvents["GE.ESTADO_CIVIL"] = new eventsBase;
$tdataGE_ESTADO_CIVIL[".hasEvents"] = false;

?>
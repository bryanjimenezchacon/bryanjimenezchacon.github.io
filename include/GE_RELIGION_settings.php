<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_RELIGION = array();	
	$tdataGE_RELIGION[".truncateText"] = true;
	$tdataGE_RELIGION[".NumberOfChars"] = 80; 
	$tdataGE_RELIGION[".ShortName"] = "GE_RELIGION";
	$tdataGE_RELIGION[".OwnerID"] = "";
	$tdataGE_RELIGION[".OriginalTable"] = "GE.RELIGION";

//	field labels
$fieldLabelsGE_RELIGION = array();
$fieldToolTipsGE_RELIGION = array();
$pageTitlesGE_RELIGION = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_RELIGION["Spanish"] = array();
	$fieldToolTipsGE_RELIGION["Spanish"] = array();
	$pageTitlesGE_RELIGION["Spanish"] = array();
	$fieldLabelsGE_RELIGION["Spanish"]["RELIGION_ID"] = "RELIGION ID";
	$fieldToolTipsGE_RELIGION["Spanish"]["RELIGION_ID"] = "";
	$fieldLabelsGE_RELIGION["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_RELIGION["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGE_RELIGION["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_RELIGION["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_RELIGION["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_RELIGION["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_RELIGION["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_RELIGION["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_RELIGION["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_RELIGION["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_RELIGION["Spanish"]))
		$tdataGE_RELIGION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_RELIGION[""] = array();
	$fieldToolTipsGE_RELIGION[""] = array();
	$pageTitlesGE_RELIGION[""] = array();
	$fieldLabelsGE_RELIGION[""]["RELIGION_ID"] = "RELIGION ID";
	$fieldToolTipsGE_RELIGION[""]["RELIGION_ID"] = "";
	$fieldLabelsGE_RELIGION[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_RELIGION[""]["NOMBRE"] = "";
	$fieldLabelsGE_RELIGION[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_RELIGION[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_RELIGION[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_RELIGION[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_RELIGION[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_RELIGION[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_RELIGION[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_RELIGION[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_RELIGION[""]))
		$tdataGE_RELIGION[".isUseToolTips"] = true;
}
	
	
	$tdataGE_RELIGION[".NCSearch"] = true;



$tdataGE_RELIGION[".shortTableName"] = "GE_RELIGION";
$tdataGE_RELIGION[".nSecOptions"] = 0;
$tdataGE_RELIGION[".recsPerRowList"] = 1;
$tdataGE_RELIGION[".mainTableOwnerID"] = "";
$tdataGE_RELIGION[".moveNext"] = 1;
$tdataGE_RELIGION[".nType"] = 0;

$tdataGE_RELIGION[".strOriginalTableName"] = "GE.RELIGION";




$tdataGE_RELIGION[".showAddInPopup"] = false;

$tdataGE_RELIGION[".showEditInPopup"] = false;

$tdataGE_RELIGION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_RELIGION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_RELIGION[".fieldsForRegister"] = array();

$tdataGE_RELIGION[".listAjax"] = false;

	$tdataGE_RELIGION[".audit"] = false;

	$tdataGE_RELIGION[".locking"] = false;

$tdataGE_RELIGION[".edit"] = true;

$tdataGE_RELIGION[".list"] = true;

$tdataGE_RELIGION[".inlineEdit"] = true;
$tdataGE_RELIGION[".inlineAdd"] = true;
$tdataGE_RELIGION[".view"] = true;

$tdataGE_RELIGION[".import"] = true;

$tdataGE_RELIGION[".exportTo"] = true;

$tdataGE_RELIGION[".printFriendly"] = true;

$tdataGE_RELIGION[".delete"] = true;

$tdataGE_RELIGION[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_RELIGION[".searchSaving"] = false;
//

$tdataGE_RELIGION[".showSearchPanel"] = true;
		$tdataGE_RELIGION[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_RELIGION[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_RELIGION[".isUseAjaxSuggest"] = true;

$tdataGE_RELIGION[".rowHighlite"] = true;



$tdataGE_RELIGION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_RELIGION[".isUseTimeForSearch"] = false;



$tdataGE_RELIGION[".useDetailsPreview"] = true;


$tdataGE_RELIGION[".allSearchFields"] = array();
$tdataGE_RELIGION[".filterFields"] = array();
$tdataGE_RELIGION[".requiredSearchFields"] = array();

$tdataGE_RELIGION[".allSearchFields"][] = "RELIGION_ID";
	$tdataGE_RELIGION[".allSearchFields"][] = "NOMBRE";
	$tdataGE_RELIGION[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_RELIGION[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_RELIGION[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_RELIGION[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_RELIGION[".googleLikeFields"] = array();
$tdataGE_RELIGION[".googleLikeFields"][] = "RELIGION_ID";
$tdataGE_RELIGION[".googleLikeFields"][] = "NOMBRE";
$tdataGE_RELIGION[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_RELIGION[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_RELIGION[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_RELIGION[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_RELIGION[".advSearchFields"] = array();
$tdataGE_RELIGION[".advSearchFields"][] = "RELIGION_ID";
$tdataGE_RELIGION[".advSearchFields"][] = "NOMBRE";
$tdataGE_RELIGION[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_RELIGION[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_RELIGION[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_RELIGION[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_RELIGION[".tableType"] = "list";

$tdataGE_RELIGION[".printerPageOrientation"] = 0;
$tdataGE_RELIGION[".nPrinterPageScale"] = 100;

$tdataGE_RELIGION[".nPrinterSplitRecords"] = 40;

$tdataGE_RELIGION[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_RELIGION[".pageSize"] = 20;

$tdataGE_RELIGION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_RELIGION[".strOrderBy"] = $tstrOrderBy;

$tdataGE_RELIGION[".orderindexes"] = array();

$tdataGE_RELIGION[".sqlHead"] = "SELECT RELIGION_ID,  NOMBRE,  FEC_CREACION,  USUARIO_CREACION,  FEC_ULTIMA_MOD,  USUARIO_ULTIMA_MOD";
$tdataGE_RELIGION[".sqlFrom"] = "FROM GE.RELIGION";
$tdataGE_RELIGION[".sqlWhereExpr"] = "";
$tdataGE_RELIGION[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_RELIGION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_RELIGION[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_RELIGION[".highlightSearchResults"] = true;

$tableKeysGE_RELIGION = array();
$tableKeysGE_RELIGION[] = "RELIGION_ID";
$tdataGE_RELIGION[".Keys"] = $tableKeysGE_RELIGION;

$tdataGE_RELIGION[".listFields"] = array();
$tdataGE_RELIGION[".listFields"][] = "RELIGION_ID";
$tdataGE_RELIGION[".listFields"][] = "NOMBRE";
$tdataGE_RELIGION[".listFields"][] = "FEC_CREACION";
$tdataGE_RELIGION[".listFields"][] = "USUARIO_CREACION";
$tdataGE_RELIGION[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_RELIGION[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_RELIGION[".hideMobileList"] = array();


$tdataGE_RELIGION[".viewFields"] = array();
$tdataGE_RELIGION[".viewFields"][] = "RELIGION_ID";
$tdataGE_RELIGION[".viewFields"][] = "NOMBRE";
$tdataGE_RELIGION[".viewFields"][] = "FEC_CREACION";
$tdataGE_RELIGION[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_RELIGION[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_RELIGION[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_RELIGION[".addFields"] = array();
$tdataGE_RELIGION[".addFields"][] = "RELIGION_ID";
$tdataGE_RELIGION[".addFields"][] = "NOMBRE";

$tdataGE_RELIGION[".inlineAddFields"] = array();
$tdataGE_RELIGION[".inlineAddFields"][] = "RELIGION_ID";
$tdataGE_RELIGION[".inlineAddFields"][] = "NOMBRE";
$tdataGE_RELIGION[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_RELIGION[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_RELIGION[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_RELIGION[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_RELIGION[".editFields"] = array();
$tdataGE_RELIGION[".editFields"][] = "RELIGION_ID";
$tdataGE_RELIGION[".editFields"][] = "NOMBRE";

$tdataGE_RELIGION[".inlineEditFields"] = array();
$tdataGE_RELIGION[".inlineEditFields"][] = "RELIGION_ID";
$tdataGE_RELIGION[".inlineEditFields"][] = "NOMBRE";
$tdataGE_RELIGION[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_RELIGION[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_RELIGION[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_RELIGION[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_RELIGION[".exportFields"] = array();
$tdataGE_RELIGION[".exportFields"][] = "RELIGION_ID";
$tdataGE_RELIGION[".exportFields"][] = "NOMBRE";
$tdataGE_RELIGION[".exportFields"][] = "FEC_CREACION";
$tdataGE_RELIGION[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_RELIGION[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_RELIGION[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_RELIGION[".importFields"] = array();
$tdataGE_RELIGION[".importFields"][] = "RELIGION_ID";
$tdataGE_RELIGION[".importFields"][] = "NOMBRE";
$tdataGE_RELIGION[".importFields"][] = "FEC_CREACION";
$tdataGE_RELIGION[".importFields"][] = "USUARIO_CREACION";
$tdataGE_RELIGION[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_RELIGION[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_RELIGION[".printFields"] = array();
$tdataGE_RELIGION[".printFields"][] = "RELIGION_ID";
$tdataGE_RELIGION[".printFields"][] = "NOMBRE";
$tdataGE_RELIGION[".printFields"][] = "FEC_CREACION";
$tdataGE_RELIGION[".printFields"][] = "USUARIO_CREACION";
$tdataGE_RELIGION[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_RELIGION[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	RELIGION_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RELIGION_ID";
	$fdata["GoodName"] = "RELIGION_ID";
	$fdata["ownerTable"] = "GE.RELIGION";
	$fdata["Label"] = GetFieldLabel("GE_RELIGION","RELIGION_ID"); 
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
	
		$fdata["strField"] = "RELIGION_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RELIGION_ID";
	
		
		
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

	

	
	$tdataGE_RELIGION["RELIGION_ID"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "GE.RELIGION";
	$fdata["Label"] = GetFieldLabel("GE_RELIGION","NOMBRE"); 
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

	

	
	$tdataGE_RELIGION["NOMBRE"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.RELIGION";
	$fdata["Label"] = GetFieldLabel("GE_RELIGION","FEC_CREACION"); 
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

	

	
	$tdataGE_RELIGION["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.RELIGION";
	$fdata["Label"] = GetFieldLabel("GE_RELIGION","USUARIO_CREACION"); 
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

	

	
	$tdataGE_RELIGION["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.RELIGION";
	$fdata["Label"] = GetFieldLabel("GE_RELIGION","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_RELIGION["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.RELIGION";
	$fdata["Label"] = GetFieldLabel("GE_RELIGION","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_RELIGION["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.RELIGION"]=&$tdataGE_RELIGION;
$field_labels["GE_RELIGION"] = &$fieldLabelsGE_RELIGION;
$fieldToolTips["GE.RELIGION"] = &$fieldToolTipsGE_RELIGION;
$page_titles["GE_RELIGION"] = &$pageTitlesGE_RELIGION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.RELIGION"] = array();
//	GE.PERSONA_DISPONIBLEXRELIGION
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.PERSONA_DISPONIBLEXRELIGION";
		$detailsParam["dOriginalTable"] = "GE.PERSONA_DISPONIBLEXRELIGION";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_PERSONA_DISPONIBLEXRELIGION";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.RELIGION"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.RELIGION"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.RELIGION"][$dIndex]["masterKeys"][]="RELIGION_ID";

				$detailsTablesData["GE.RELIGION"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.RELIGION"][$dIndex]["detailKeys"][]="RELIGION_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.RELIGION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_RELIGION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RELIGION_ID,  NOMBRE,  FEC_CREACION,  USUARIO_CREACION,  FEC_ULTIMA_MOD,  USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.RELIGION";
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
	"m_strName" => "RELIGION_ID",
	"m_strTable" => "GE.RELIGION",
	"m_srcTableName" => "GE.RELIGION"
));

$proto5["m_sql"] = "RELIGION_ID";
$proto5["m_srcTableName"] = "GE.RELIGION";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "GE.RELIGION",
	"m_srcTableName" => "GE.RELIGION"
));

$proto7["m_sql"] = "NOMBRE";
$proto7["m_srcTableName"] = "GE.RELIGION";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.RELIGION",
	"m_srcTableName" => "GE.RELIGION"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.RELIGION";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.RELIGION",
	"m_srcTableName" => "GE.RELIGION"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.RELIGION";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.RELIGION",
	"m_srcTableName" => "GE.RELIGION"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.RELIGION";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.RELIGION",
	"m_srcTableName" => "GE.RELIGION"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.RELIGION";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.RELIGION";
$proto18["m_srcTableName"] = "GE.RELIGION";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "RELIGION_ID";
$proto18["m_columns"][] = "NOMBRE";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.RELIGION";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.RELIGION";
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
$proto0["m_srcTableName"]="GE.RELIGION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_RELIGION = createSqlQuery_GE_RELIGION();


	
						
	
$tdataGE_RELIGION[".sqlquery"] = $queryData_GE_RELIGION;

$tableEvents["GE.RELIGION"] = new eventsBase;
$tdataGE_RELIGION[".hasEvents"] = false;

?>
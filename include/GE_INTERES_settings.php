<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_INTERES = array();	
	$tdataGE_INTERES[".truncateText"] = true;
	$tdataGE_INTERES[".NumberOfChars"] = 80; 
	$tdataGE_INTERES[".ShortName"] = "GE_INTERES";
	$tdataGE_INTERES[".OwnerID"] = "";
	$tdataGE_INTERES[".OriginalTable"] = "GE.INTERES";

//	field labels
$fieldLabelsGE_INTERES = array();
$fieldToolTipsGE_INTERES = array();
$pageTitlesGE_INTERES = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_INTERES["Spanish"] = array();
	$fieldToolTipsGE_INTERES["Spanish"] = array();
	$pageTitlesGE_INTERES["Spanish"] = array();
	$fieldLabelsGE_INTERES["Spanish"]["INTERES_ID"] = "INTERES ID";
	$fieldToolTipsGE_INTERES["Spanish"]["INTERES_ID"] = "";
	$fieldLabelsGE_INTERES["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_INTERES["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGE_INTERES["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_INTERES["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_INTERES["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_INTERES["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_INTERES["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_INTERES["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_INTERES["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_INTERES["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_INTERES["Spanish"]))
		$tdataGE_INTERES[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_INTERES[""] = array();
	$fieldToolTipsGE_INTERES[""] = array();
	$pageTitlesGE_INTERES[""] = array();
	$fieldLabelsGE_INTERES[""]["INTERES_ID"] = "INTERES ID";
	$fieldToolTipsGE_INTERES[""]["INTERES_ID"] = "";
	$fieldLabelsGE_INTERES[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_INTERES[""]["NOMBRE"] = "";
	$fieldLabelsGE_INTERES[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_INTERES[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_INTERES[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_INTERES[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_INTERES[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_INTERES[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_INTERES[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_INTERES[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_INTERES[""]))
		$tdataGE_INTERES[".isUseToolTips"] = true;
}
	
	
	$tdataGE_INTERES[".NCSearch"] = true;



$tdataGE_INTERES[".shortTableName"] = "GE_INTERES";
$tdataGE_INTERES[".nSecOptions"] = 0;
$tdataGE_INTERES[".recsPerRowList"] = 1;
$tdataGE_INTERES[".mainTableOwnerID"] = "";
$tdataGE_INTERES[".moveNext"] = 1;
$tdataGE_INTERES[".nType"] = 0;

$tdataGE_INTERES[".strOriginalTableName"] = "GE.INTERES";




$tdataGE_INTERES[".showAddInPopup"] = false;

$tdataGE_INTERES[".showEditInPopup"] = false;

$tdataGE_INTERES[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_INTERES[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_INTERES[".fieldsForRegister"] = array();

$tdataGE_INTERES[".listAjax"] = false;

	$tdataGE_INTERES[".audit"] = false;

	$tdataGE_INTERES[".locking"] = false;

$tdataGE_INTERES[".edit"] = true;

$tdataGE_INTERES[".list"] = true;

$tdataGE_INTERES[".inlineEdit"] = true;
$tdataGE_INTERES[".inlineAdd"] = true;
$tdataGE_INTERES[".view"] = true;

$tdataGE_INTERES[".import"] = true;

$tdataGE_INTERES[".exportTo"] = true;

$tdataGE_INTERES[".printFriendly"] = true;

$tdataGE_INTERES[".delete"] = true;

$tdataGE_INTERES[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_INTERES[".searchSaving"] = false;
//

$tdataGE_INTERES[".showSearchPanel"] = true;
		$tdataGE_INTERES[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_INTERES[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_INTERES[".isUseAjaxSuggest"] = true;

$tdataGE_INTERES[".rowHighlite"] = true;



$tdataGE_INTERES[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_INTERES[".isUseTimeForSearch"] = false;



$tdataGE_INTERES[".useDetailsPreview"] = true;


$tdataGE_INTERES[".allSearchFields"] = array();
$tdataGE_INTERES[".filterFields"] = array();
$tdataGE_INTERES[".requiredSearchFields"] = array();

$tdataGE_INTERES[".allSearchFields"][] = "INTERES_ID";
	$tdataGE_INTERES[".allSearchFields"][] = "NOMBRE";
	$tdataGE_INTERES[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_INTERES[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_INTERES[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_INTERES[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_INTERES[".googleLikeFields"] = array();
$tdataGE_INTERES[".googleLikeFields"][] = "INTERES_ID";
$tdataGE_INTERES[".googleLikeFields"][] = "NOMBRE";
$tdataGE_INTERES[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_INTERES[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_INTERES[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_INTERES[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_INTERES[".advSearchFields"] = array();
$tdataGE_INTERES[".advSearchFields"][] = "INTERES_ID";
$tdataGE_INTERES[".advSearchFields"][] = "NOMBRE";
$tdataGE_INTERES[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_INTERES[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_INTERES[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_INTERES[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_INTERES[".tableType"] = "list";

$tdataGE_INTERES[".printerPageOrientation"] = 0;
$tdataGE_INTERES[".nPrinterPageScale"] = 100;

$tdataGE_INTERES[".nPrinterSplitRecords"] = 40;

$tdataGE_INTERES[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_INTERES[".pageSize"] = 20;

$tdataGE_INTERES[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_INTERES[".strOrderBy"] = $tstrOrderBy;

$tdataGE_INTERES[".orderindexes"] = array();

$tdataGE_INTERES[".sqlHead"] = "SELECT INTERES_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$tdataGE_INTERES[".sqlFrom"] = "FROM GE.INTERES";
$tdataGE_INTERES[".sqlWhereExpr"] = "";
$tdataGE_INTERES[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_INTERES[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_INTERES[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_INTERES[".highlightSearchResults"] = true;

$tableKeysGE_INTERES = array();
$tableKeysGE_INTERES[] = "INTERES_ID";
$tdataGE_INTERES[".Keys"] = $tableKeysGE_INTERES;

$tdataGE_INTERES[".listFields"] = array();
$tdataGE_INTERES[".listFields"][] = "INTERES_ID";
$tdataGE_INTERES[".listFields"][] = "NOMBRE";
$tdataGE_INTERES[".listFields"][] = "FEC_CREACION";
$tdataGE_INTERES[".listFields"][] = "USUARIO_CREACION";
$tdataGE_INTERES[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_INTERES[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_INTERES[".hideMobileList"] = array();


$tdataGE_INTERES[".viewFields"] = array();
$tdataGE_INTERES[".viewFields"][] = "INTERES_ID";
$tdataGE_INTERES[".viewFields"][] = "NOMBRE";
$tdataGE_INTERES[".viewFields"][] = "FEC_CREACION";
$tdataGE_INTERES[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_INTERES[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_INTERES[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_INTERES[".addFields"] = array();
$tdataGE_INTERES[".addFields"][] = "INTERES_ID";
$tdataGE_INTERES[".addFields"][] = "NOMBRE";

$tdataGE_INTERES[".inlineAddFields"] = array();
$tdataGE_INTERES[".inlineAddFields"][] = "INTERES_ID";
$tdataGE_INTERES[".inlineAddFields"][] = "NOMBRE";
$tdataGE_INTERES[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_INTERES[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_INTERES[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_INTERES[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_INTERES[".editFields"] = array();
$tdataGE_INTERES[".editFields"][] = "INTERES_ID";
$tdataGE_INTERES[".editFields"][] = "NOMBRE";

$tdataGE_INTERES[".inlineEditFields"] = array();
$tdataGE_INTERES[".inlineEditFields"][] = "INTERES_ID";
$tdataGE_INTERES[".inlineEditFields"][] = "NOMBRE";
$tdataGE_INTERES[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_INTERES[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_INTERES[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_INTERES[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_INTERES[".exportFields"] = array();
$tdataGE_INTERES[".exportFields"][] = "INTERES_ID";
$tdataGE_INTERES[".exportFields"][] = "NOMBRE";
$tdataGE_INTERES[".exportFields"][] = "FEC_CREACION";
$tdataGE_INTERES[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_INTERES[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_INTERES[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_INTERES[".importFields"] = array();
$tdataGE_INTERES[".importFields"][] = "INTERES_ID";
$tdataGE_INTERES[".importFields"][] = "NOMBRE";
$tdataGE_INTERES[".importFields"][] = "FEC_CREACION";
$tdataGE_INTERES[".importFields"][] = "USUARIO_CREACION";
$tdataGE_INTERES[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_INTERES[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_INTERES[".printFields"] = array();
$tdataGE_INTERES[".printFields"][] = "INTERES_ID";
$tdataGE_INTERES[".printFields"][] = "NOMBRE";
$tdataGE_INTERES[".printFields"][] = "FEC_CREACION";
$tdataGE_INTERES[".printFields"][] = "USUARIO_CREACION";
$tdataGE_INTERES[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_INTERES[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	INTERES_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "INTERES_ID";
	$fdata["GoodName"] = "INTERES_ID";
	$fdata["ownerTable"] = "GE.INTERES";
	$fdata["Label"] = GetFieldLabel("GE_INTERES","INTERES_ID"); 
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
	
		$fdata["strField"] = "INTERES_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INTERES_ID";
	
		
		
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

	

	
	$tdataGE_INTERES["INTERES_ID"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "GE.INTERES";
	$fdata["Label"] = GetFieldLabel("GE_INTERES","NOMBRE"); 
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
			$edata["EditParams"].= " maxlength=30";
	
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

	

	
	$tdataGE_INTERES["NOMBRE"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.INTERES";
	$fdata["Label"] = GetFieldLabel("GE_INTERES","FEC_CREACION"); 
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

	

	
	$tdataGE_INTERES["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.INTERES";
	$fdata["Label"] = GetFieldLabel("GE_INTERES","USUARIO_CREACION"); 
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

	

	
	$tdataGE_INTERES["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.INTERES";
	$fdata["Label"] = GetFieldLabel("GE_INTERES","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_INTERES["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.INTERES";
	$fdata["Label"] = GetFieldLabel("GE_INTERES","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_INTERES["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.INTERES"]=&$tdataGE_INTERES;
$field_labels["GE_INTERES"] = &$fieldLabelsGE_INTERES;
$fieldToolTips["GE.INTERES"] = &$fieldToolTipsGE_INTERES;
$page_titles["GE_INTERES"] = &$pageTitlesGE_INTERES;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.INTERES"] = array();
//	GE.INTERESXCATEGORIA_INTERES
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.INTERESXCATEGORIA_INTERES";
		$detailsParam["dOriginalTable"] = "GE.INTERESXCATEGORIA_INTERES";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_INTERESXCATEGORIA_INTERES";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.INTERES"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.INTERES"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.INTERES"][$dIndex]["masterKeys"][]="INTERES_ID";

				$detailsTablesData["GE.INTERES"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.INTERES"][$dIndex]["detailKeys"][]="INTERES_ID";
//	GE.PERSONA_DISPONIBLEXINTERES
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.PERSONA_DISPONIBLEXINTERES";
		$detailsParam["dOriginalTable"] = "GE.PERSONA_DISPONIBLEXINTERES";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_PERSONA_DISPONIBLEXINTERES";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.INTERES"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.INTERES"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.INTERES"][$dIndex]["masterKeys"][]="INTERES_ID";

				$detailsTablesData["GE.INTERES"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.INTERES"][$dIndex]["detailKeys"][]="INTERES_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.INTERES"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_INTERES()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "INTERES_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.INTERES";
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
	"m_strName" => "INTERES_ID",
	"m_strTable" => "GE.INTERES",
	"m_srcTableName" => "GE.INTERES"
));

$proto5["m_sql"] = "INTERES_ID";
$proto5["m_srcTableName"] = "GE.INTERES";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "GE.INTERES",
	"m_srcTableName" => "GE.INTERES"
));

$proto7["m_sql"] = "NOMBRE";
$proto7["m_srcTableName"] = "GE.INTERES";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.INTERES",
	"m_srcTableName" => "GE.INTERES"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.INTERES";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.INTERES",
	"m_srcTableName" => "GE.INTERES"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.INTERES";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.INTERES",
	"m_srcTableName" => "GE.INTERES"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.INTERES";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.INTERES",
	"m_srcTableName" => "GE.INTERES"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.INTERES";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.INTERES";
$proto18["m_srcTableName"] = "GE.INTERES";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "INTERES_ID";
$proto18["m_columns"][] = "NOMBRE";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.INTERES";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.INTERES";
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
$proto0["m_srcTableName"]="GE.INTERES";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_INTERES = createSqlQuery_GE_INTERES();


	
						
	
$tdataGE_INTERES[".sqlquery"] = $queryData_GE_INTERES;

$tableEvents["GE.INTERES"] = new eventsBase;
$tdataGE_INTERES[".hasEvents"] = false;

?>
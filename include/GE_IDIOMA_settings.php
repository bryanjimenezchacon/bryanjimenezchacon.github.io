<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_IDIOMA = array();	
	$tdataGE_IDIOMA[".truncateText"] = true;
	$tdataGE_IDIOMA[".NumberOfChars"] = 80; 
	$tdataGE_IDIOMA[".ShortName"] = "GE_IDIOMA";
	$tdataGE_IDIOMA[".OwnerID"] = "";
	$tdataGE_IDIOMA[".OriginalTable"] = "GE.IDIOMA";

//	field labels
$fieldLabelsGE_IDIOMA = array();
$fieldToolTipsGE_IDIOMA = array();
$pageTitlesGE_IDIOMA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_IDIOMA["Spanish"] = array();
	$fieldToolTipsGE_IDIOMA["Spanish"] = array();
	$pageTitlesGE_IDIOMA["Spanish"] = array();
	$fieldLabelsGE_IDIOMA["Spanish"]["IDIOMA_ID"] = "IDIOMA ID";
	$fieldToolTipsGE_IDIOMA["Spanish"]["IDIOMA_ID"] = "";
	$fieldLabelsGE_IDIOMA["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_IDIOMA["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGE_IDIOMA["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_IDIOMA["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_IDIOMA["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_IDIOMA["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_IDIOMA["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_IDIOMA["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_IDIOMA["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_IDIOMA["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_IDIOMA["Spanish"]))
		$tdataGE_IDIOMA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_IDIOMA[""] = array();
	$fieldToolTipsGE_IDIOMA[""] = array();
	$pageTitlesGE_IDIOMA[""] = array();
	$fieldLabelsGE_IDIOMA[""]["IDIOMA_ID"] = "IDIOMA ID";
	$fieldToolTipsGE_IDIOMA[""]["IDIOMA_ID"] = "";
	$fieldLabelsGE_IDIOMA[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_IDIOMA[""]["NOMBRE"] = "";
	$fieldLabelsGE_IDIOMA[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_IDIOMA[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_IDIOMA[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_IDIOMA[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_IDIOMA[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_IDIOMA[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_IDIOMA[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_IDIOMA[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_IDIOMA[""]))
		$tdataGE_IDIOMA[".isUseToolTips"] = true;
}
	
	
	$tdataGE_IDIOMA[".NCSearch"] = true;



$tdataGE_IDIOMA[".shortTableName"] = "GE_IDIOMA";
$tdataGE_IDIOMA[".nSecOptions"] = 0;
$tdataGE_IDIOMA[".recsPerRowList"] = 1;
$tdataGE_IDIOMA[".mainTableOwnerID"] = "";
$tdataGE_IDIOMA[".moveNext"] = 1;
$tdataGE_IDIOMA[".nType"] = 0;

$tdataGE_IDIOMA[".strOriginalTableName"] = "GE.IDIOMA";




$tdataGE_IDIOMA[".showAddInPopup"] = false;

$tdataGE_IDIOMA[".showEditInPopup"] = false;

$tdataGE_IDIOMA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_IDIOMA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_IDIOMA[".fieldsForRegister"] = array();

$tdataGE_IDIOMA[".listAjax"] = false;

	$tdataGE_IDIOMA[".audit"] = false;

	$tdataGE_IDIOMA[".locking"] = false;

$tdataGE_IDIOMA[".edit"] = true;

$tdataGE_IDIOMA[".list"] = true;

$tdataGE_IDIOMA[".inlineEdit"] = true;
$tdataGE_IDIOMA[".inlineAdd"] = true;
$tdataGE_IDIOMA[".view"] = true;

$tdataGE_IDIOMA[".import"] = true;

$tdataGE_IDIOMA[".exportTo"] = true;

$tdataGE_IDIOMA[".printFriendly"] = true;

$tdataGE_IDIOMA[".delete"] = true;

$tdataGE_IDIOMA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_IDIOMA[".searchSaving"] = false;
//

$tdataGE_IDIOMA[".showSearchPanel"] = true;
		$tdataGE_IDIOMA[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_IDIOMA[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_IDIOMA[".isUseAjaxSuggest"] = true;

$tdataGE_IDIOMA[".rowHighlite"] = true;



$tdataGE_IDIOMA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_IDIOMA[".isUseTimeForSearch"] = false;



$tdataGE_IDIOMA[".useDetailsPreview"] = true;


$tdataGE_IDIOMA[".allSearchFields"] = array();
$tdataGE_IDIOMA[".filterFields"] = array();
$tdataGE_IDIOMA[".requiredSearchFields"] = array();

$tdataGE_IDIOMA[".allSearchFields"][] = "IDIOMA_ID";
	$tdataGE_IDIOMA[".allSearchFields"][] = "NOMBRE";
	$tdataGE_IDIOMA[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_IDIOMA[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_IDIOMA[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_IDIOMA[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_IDIOMA[".googleLikeFields"] = array();
$tdataGE_IDIOMA[".googleLikeFields"][] = "IDIOMA_ID";
$tdataGE_IDIOMA[".googleLikeFields"][] = "NOMBRE";
$tdataGE_IDIOMA[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_IDIOMA[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_IDIOMA[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_IDIOMA[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_IDIOMA[".advSearchFields"] = array();
$tdataGE_IDIOMA[".advSearchFields"][] = "IDIOMA_ID";
$tdataGE_IDIOMA[".advSearchFields"][] = "NOMBRE";
$tdataGE_IDIOMA[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_IDIOMA[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_IDIOMA[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_IDIOMA[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_IDIOMA[".tableType"] = "list";

$tdataGE_IDIOMA[".printerPageOrientation"] = 0;
$tdataGE_IDIOMA[".nPrinterPageScale"] = 100;

$tdataGE_IDIOMA[".nPrinterSplitRecords"] = 40;

$tdataGE_IDIOMA[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_IDIOMA[".pageSize"] = 20;

$tdataGE_IDIOMA[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_IDIOMA[".strOrderBy"] = $tstrOrderBy;

$tdataGE_IDIOMA[".orderindexes"] = array();

$tdataGE_IDIOMA[".sqlHead"] = "SELECT IDIOMA_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$tdataGE_IDIOMA[".sqlFrom"] = "FROM GE.IDIOMA";
$tdataGE_IDIOMA[".sqlWhereExpr"] = "";
$tdataGE_IDIOMA[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_IDIOMA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_IDIOMA[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_IDIOMA[".highlightSearchResults"] = true;

$tableKeysGE_IDIOMA = array();
$tableKeysGE_IDIOMA[] = "IDIOMA_ID";
$tdataGE_IDIOMA[".Keys"] = $tableKeysGE_IDIOMA;

$tdataGE_IDIOMA[".listFields"] = array();
$tdataGE_IDIOMA[".listFields"][] = "IDIOMA_ID";
$tdataGE_IDIOMA[".listFields"][] = "NOMBRE";
$tdataGE_IDIOMA[".listFields"][] = "FEC_CREACION";
$tdataGE_IDIOMA[".listFields"][] = "USUARIO_CREACION";
$tdataGE_IDIOMA[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_IDIOMA[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_IDIOMA[".hideMobileList"] = array();


$tdataGE_IDIOMA[".viewFields"] = array();
$tdataGE_IDIOMA[".viewFields"][] = "IDIOMA_ID";
$tdataGE_IDIOMA[".viewFields"][] = "NOMBRE";
$tdataGE_IDIOMA[".viewFields"][] = "FEC_CREACION";
$tdataGE_IDIOMA[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_IDIOMA[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_IDIOMA[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_IDIOMA[".addFields"] = array();
$tdataGE_IDIOMA[".addFields"][] = "IDIOMA_ID";
$tdataGE_IDIOMA[".addFields"][] = "NOMBRE";

$tdataGE_IDIOMA[".inlineAddFields"] = array();
$tdataGE_IDIOMA[".inlineAddFields"][] = "IDIOMA_ID";
$tdataGE_IDIOMA[".inlineAddFields"][] = "NOMBRE";
$tdataGE_IDIOMA[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_IDIOMA[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_IDIOMA[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_IDIOMA[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_IDIOMA[".editFields"] = array();
$tdataGE_IDIOMA[".editFields"][] = "IDIOMA_ID";
$tdataGE_IDIOMA[".editFields"][] = "NOMBRE";

$tdataGE_IDIOMA[".inlineEditFields"] = array();
$tdataGE_IDIOMA[".inlineEditFields"][] = "IDIOMA_ID";
$tdataGE_IDIOMA[".inlineEditFields"][] = "NOMBRE";
$tdataGE_IDIOMA[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_IDIOMA[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_IDIOMA[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_IDIOMA[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_IDIOMA[".exportFields"] = array();
$tdataGE_IDIOMA[".exportFields"][] = "IDIOMA_ID";
$tdataGE_IDIOMA[".exportFields"][] = "NOMBRE";
$tdataGE_IDIOMA[".exportFields"][] = "FEC_CREACION";
$tdataGE_IDIOMA[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_IDIOMA[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_IDIOMA[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_IDIOMA[".importFields"] = array();
$tdataGE_IDIOMA[".importFields"][] = "IDIOMA_ID";
$tdataGE_IDIOMA[".importFields"][] = "NOMBRE";
$tdataGE_IDIOMA[".importFields"][] = "FEC_CREACION";
$tdataGE_IDIOMA[".importFields"][] = "USUARIO_CREACION";
$tdataGE_IDIOMA[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_IDIOMA[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_IDIOMA[".printFields"] = array();
$tdataGE_IDIOMA[".printFields"][] = "IDIOMA_ID";
$tdataGE_IDIOMA[".printFields"][] = "NOMBRE";
$tdataGE_IDIOMA[".printFields"][] = "FEC_CREACION";
$tdataGE_IDIOMA[".printFields"][] = "USUARIO_CREACION";
$tdataGE_IDIOMA[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_IDIOMA[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	IDIOMA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IDIOMA_ID";
	$fdata["GoodName"] = "IDIOMA_ID";
	$fdata["ownerTable"] = "GE.IDIOMA";
	$fdata["Label"] = GetFieldLabel("GE_IDIOMA","IDIOMA_ID"); 
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
	
		$fdata["strField"] = "IDIOMA_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDIOMA_ID";
	
		
		
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

	

	
	$tdataGE_IDIOMA["IDIOMA_ID"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "GE.IDIOMA";
	$fdata["Label"] = GetFieldLabel("GE_IDIOMA","NOMBRE"); 
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

	

	
	$tdataGE_IDIOMA["NOMBRE"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.IDIOMA";
	$fdata["Label"] = GetFieldLabel("GE_IDIOMA","FEC_CREACION"); 
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

	

	
	$tdataGE_IDIOMA["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.IDIOMA";
	$fdata["Label"] = GetFieldLabel("GE_IDIOMA","USUARIO_CREACION"); 
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

	

	
	$tdataGE_IDIOMA["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.IDIOMA";
	$fdata["Label"] = GetFieldLabel("GE_IDIOMA","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_IDIOMA["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.IDIOMA";
	$fdata["Label"] = GetFieldLabel("GE_IDIOMA","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_IDIOMA["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.IDIOMA"]=&$tdataGE_IDIOMA;
$field_labels["GE_IDIOMA"] = &$fieldLabelsGE_IDIOMA;
$fieldToolTips["GE.IDIOMA"] = &$fieldToolTipsGE_IDIOMA;
$page_titles["GE_IDIOMA"] = &$pageTitlesGE_IDIOMA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.IDIOMA"] = array();
//	GE.PERSONA_DISPONIBLEXIDIOMA
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.PERSONA_DISPONIBLEXIDIOMA";
		$detailsParam["dOriginalTable"] = "GE.PERSONA_DISPONIBLEXIDIOMA";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_PERSONA_DISPONIBLEXIDIOMA";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.IDIOMA"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.IDIOMA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.IDIOMA"][$dIndex]["masterKeys"][]="IDIOMA_ID";

				$detailsTablesData["GE.IDIOMA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.IDIOMA"][$dIndex]["detailKeys"][]="IDIOMA_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.IDIOMA"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_IDIOMA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IDIOMA_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.IDIOMA";
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
	"m_strName" => "IDIOMA_ID",
	"m_strTable" => "GE.IDIOMA",
	"m_srcTableName" => "GE.IDIOMA"
));

$proto5["m_sql"] = "IDIOMA_ID";
$proto5["m_srcTableName"] = "GE.IDIOMA";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "GE.IDIOMA",
	"m_srcTableName" => "GE.IDIOMA"
));

$proto7["m_sql"] = "NOMBRE";
$proto7["m_srcTableName"] = "GE.IDIOMA";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.IDIOMA",
	"m_srcTableName" => "GE.IDIOMA"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.IDIOMA";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.IDIOMA",
	"m_srcTableName" => "GE.IDIOMA"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.IDIOMA";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.IDIOMA",
	"m_srcTableName" => "GE.IDIOMA"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.IDIOMA";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.IDIOMA",
	"m_srcTableName" => "GE.IDIOMA"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.IDIOMA";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.IDIOMA";
$proto18["m_srcTableName"] = "GE.IDIOMA";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "IDIOMA_ID";
$proto18["m_columns"][] = "NOMBRE";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.IDIOMA";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.IDIOMA";
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
$proto0["m_srcTableName"]="GE.IDIOMA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_IDIOMA = createSqlQuery_GE_IDIOMA();


	
						
	
$tdataGE_IDIOMA[".sqlquery"] = $queryData_GE_IDIOMA;

$tableEvents["GE.IDIOMA"] = new eventsBase;
$tdataGE_IDIOMA[".hasEvents"] = false;

?>
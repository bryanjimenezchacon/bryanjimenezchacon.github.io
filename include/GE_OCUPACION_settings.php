<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_OCUPACION = array();	
	$tdataGE_OCUPACION[".truncateText"] = true;
	$tdataGE_OCUPACION[".NumberOfChars"] = 80; 
	$tdataGE_OCUPACION[".ShortName"] = "GE_OCUPACION";
	$tdataGE_OCUPACION[".OwnerID"] = "";
	$tdataGE_OCUPACION[".OriginalTable"] = "GE.OCUPACION";

//	field labels
$fieldLabelsGE_OCUPACION = array();
$fieldToolTipsGE_OCUPACION = array();
$pageTitlesGE_OCUPACION = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_OCUPACION["Spanish"] = array();
	$fieldToolTipsGE_OCUPACION["Spanish"] = array();
	$pageTitlesGE_OCUPACION["Spanish"] = array();
	$fieldLabelsGE_OCUPACION["Spanish"]["OCUPACION_ID"] = "OCUPACION ID";
	$fieldToolTipsGE_OCUPACION["Spanish"]["OCUPACION_ID"] = "";
	$fieldLabelsGE_OCUPACION["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_OCUPACION["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGE_OCUPACION["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_OCUPACION["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_OCUPACION["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_OCUPACION["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_OCUPACION["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_OCUPACION["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_OCUPACION["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_OCUPACION["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_OCUPACION["Spanish"]))
		$tdataGE_OCUPACION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_OCUPACION[""] = array();
	$fieldToolTipsGE_OCUPACION[""] = array();
	$pageTitlesGE_OCUPACION[""] = array();
	$fieldLabelsGE_OCUPACION[""]["OCUPACION_ID"] = "OCUPACION ID";
	$fieldToolTipsGE_OCUPACION[""]["OCUPACION_ID"] = "";
	$fieldLabelsGE_OCUPACION[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_OCUPACION[""]["NOMBRE"] = "";
	$fieldLabelsGE_OCUPACION[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_OCUPACION[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_OCUPACION[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_OCUPACION[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_OCUPACION[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_OCUPACION[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_OCUPACION[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_OCUPACION[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_OCUPACION[""]))
		$tdataGE_OCUPACION[".isUseToolTips"] = true;
}
	
	
	$tdataGE_OCUPACION[".NCSearch"] = true;



$tdataGE_OCUPACION[".shortTableName"] = "GE_OCUPACION";
$tdataGE_OCUPACION[".nSecOptions"] = 0;
$tdataGE_OCUPACION[".recsPerRowList"] = 1;
$tdataGE_OCUPACION[".mainTableOwnerID"] = "";
$tdataGE_OCUPACION[".moveNext"] = 1;
$tdataGE_OCUPACION[".nType"] = 0;

$tdataGE_OCUPACION[".strOriginalTableName"] = "GE.OCUPACION";




$tdataGE_OCUPACION[".showAddInPopup"] = false;

$tdataGE_OCUPACION[".showEditInPopup"] = false;

$tdataGE_OCUPACION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_OCUPACION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_OCUPACION[".fieldsForRegister"] = array();

$tdataGE_OCUPACION[".listAjax"] = false;

	$tdataGE_OCUPACION[".audit"] = false;

	$tdataGE_OCUPACION[".locking"] = false;

$tdataGE_OCUPACION[".edit"] = true;

$tdataGE_OCUPACION[".list"] = true;

$tdataGE_OCUPACION[".inlineEdit"] = true;
$tdataGE_OCUPACION[".inlineAdd"] = true;
$tdataGE_OCUPACION[".view"] = true;

$tdataGE_OCUPACION[".import"] = true;

$tdataGE_OCUPACION[".exportTo"] = true;

$tdataGE_OCUPACION[".printFriendly"] = true;

$tdataGE_OCUPACION[".delete"] = true;

$tdataGE_OCUPACION[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_OCUPACION[".searchSaving"] = false;
//

$tdataGE_OCUPACION[".showSearchPanel"] = true;
		$tdataGE_OCUPACION[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_OCUPACION[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_OCUPACION[".isUseAjaxSuggest"] = true;

$tdataGE_OCUPACION[".rowHighlite"] = true;



$tdataGE_OCUPACION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_OCUPACION[".isUseTimeForSearch"] = false;



$tdataGE_OCUPACION[".useDetailsPreview"] = true;


$tdataGE_OCUPACION[".allSearchFields"] = array();
$tdataGE_OCUPACION[".filterFields"] = array();
$tdataGE_OCUPACION[".requiredSearchFields"] = array();

$tdataGE_OCUPACION[".allSearchFields"][] = "OCUPACION_ID";
	$tdataGE_OCUPACION[".allSearchFields"][] = "NOMBRE";
	$tdataGE_OCUPACION[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_OCUPACION[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_OCUPACION[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_OCUPACION[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_OCUPACION[".googleLikeFields"] = array();
$tdataGE_OCUPACION[".googleLikeFields"][] = "OCUPACION_ID";
$tdataGE_OCUPACION[".googleLikeFields"][] = "NOMBRE";
$tdataGE_OCUPACION[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_OCUPACION[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_OCUPACION[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_OCUPACION[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_OCUPACION[".advSearchFields"] = array();
$tdataGE_OCUPACION[".advSearchFields"][] = "OCUPACION_ID";
$tdataGE_OCUPACION[".advSearchFields"][] = "NOMBRE";
$tdataGE_OCUPACION[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_OCUPACION[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_OCUPACION[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_OCUPACION[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_OCUPACION[".tableType"] = "list";

$tdataGE_OCUPACION[".printerPageOrientation"] = 0;
$tdataGE_OCUPACION[".nPrinterPageScale"] = 100;

$tdataGE_OCUPACION[".nPrinterSplitRecords"] = 40;

$tdataGE_OCUPACION[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_OCUPACION[".pageSize"] = 20;

$tdataGE_OCUPACION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_OCUPACION[".strOrderBy"] = $tstrOrderBy;

$tdataGE_OCUPACION[".orderindexes"] = array();

$tdataGE_OCUPACION[".sqlHead"] = "SELECT OCUPACION_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$tdataGE_OCUPACION[".sqlFrom"] = "FROM GE.OCUPACION";
$tdataGE_OCUPACION[".sqlWhereExpr"] = "";
$tdataGE_OCUPACION[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_OCUPACION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_OCUPACION[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_OCUPACION[".highlightSearchResults"] = true;

$tableKeysGE_OCUPACION = array();
$tableKeysGE_OCUPACION[] = "OCUPACION_ID";
$tdataGE_OCUPACION[".Keys"] = $tableKeysGE_OCUPACION;

$tdataGE_OCUPACION[".listFields"] = array();
$tdataGE_OCUPACION[".listFields"][] = "OCUPACION_ID";
$tdataGE_OCUPACION[".listFields"][] = "NOMBRE";
$tdataGE_OCUPACION[".listFields"][] = "FEC_CREACION";
$tdataGE_OCUPACION[".listFields"][] = "USUARIO_CREACION";
$tdataGE_OCUPACION[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_OCUPACION[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_OCUPACION[".hideMobileList"] = array();


$tdataGE_OCUPACION[".viewFields"] = array();
$tdataGE_OCUPACION[".viewFields"][] = "OCUPACION_ID";
$tdataGE_OCUPACION[".viewFields"][] = "NOMBRE";
$tdataGE_OCUPACION[".viewFields"][] = "FEC_CREACION";
$tdataGE_OCUPACION[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_OCUPACION[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_OCUPACION[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_OCUPACION[".addFields"] = array();
$tdataGE_OCUPACION[".addFields"][] = "OCUPACION_ID";
$tdataGE_OCUPACION[".addFields"][] = "NOMBRE";

$tdataGE_OCUPACION[".inlineAddFields"] = array();
$tdataGE_OCUPACION[".inlineAddFields"][] = "OCUPACION_ID";
$tdataGE_OCUPACION[".inlineAddFields"][] = "NOMBRE";
$tdataGE_OCUPACION[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_OCUPACION[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_OCUPACION[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_OCUPACION[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_OCUPACION[".editFields"] = array();
$tdataGE_OCUPACION[".editFields"][] = "OCUPACION_ID";
$tdataGE_OCUPACION[".editFields"][] = "NOMBRE";

$tdataGE_OCUPACION[".inlineEditFields"] = array();
$tdataGE_OCUPACION[".inlineEditFields"][] = "OCUPACION_ID";
$tdataGE_OCUPACION[".inlineEditFields"][] = "NOMBRE";
$tdataGE_OCUPACION[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_OCUPACION[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_OCUPACION[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_OCUPACION[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_OCUPACION[".exportFields"] = array();
$tdataGE_OCUPACION[".exportFields"][] = "OCUPACION_ID";
$tdataGE_OCUPACION[".exportFields"][] = "NOMBRE";
$tdataGE_OCUPACION[".exportFields"][] = "FEC_CREACION";
$tdataGE_OCUPACION[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_OCUPACION[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_OCUPACION[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_OCUPACION[".importFields"] = array();
$tdataGE_OCUPACION[".importFields"][] = "OCUPACION_ID";
$tdataGE_OCUPACION[".importFields"][] = "NOMBRE";
$tdataGE_OCUPACION[".importFields"][] = "FEC_CREACION";
$tdataGE_OCUPACION[".importFields"][] = "USUARIO_CREACION";
$tdataGE_OCUPACION[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_OCUPACION[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_OCUPACION[".printFields"] = array();
$tdataGE_OCUPACION[".printFields"][] = "OCUPACION_ID";
$tdataGE_OCUPACION[".printFields"][] = "NOMBRE";
$tdataGE_OCUPACION[".printFields"][] = "FEC_CREACION";
$tdataGE_OCUPACION[".printFields"][] = "USUARIO_CREACION";
$tdataGE_OCUPACION[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_OCUPACION[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	OCUPACION_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OCUPACION_ID";
	$fdata["GoodName"] = "OCUPACION_ID";
	$fdata["ownerTable"] = "GE.OCUPACION";
	$fdata["Label"] = GetFieldLabel("GE_OCUPACION","OCUPACION_ID"); 
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
	
		$fdata["strField"] = "OCUPACION_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OCUPACION_ID";
	
		
		
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

	

	
	$tdataGE_OCUPACION["OCUPACION_ID"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "GE.OCUPACION";
	$fdata["Label"] = GetFieldLabel("GE_OCUPACION","NOMBRE"); 
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

	

	
	$tdataGE_OCUPACION["NOMBRE"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.OCUPACION";
	$fdata["Label"] = GetFieldLabel("GE_OCUPACION","FEC_CREACION"); 
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

	

	
	$tdataGE_OCUPACION["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.OCUPACION";
	$fdata["Label"] = GetFieldLabel("GE_OCUPACION","USUARIO_CREACION"); 
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

	

	
	$tdataGE_OCUPACION["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.OCUPACION";
	$fdata["Label"] = GetFieldLabel("GE_OCUPACION","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_OCUPACION["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.OCUPACION";
	$fdata["Label"] = GetFieldLabel("GE_OCUPACION","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_OCUPACION["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.OCUPACION"]=&$tdataGE_OCUPACION;
$field_labels["GE_OCUPACION"] = &$fieldLabelsGE_OCUPACION;
$fieldToolTips["GE.OCUPACION"] = &$fieldToolTipsGE_OCUPACION;
$page_titles["GE_OCUPACION"] = &$pageTitlesGE_OCUPACION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.OCUPACION"] = array();
//	GE.OCUPACIONXCATEGORIA_OCUPACION
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.OCUPACIONXCATEGORIA_OCUPACION";
		$detailsParam["dOriginalTable"] = "GE.OCUPACIONXCATEGORIA_OCUPACION";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_OCUPACIONXCATEGORIA_OCUPACION";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.OCUPACION"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.OCUPACION"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.OCUPACION"][$dIndex]["masterKeys"][]="OCUPACION_ID";

				$detailsTablesData["GE.OCUPACION"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.OCUPACION"][$dIndex]["detailKeys"][]="OCUPACION_ID";
//	GE.PERSONA_DISPONIBLEXOCUPACION
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.PERSONA_DISPONIBLEXOCUPACION";
		$detailsParam["dOriginalTable"] = "GE.PERSONA_DISPONIBLEXOCUPACION";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_PERSONA_DISPONIBLEXOCUPACION";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.OCUPACION"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.OCUPACION"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.OCUPACION"][$dIndex]["masterKeys"][]="OCUPACION_ID";

				$detailsTablesData["GE.OCUPACION"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.OCUPACION"][$dIndex]["detailKeys"][]="OCUPACION_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.OCUPACION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_OCUPACION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OCUPACION_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.OCUPACION";
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
	"m_strName" => "OCUPACION_ID",
	"m_strTable" => "GE.OCUPACION",
	"m_srcTableName" => "GE.OCUPACION"
));

$proto5["m_sql"] = "OCUPACION_ID";
$proto5["m_srcTableName"] = "GE.OCUPACION";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "GE.OCUPACION",
	"m_srcTableName" => "GE.OCUPACION"
));

$proto7["m_sql"] = "NOMBRE";
$proto7["m_srcTableName"] = "GE.OCUPACION";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.OCUPACION",
	"m_srcTableName" => "GE.OCUPACION"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.OCUPACION";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.OCUPACION",
	"m_srcTableName" => "GE.OCUPACION"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.OCUPACION";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.OCUPACION",
	"m_srcTableName" => "GE.OCUPACION"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.OCUPACION";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.OCUPACION",
	"m_srcTableName" => "GE.OCUPACION"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.OCUPACION";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.OCUPACION";
$proto18["m_srcTableName"] = "GE.OCUPACION";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "OCUPACION_ID";
$proto18["m_columns"][] = "NOMBRE";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.OCUPACION";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.OCUPACION";
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
$proto0["m_srcTableName"]="GE.OCUPACION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_OCUPACION = createSqlQuery_GE_OCUPACION();


	
						
	
$tdataGE_OCUPACION[".sqlquery"] = $queryData_GE_OCUPACION;

$tableEvents["GE.OCUPACION"] = new eventsBase;
$tdataGE_OCUPACION[".hasEvents"] = false;

?>
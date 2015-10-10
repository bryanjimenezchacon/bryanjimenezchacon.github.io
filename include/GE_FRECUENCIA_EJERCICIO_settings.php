<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_FRECUENCIA_EJERCICIO = array();	
	$tdataGE_FRECUENCIA_EJERCICIO[".truncateText"] = true;
	$tdataGE_FRECUENCIA_EJERCICIO[".NumberOfChars"] = 80; 
	$tdataGE_FRECUENCIA_EJERCICIO[".ShortName"] = "GE_FRECUENCIA_EJERCICIO";
	$tdataGE_FRECUENCIA_EJERCICIO[".OwnerID"] = "";
	$tdataGE_FRECUENCIA_EJERCICIO[".OriginalTable"] = "GE.FRECUENCIA_EJERCICIO";

//	field labels
$fieldLabelsGE_FRECUENCIA_EJERCICIO = array();
$fieldToolTipsGE_FRECUENCIA_EJERCICIO = array();
$pageTitlesGE_FRECUENCIA_EJERCICIO = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_FRECUENCIA_EJERCICIO["Spanish"] = array();
	$fieldToolTipsGE_FRECUENCIA_EJERCICIO["Spanish"] = array();
	$pageTitlesGE_FRECUENCIA_EJERCICIO["Spanish"] = array();
	$fieldLabelsGE_FRECUENCIA_EJERCICIO["Spanish"]["FRECUENCIA_EJERCICIO_ID"] = "FRECUENCIA EJERCICIO ID";
	$fieldToolTipsGE_FRECUENCIA_EJERCICIO["Spanish"]["FRECUENCIA_EJERCICIO_ID"] = "";
	$fieldLabelsGE_FRECUENCIA_EJERCICIO["Spanish"]["RANGO"] = "RANGO";
	$fieldToolTipsGE_FRECUENCIA_EJERCICIO["Spanish"]["RANGO"] = "";
	$fieldLabelsGE_FRECUENCIA_EJERCICIO["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_FRECUENCIA_EJERCICIO["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_FRECUENCIA_EJERCICIO["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_FRECUENCIA_EJERCICIO["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_FRECUENCIA_EJERCICIO["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_FRECUENCIA_EJERCICIO["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_FRECUENCIA_EJERCICIO["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_FRECUENCIA_EJERCICIO["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_FRECUENCIA_EJERCICIO["Spanish"]))
		$tdataGE_FRECUENCIA_EJERCICIO[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_FRECUENCIA_EJERCICIO[""] = array();
	$fieldToolTipsGE_FRECUENCIA_EJERCICIO[""] = array();
	$pageTitlesGE_FRECUENCIA_EJERCICIO[""] = array();
	$fieldLabelsGE_FRECUENCIA_EJERCICIO[""]["FRECUENCIA_EJERCICIO_ID"] = "FRECUENCIA EJERCICIO ID";
	$fieldToolTipsGE_FRECUENCIA_EJERCICIO[""]["FRECUENCIA_EJERCICIO_ID"] = "";
	$fieldLabelsGE_FRECUENCIA_EJERCICIO[""]["RANGO"] = "RANGO";
	$fieldToolTipsGE_FRECUENCIA_EJERCICIO[""]["RANGO"] = "";
	$fieldLabelsGE_FRECUENCIA_EJERCICIO[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_FRECUENCIA_EJERCICIO[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_FRECUENCIA_EJERCICIO[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_FRECUENCIA_EJERCICIO[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_FRECUENCIA_EJERCICIO[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_FRECUENCIA_EJERCICIO[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_FRECUENCIA_EJERCICIO[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_FRECUENCIA_EJERCICIO[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_FRECUENCIA_EJERCICIO[""]))
		$tdataGE_FRECUENCIA_EJERCICIO[".isUseToolTips"] = true;
}
	
	
	$tdataGE_FRECUENCIA_EJERCICIO[".NCSearch"] = true;



$tdataGE_FRECUENCIA_EJERCICIO[".shortTableName"] = "GE_FRECUENCIA_EJERCICIO";
$tdataGE_FRECUENCIA_EJERCICIO[".nSecOptions"] = 0;
$tdataGE_FRECUENCIA_EJERCICIO[".recsPerRowList"] = 1;
$tdataGE_FRECUENCIA_EJERCICIO[".mainTableOwnerID"] = "";
$tdataGE_FRECUENCIA_EJERCICIO[".moveNext"] = 1;
$tdataGE_FRECUENCIA_EJERCICIO[".nType"] = 0;

$tdataGE_FRECUENCIA_EJERCICIO[".strOriginalTableName"] = "GE.FRECUENCIA_EJERCICIO";




$tdataGE_FRECUENCIA_EJERCICIO[".showAddInPopup"] = false;

$tdataGE_FRECUENCIA_EJERCICIO[".showEditInPopup"] = false;

$tdataGE_FRECUENCIA_EJERCICIO[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_FRECUENCIA_EJERCICIO[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_FRECUENCIA_EJERCICIO[".fieldsForRegister"] = array();

$tdataGE_FRECUENCIA_EJERCICIO[".listAjax"] = false;

	$tdataGE_FRECUENCIA_EJERCICIO[".audit"] = false;

	$tdataGE_FRECUENCIA_EJERCICIO[".locking"] = false;

$tdataGE_FRECUENCIA_EJERCICIO[".edit"] = true;

$tdataGE_FRECUENCIA_EJERCICIO[".list"] = true;

$tdataGE_FRECUENCIA_EJERCICIO[".inlineEdit"] = true;
$tdataGE_FRECUENCIA_EJERCICIO[".inlineAdd"] = true;
$tdataGE_FRECUENCIA_EJERCICIO[".view"] = true;

$tdataGE_FRECUENCIA_EJERCICIO[".import"] = true;

$tdataGE_FRECUENCIA_EJERCICIO[".exportTo"] = true;

$tdataGE_FRECUENCIA_EJERCICIO[".printFriendly"] = true;

$tdataGE_FRECUENCIA_EJERCICIO[".delete"] = true;

$tdataGE_FRECUENCIA_EJERCICIO[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_FRECUENCIA_EJERCICIO[".searchSaving"] = false;
//

$tdataGE_FRECUENCIA_EJERCICIO[".showSearchPanel"] = true;
		$tdataGE_FRECUENCIA_EJERCICIO[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_FRECUENCIA_EJERCICIO[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_FRECUENCIA_EJERCICIO[".isUseAjaxSuggest"] = true;

$tdataGE_FRECUENCIA_EJERCICIO[".rowHighlite"] = true;



$tdataGE_FRECUENCIA_EJERCICIO[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_FRECUENCIA_EJERCICIO[".isUseTimeForSearch"] = false;



$tdataGE_FRECUENCIA_EJERCICIO[".useDetailsPreview"] = true;


$tdataGE_FRECUENCIA_EJERCICIO[".allSearchFields"] = array();
$tdataGE_FRECUENCIA_EJERCICIO[".filterFields"] = array();
$tdataGE_FRECUENCIA_EJERCICIO[".requiredSearchFields"] = array();

$tdataGE_FRECUENCIA_EJERCICIO[".allSearchFields"][] = "FRECUENCIA_EJERCICIO_ID";
	$tdataGE_FRECUENCIA_EJERCICIO[".allSearchFields"][] = "RANGO";
	$tdataGE_FRECUENCIA_EJERCICIO[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_FRECUENCIA_EJERCICIO[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_FRECUENCIA_EJERCICIO[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_FRECUENCIA_EJERCICIO[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_FRECUENCIA_EJERCICIO[".googleLikeFields"] = array();
$tdataGE_FRECUENCIA_EJERCICIO[".googleLikeFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_FRECUENCIA_EJERCICIO[".googleLikeFields"][] = "RANGO";
$tdataGE_FRECUENCIA_EJERCICIO[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FRECUENCIA_EJERCICIO[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_FRECUENCIA_EJERCICIO[".advSearchFields"] = array();
$tdataGE_FRECUENCIA_EJERCICIO[".advSearchFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_FRECUENCIA_EJERCICIO[".advSearchFields"][] = "RANGO";
$tdataGE_FRECUENCIA_EJERCICIO[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FRECUENCIA_EJERCICIO[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_FRECUENCIA_EJERCICIO[".tableType"] = "list";

$tdataGE_FRECUENCIA_EJERCICIO[".printerPageOrientation"] = 0;
$tdataGE_FRECUENCIA_EJERCICIO[".nPrinterPageScale"] = 100;

$tdataGE_FRECUENCIA_EJERCICIO[".nPrinterSplitRecords"] = 40;

$tdataGE_FRECUENCIA_EJERCICIO[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_FRECUENCIA_EJERCICIO[".pageSize"] = 20;

$tdataGE_FRECUENCIA_EJERCICIO[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_FRECUENCIA_EJERCICIO[".strOrderBy"] = $tstrOrderBy;

$tdataGE_FRECUENCIA_EJERCICIO[".orderindexes"] = array();

$tdataGE_FRECUENCIA_EJERCICIO[".sqlHead"] = "SELECT FRECUENCIA_EJERCICIO_ID,  RANGO,  FEC_CREACION,  USUARIO_CREACION,  FEC_ULTIMA_MOD,  USUARIO_ULTIMA_MOD";
$tdataGE_FRECUENCIA_EJERCICIO[".sqlFrom"] = "FROM GE.FRECUENCIA_EJERCICIO";
$tdataGE_FRECUENCIA_EJERCICIO[".sqlWhereExpr"] = "";
$tdataGE_FRECUENCIA_EJERCICIO[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_FRECUENCIA_EJERCICIO[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_FRECUENCIA_EJERCICIO[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_FRECUENCIA_EJERCICIO[".highlightSearchResults"] = true;

$tableKeysGE_FRECUENCIA_EJERCICIO = array();
$tableKeysGE_FRECUENCIA_EJERCICIO[] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_FRECUENCIA_EJERCICIO[".Keys"] = $tableKeysGE_FRECUENCIA_EJERCICIO;

$tdataGE_FRECUENCIA_EJERCICIO[".listFields"] = array();
$tdataGE_FRECUENCIA_EJERCICIO[".listFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_FRECUENCIA_EJERCICIO[".listFields"][] = "RANGO";
$tdataGE_FRECUENCIA_EJERCICIO[".listFields"][] = "FEC_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".listFields"][] = "USUARIO_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FRECUENCIA_EJERCICIO[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_FRECUENCIA_EJERCICIO[".hideMobileList"] = array();


$tdataGE_FRECUENCIA_EJERCICIO[".viewFields"] = array();
$tdataGE_FRECUENCIA_EJERCICIO[".viewFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_FRECUENCIA_EJERCICIO[".viewFields"][] = "RANGO";
$tdataGE_FRECUENCIA_EJERCICIO[".viewFields"][] = "FEC_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FRECUENCIA_EJERCICIO[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_FRECUENCIA_EJERCICIO[".addFields"] = array();
$tdataGE_FRECUENCIA_EJERCICIO[".addFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_FRECUENCIA_EJERCICIO[".addFields"][] = "RANGO";

$tdataGE_FRECUENCIA_EJERCICIO[".inlineAddFields"] = array();
$tdataGE_FRECUENCIA_EJERCICIO[".inlineAddFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_FRECUENCIA_EJERCICIO[".inlineAddFields"][] = "RANGO";
$tdataGE_FRECUENCIA_EJERCICIO[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FRECUENCIA_EJERCICIO[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_FRECUENCIA_EJERCICIO[".editFields"] = array();
$tdataGE_FRECUENCIA_EJERCICIO[".editFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_FRECUENCIA_EJERCICIO[".editFields"][] = "RANGO";

$tdataGE_FRECUENCIA_EJERCICIO[".inlineEditFields"] = array();
$tdataGE_FRECUENCIA_EJERCICIO[".inlineEditFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_FRECUENCIA_EJERCICIO[".inlineEditFields"][] = "RANGO";
$tdataGE_FRECUENCIA_EJERCICIO[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FRECUENCIA_EJERCICIO[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_FRECUENCIA_EJERCICIO[".exportFields"] = array();
$tdataGE_FRECUENCIA_EJERCICIO[".exportFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_FRECUENCIA_EJERCICIO[".exportFields"][] = "RANGO";
$tdataGE_FRECUENCIA_EJERCICIO[".exportFields"][] = "FEC_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FRECUENCIA_EJERCICIO[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_FRECUENCIA_EJERCICIO[".importFields"] = array();
$tdataGE_FRECUENCIA_EJERCICIO[".importFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_FRECUENCIA_EJERCICIO[".importFields"][] = "RANGO";
$tdataGE_FRECUENCIA_EJERCICIO[".importFields"][] = "FEC_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".importFields"][] = "USUARIO_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FRECUENCIA_EJERCICIO[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_FRECUENCIA_EJERCICIO[".printFields"] = array();
$tdataGE_FRECUENCIA_EJERCICIO[".printFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_FRECUENCIA_EJERCICIO[".printFields"][] = "RANGO";
$tdataGE_FRECUENCIA_EJERCICIO[".printFields"][] = "FEC_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".printFields"][] = "USUARIO_CREACION";
$tdataGE_FRECUENCIA_EJERCICIO[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FRECUENCIA_EJERCICIO[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	FRECUENCIA_EJERCICIO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "FRECUENCIA_EJERCICIO_ID";
	$fdata["GoodName"] = "FRECUENCIA_EJERCICIO_ID";
	$fdata["ownerTable"] = "GE.FRECUENCIA_EJERCICIO";
	$fdata["Label"] = GetFieldLabel("GE_FRECUENCIA_EJERCICIO","FRECUENCIA_EJERCICIO_ID"); 
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
	
		$fdata["strField"] = "FRECUENCIA_EJERCICIO_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FRECUENCIA_EJERCICIO_ID";
	
		
		
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

	

	
	$tdataGE_FRECUENCIA_EJERCICIO["FRECUENCIA_EJERCICIO_ID"] = $fdata;
//	RANGO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RANGO";
	$fdata["GoodName"] = "RANGO";
	$fdata["ownerTable"] = "GE.FRECUENCIA_EJERCICIO";
	$fdata["Label"] = GetFieldLabel("GE_FRECUENCIA_EJERCICIO","RANGO"); 
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

	

	
	$tdataGE_FRECUENCIA_EJERCICIO["RANGO"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.FRECUENCIA_EJERCICIO";
	$fdata["Label"] = GetFieldLabel("GE_FRECUENCIA_EJERCICIO","FEC_CREACION"); 
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

	

	
	$tdataGE_FRECUENCIA_EJERCICIO["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.FRECUENCIA_EJERCICIO";
	$fdata["Label"] = GetFieldLabel("GE_FRECUENCIA_EJERCICIO","USUARIO_CREACION"); 
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

	

	
	$tdataGE_FRECUENCIA_EJERCICIO["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.FRECUENCIA_EJERCICIO";
	$fdata["Label"] = GetFieldLabel("GE_FRECUENCIA_EJERCICIO","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_FRECUENCIA_EJERCICIO["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.FRECUENCIA_EJERCICIO";
	$fdata["Label"] = GetFieldLabel("GE_FRECUENCIA_EJERCICIO","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_FRECUENCIA_EJERCICIO["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.FRECUENCIA_EJERCICIO"]=&$tdataGE_FRECUENCIA_EJERCICIO;
$field_labels["GE_FRECUENCIA_EJERCICIO"] = &$fieldLabelsGE_FRECUENCIA_EJERCICIO;
$fieldToolTips["GE.FRECUENCIA_EJERCICIO"] = &$fieldToolTipsGE_FRECUENCIA_EJERCICIO;
$page_titles["GE_FRECUENCIA_EJERCICIO"] = &$pageTitlesGE_FRECUENCIA_EJERCICIO;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.FRECUENCIA_EJERCICIO"] = array();
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
			
	$detailsTablesData["GE.FRECUENCIA_EJERCICIO"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.FRECUENCIA_EJERCICIO"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.FRECUENCIA_EJERCICIO"][$dIndex]["masterKeys"][]="FRECUENCIA_EJERCICIO_ID";

				$detailsTablesData["GE.FRECUENCIA_EJERCICIO"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.FRECUENCIA_EJERCICIO"][$dIndex]["detailKeys"][]="FRECUENCIA_EJERCICIO_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.FRECUENCIA_EJERCICIO"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_FRECUENCIA_EJERCICIO()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "FRECUENCIA_EJERCICIO_ID,  RANGO,  FEC_CREACION,  USUARIO_CREACION,  FEC_ULTIMA_MOD,  USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.FRECUENCIA_EJERCICIO";
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
	"m_strName" => "FRECUENCIA_EJERCICIO_ID",
	"m_strTable" => "GE.FRECUENCIA_EJERCICIO",
	"m_srcTableName" => "GE.FRECUENCIA_EJERCICIO"
));

$proto5["m_sql"] = "FRECUENCIA_EJERCICIO_ID";
$proto5["m_srcTableName"] = "GE.FRECUENCIA_EJERCICIO";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "RANGO",
	"m_strTable" => "GE.FRECUENCIA_EJERCICIO",
	"m_srcTableName" => "GE.FRECUENCIA_EJERCICIO"
));

$proto7["m_sql"] = "RANGO";
$proto7["m_srcTableName"] = "GE.FRECUENCIA_EJERCICIO";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.FRECUENCIA_EJERCICIO",
	"m_srcTableName" => "GE.FRECUENCIA_EJERCICIO"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.FRECUENCIA_EJERCICIO";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.FRECUENCIA_EJERCICIO",
	"m_srcTableName" => "GE.FRECUENCIA_EJERCICIO"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.FRECUENCIA_EJERCICIO";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.FRECUENCIA_EJERCICIO",
	"m_srcTableName" => "GE.FRECUENCIA_EJERCICIO"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.FRECUENCIA_EJERCICIO";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.FRECUENCIA_EJERCICIO",
	"m_srcTableName" => "GE.FRECUENCIA_EJERCICIO"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.FRECUENCIA_EJERCICIO";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.FRECUENCIA_EJERCICIO";
$proto18["m_srcTableName"] = "GE.FRECUENCIA_EJERCICIO";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "FRECUENCIA_EJERCICIO_ID";
$proto18["m_columns"][] = "RANGO";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.FRECUENCIA_EJERCICIO";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.FRECUENCIA_EJERCICIO";
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
$proto0["m_srcTableName"]="GE.FRECUENCIA_EJERCICIO";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_FRECUENCIA_EJERCICIO = createSqlQuery_GE_FRECUENCIA_EJERCICIO();


	
						
	
$tdataGE_FRECUENCIA_EJERCICIO[".sqlquery"] = $queryData_GE_FRECUENCIA_EJERCICIO;

$tableEvents["GE.FRECUENCIA_EJERCICIO"] = new eventsBase;
$tdataGE_FRECUENCIA_EJERCICIO[".hasEvents"] = false;

?>
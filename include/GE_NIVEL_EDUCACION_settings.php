<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_NIVEL_EDUCACION = array();	
	$tdataGE_NIVEL_EDUCACION[".truncateText"] = true;
	$tdataGE_NIVEL_EDUCACION[".NumberOfChars"] = 80; 
	$tdataGE_NIVEL_EDUCACION[".ShortName"] = "GE_NIVEL_EDUCACION";
	$tdataGE_NIVEL_EDUCACION[".OwnerID"] = "";
	$tdataGE_NIVEL_EDUCACION[".OriginalTable"] = "GE.NIVEL_EDUCACION";

//	field labels
$fieldLabelsGE_NIVEL_EDUCACION = array();
$fieldToolTipsGE_NIVEL_EDUCACION = array();
$pageTitlesGE_NIVEL_EDUCACION = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_NIVEL_EDUCACION["Spanish"] = array();
	$fieldToolTipsGE_NIVEL_EDUCACION["Spanish"] = array();
	$pageTitlesGE_NIVEL_EDUCACION["Spanish"] = array();
	$fieldLabelsGE_NIVEL_EDUCACION["Spanish"]["NIVEL_EDUCACION_ID"] = "NIVEL EDUCACION ID";
	$fieldToolTipsGE_NIVEL_EDUCACION["Spanish"]["NIVEL_EDUCACION_ID"] = "";
	$fieldLabelsGE_NIVEL_EDUCACION["Spanish"]["GRADO"] = "GRADO";
	$fieldToolTipsGE_NIVEL_EDUCACION["Spanish"]["GRADO"] = "";
	$fieldLabelsGE_NIVEL_EDUCACION["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_NIVEL_EDUCACION["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_NIVEL_EDUCACION["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_NIVEL_EDUCACION["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_NIVEL_EDUCACION["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_NIVEL_EDUCACION["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_NIVEL_EDUCACION["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_NIVEL_EDUCACION["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_NIVEL_EDUCACION["Spanish"]))
		$tdataGE_NIVEL_EDUCACION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_NIVEL_EDUCACION[""] = array();
	$fieldToolTipsGE_NIVEL_EDUCACION[""] = array();
	$pageTitlesGE_NIVEL_EDUCACION[""] = array();
	$fieldLabelsGE_NIVEL_EDUCACION[""]["NIVEL_EDUCACION_ID"] = "NIVEL EDUCACION ID";
	$fieldToolTipsGE_NIVEL_EDUCACION[""]["NIVEL_EDUCACION_ID"] = "";
	$fieldLabelsGE_NIVEL_EDUCACION[""]["GRADO"] = "GRADO";
	$fieldToolTipsGE_NIVEL_EDUCACION[""]["GRADO"] = "";
	$fieldLabelsGE_NIVEL_EDUCACION[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_NIVEL_EDUCACION[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_NIVEL_EDUCACION[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_NIVEL_EDUCACION[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_NIVEL_EDUCACION[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_NIVEL_EDUCACION[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_NIVEL_EDUCACION[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_NIVEL_EDUCACION[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_NIVEL_EDUCACION[""]))
		$tdataGE_NIVEL_EDUCACION[".isUseToolTips"] = true;
}
	
	
	$tdataGE_NIVEL_EDUCACION[".NCSearch"] = true;



$tdataGE_NIVEL_EDUCACION[".shortTableName"] = "GE_NIVEL_EDUCACION";
$tdataGE_NIVEL_EDUCACION[".nSecOptions"] = 0;
$tdataGE_NIVEL_EDUCACION[".recsPerRowList"] = 1;
$tdataGE_NIVEL_EDUCACION[".mainTableOwnerID"] = "";
$tdataGE_NIVEL_EDUCACION[".moveNext"] = 1;
$tdataGE_NIVEL_EDUCACION[".nType"] = 0;

$tdataGE_NIVEL_EDUCACION[".strOriginalTableName"] = "GE.NIVEL_EDUCACION";




$tdataGE_NIVEL_EDUCACION[".showAddInPopup"] = false;

$tdataGE_NIVEL_EDUCACION[".showEditInPopup"] = false;

$tdataGE_NIVEL_EDUCACION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_NIVEL_EDUCACION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_NIVEL_EDUCACION[".fieldsForRegister"] = array();

$tdataGE_NIVEL_EDUCACION[".listAjax"] = false;

	$tdataGE_NIVEL_EDUCACION[".audit"] = false;

	$tdataGE_NIVEL_EDUCACION[".locking"] = false;

$tdataGE_NIVEL_EDUCACION[".edit"] = true;

$tdataGE_NIVEL_EDUCACION[".list"] = true;

$tdataGE_NIVEL_EDUCACION[".inlineEdit"] = true;
$tdataGE_NIVEL_EDUCACION[".inlineAdd"] = true;
$tdataGE_NIVEL_EDUCACION[".view"] = true;

$tdataGE_NIVEL_EDUCACION[".import"] = true;

$tdataGE_NIVEL_EDUCACION[".exportTo"] = true;

$tdataGE_NIVEL_EDUCACION[".printFriendly"] = true;

$tdataGE_NIVEL_EDUCACION[".delete"] = true;

$tdataGE_NIVEL_EDUCACION[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_NIVEL_EDUCACION[".searchSaving"] = false;
//

$tdataGE_NIVEL_EDUCACION[".showSearchPanel"] = true;
		$tdataGE_NIVEL_EDUCACION[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_NIVEL_EDUCACION[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_NIVEL_EDUCACION[".isUseAjaxSuggest"] = true;

$tdataGE_NIVEL_EDUCACION[".rowHighlite"] = true;



$tdataGE_NIVEL_EDUCACION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_NIVEL_EDUCACION[".isUseTimeForSearch"] = false;



$tdataGE_NIVEL_EDUCACION[".useDetailsPreview"] = true;


$tdataGE_NIVEL_EDUCACION[".allSearchFields"] = array();
$tdataGE_NIVEL_EDUCACION[".filterFields"] = array();
$tdataGE_NIVEL_EDUCACION[".requiredSearchFields"] = array();

$tdataGE_NIVEL_EDUCACION[".allSearchFields"][] = "NIVEL_EDUCACION_ID";
	$tdataGE_NIVEL_EDUCACION[".allSearchFields"][] = "GRADO";
	$tdataGE_NIVEL_EDUCACION[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_NIVEL_EDUCACION[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_NIVEL_EDUCACION[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_NIVEL_EDUCACION[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_NIVEL_EDUCACION[".googleLikeFields"] = array();
$tdataGE_NIVEL_EDUCACION[".googleLikeFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_NIVEL_EDUCACION[".googleLikeFields"][] = "GRADO";
$tdataGE_NIVEL_EDUCACION[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_NIVEL_EDUCACION[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_NIVEL_EDUCACION[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_NIVEL_EDUCACION[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_NIVEL_EDUCACION[".advSearchFields"] = array();
$tdataGE_NIVEL_EDUCACION[".advSearchFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_NIVEL_EDUCACION[".advSearchFields"][] = "GRADO";
$tdataGE_NIVEL_EDUCACION[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_NIVEL_EDUCACION[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_NIVEL_EDUCACION[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_NIVEL_EDUCACION[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_NIVEL_EDUCACION[".tableType"] = "list";

$tdataGE_NIVEL_EDUCACION[".printerPageOrientation"] = 0;
$tdataGE_NIVEL_EDUCACION[".nPrinterPageScale"] = 100;

$tdataGE_NIVEL_EDUCACION[".nPrinterSplitRecords"] = 40;

$tdataGE_NIVEL_EDUCACION[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_NIVEL_EDUCACION[".pageSize"] = 20;

$tdataGE_NIVEL_EDUCACION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_NIVEL_EDUCACION[".strOrderBy"] = $tstrOrderBy;

$tdataGE_NIVEL_EDUCACION[".orderindexes"] = array();

$tdataGE_NIVEL_EDUCACION[".sqlHead"] = "SELECT NIVEL_EDUCACION_ID,   GRADO,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$tdataGE_NIVEL_EDUCACION[".sqlFrom"] = "FROM GE.NIVEL_EDUCACION";
$tdataGE_NIVEL_EDUCACION[".sqlWhereExpr"] = "";
$tdataGE_NIVEL_EDUCACION[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_NIVEL_EDUCACION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_NIVEL_EDUCACION[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_NIVEL_EDUCACION[".highlightSearchResults"] = true;

$tableKeysGE_NIVEL_EDUCACION = array();
$tableKeysGE_NIVEL_EDUCACION[] = "NIVEL_EDUCACION_ID";
$tdataGE_NIVEL_EDUCACION[".Keys"] = $tableKeysGE_NIVEL_EDUCACION;

$tdataGE_NIVEL_EDUCACION[".listFields"] = array();
$tdataGE_NIVEL_EDUCACION[".listFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_NIVEL_EDUCACION[".listFields"][] = "GRADO";
$tdataGE_NIVEL_EDUCACION[".listFields"][] = "FEC_CREACION";
$tdataGE_NIVEL_EDUCACION[".listFields"][] = "USUARIO_CREACION";
$tdataGE_NIVEL_EDUCACION[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_NIVEL_EDUCACION[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_NIVEL_EDUCACION[".hideMobileList"] = array();


$tdataGE_NIVEL_EDUCACION[".viewFields"] = array();
$tdataGE_NIVEL_EDUCACION[".viewFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_NIVEL_EDUCACION[".viewFields"][] = "GRADO";
$tdataGE_NIVEL_EDUCACION[".viewFields"][] = "FEC_CREACION";
$tdataGE_NIVEL_EDUCACION[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_NIVEL_EDUCACION[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_NIVEL_EDUCACION[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_NIVEL_EDUCACION[".addFields"] = array();
$tdataGE_NIVEL_EDUCACION[".addFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_NIVEL_EDUCACION[".addFields"][] = "GRADO";

$tdataGE_NIVEL_EDUCACION[".inlineAddFields"] = array();
$tdataGE_NIVEL_EDUCACION[".inlineAddFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_NIVEL_EDUCACION[".inlineAddFields"][] = "GRADO";
$tdataGE_NIVEL_EDUCACION[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_NIVEL_EDUCACION[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_NIVEL_EDUCACION[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_NIVEL_EDUCACION[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_NIVEL_EDUCACION[".editFields"] = array();
$tdataGE_NIVEL_EDUCACION[".editFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_NIVEL_EDUCACION[".editFields"][] = "GRADO";

$tdataGE_NIVEL_EDUCACION[".inlineEditFields"] = array();
$tdataGE_NIVEL_EDUCACION[".inlineEditFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_NIVEL_EDUCACION[".inlineEditFields"][] = "GRADO";
$tdataGE_NIVEL_EDUCACION[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_NIVEL_EDUCACION[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_NIVEL_EDUCACION[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_NIVEL_EDUCACION[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_NIVEL_EDUCACION[".exportFields"] = array();
$tdataGE_NIVEL_EDUCACION[".exportFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_NIVEL_EDUCACION[".exportFields"][] = "GRADO";
$tdataGE_NIVEL_EDUCACION[".exportFields"][] = "FEC_CREACION";
$tdataGE_NIVEL_EDUCACION[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_NIVEL_EDUCACION[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_NIVEL_EDUCACION[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_NIVEL_EDUCACION[".importFields"] = array();
$tdataGE_NIVEL_EDUCACION[".importFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_NIVEL_EDUCACION[".importFields"][] = "GRADO";
$tdataGE_NIVEL_EDUCACION[".importFields"][] = "FEC_CREACION";
$tdataGE_NIVEL_EDUCACION[".importFields"][] = "USUARIO_CREACION";
$tdataGE_NIVEL_EDUCACION[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_NIVEL_EDUCACION[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_NIVEL_EDUCACION[".printFields"] = array();
$tdataGE_NIVEL_EDUCACION[".printFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_NIVEL_EDUCACION[".printFields"][] = "GRADO";
$tdataGE_NIVEL_EDUCACION[".printFields"][] = "FEC_CREACION";
$tdataGE_NIVEL_EDUCACION[".printFields"][] = "USUARIO_CREACION";
$tdataGE_NIVEL_EDUCACION[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_NIVEL_EDUCACION[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	NIVEL_EDUCACION_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NIVEL_EDUCACION_ID";
	$fdata["GoodName"] = "NIVEL_EDUCACION_ID";
	$fdata["ownerTable"] = "GE.NIVEL_EDUCACION";
	$fdata["Label"] = GetFieldLabel("GE_NIVEL_EDUCACION","NIVEL_EDUCACION_ID"); 
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
	
		$fdata["strField"] = "NIVEL_EDUCACION_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NIVEL_EDUCACION_ID";
	
		
		
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

	

	
	$tdataGE_NIVEL_EDUCACION["NIVEL_EDUCACION_ID"] = $fdata;
//	GRADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GRADO";
	$fdata["GoodName"] = "GRADO";
	$fdata["ownerTable"] = "GE.NIVEL_EDUCACION";
	$fdata["Label"] = GetFieldLabel("GE_NIVEL_EDUCACION","GRADO"); 
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
	
		$fdata["strField"] = "GRADO"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GRADO";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
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

	

	
	$tdataGE_NIVEL_EDUCACION["GRADO"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.NIVEL_EDUCACION";
	$fdata["Label"] = GetFieldLabel("GE_NIVEL_EDUCACION","FEC_CREACION"); 
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

	

	
	$tdataGE_NIVEL_EDUCACION["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.NIVEL_EDUCACION";
	$fdata["Label"] = GetFieldLabel("GE_NIVEL_EDUCACION","USUARIO_CREACION"); 
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

	

	
	$tdataGE_NIVEL_EDUCACION["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.NIVEL_EDUCACION";
	$fdata["Label"] = GetFieldLabel("GE_NIVEL_EDUCACION","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_NIVEL_EDUCACION["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.NIVEL_EDUCACION";
	$fdata["Label"] = GetFieldLabel("GE_NIVEL_EDUCACION","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_NIVEL_EDUCACION["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.NIVEL_EDUCACION"]=&$tdataGE_NIVEL_EDUCACION;
$field_labels["GE_NIVEL_EDUCACION"] = &$fieldLabelsGE_NIVEL_EDUCACION;
$fieldToolTips["GE.NIVEL_EDUCACION"] = &$fieldToolTipsGE_NIVEL_EDUCACION;
$page_titles["GE_NIVEL_EDUCACION"] = &$pageTitlesGE_NIVEL_EDUCACION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.NIVEL_EDUCACION"] = array();
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
			
	$detailsTablesData["GE.NIVEL_EDUCACION"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.NIVEL_EDUCACION"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.NIVEL_EDUCACION"][$dIndex]["masterKeys"][]="NIVEL_EDUCACION_ID";

				$detailsTablesData["GE.NIVEL_EDUCACION"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.NIVEL_EDUCACION"][$dIndex]["detailKeys"][]="NIVEL_EDUCACION_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.NIVEL_EDUCACION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_NIVEL_EDUCACION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "NIVEL_EDUCACION_ID,   GRADO,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.NIVEL_EDUCACION";
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
	"m_strName" => "NIVEL_EDUCACION_ID",
	"m_strTable" => "GE.NIVEL_EDUCACION",
	"m_srcTableName" => "GE.NIVEL_EDUCACION"
));

$proto5["m_sql"] = "NIVEL_EDUCACION_ID";
$proto5["m_srcTableName"] = "GE.NIVEL_EDUCACION";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "GRADO",
	"m_strTable" => "GE.NIVEL_EDUCACION",
	"m_srcTableName" => "GE.NIVEL_EDUCACION"
));

$proto7["m_sql"] = "GRADO";
$proto7["m_srcTableName"] = "GE.NIVEL_EDUCACION";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.NIVEL_EDUCACION",
	"m_srcTableName" => "GE.NIVEL_EDUCACION"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.NIVEL_EDUCACION";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.NIVEL_EDUCACION",
	"m_srcTableName" => "GE.NIVEL_EDUCACION"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.NIVEL_EDUCACION";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.NIVEL_EDUCACION",
	"m_srcTableName" => "GE.NIVEL_EDUCACION"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.NIVEL_EDUCACION";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.NIVEL_EDUCACION",
	"m_srcTableName" => "GE.NIVEL_EDUCACION"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.NIVEL_EDUCACION";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.NIVEL_EDUCACION";
$proto18["m_srcTableName"] = "GE.NIVEL_EDUCACION";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "NIVEL_EDUCACION_ID";
$proto18["m_columns"][] = "GRADO";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.NIVEL_EDUCACION";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.NIVEL_EDUCACION";
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
$proto0["m_srcTableName"]="GE.NIVEL_EDUCACION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_NIVEL_EDUCACION = createSqlQuery_GE_NIVEL_EDUCACION();


	
						
	
$tdataGE_NIVEL_EDUCACION[".sqlquery"] = $queryData_GE_NIVEL_EDUCACION;

$tableEvents["GE.NIVEL_EDUCACION"] = new eventsBase;
$tdataGE_NIVEL_EDUCACION[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_EJERCICIO = array();	
	$tdataGE_EJERCICIO[".truncateText"] = true;
	$tdataGE_EJERCICIO[".NumberOfChars"] = 80; 
	$tdataGE_EJERCICIO[".ShortName"] = "GE_EJERCICIO";
	$tdataGE_EJERCICIO[".OwnerID"] = "";
	$tdataGE_EJERCICIO[".OriginalTable"] = "GE.EJERCICIO";

//	field labels
$fieldLabelsGE_EJERCICIO = array();
$fieldToolTipsGE_EJERCICIO = array();
$pageTitlesGE_EJERCICIO = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_EJERCICIO["Spanish"] = array();
	$fieldToolTipsGE_EJERCICIO["Spanish"] = array();
	$pageTitlesGE_EJERCICIO["Spanish"] = array();
	$fieldLabelsGE_EJERCICIO["Spanish"]["EJERCICIO_ID"] = "EJERCICIO ID";
	$fieldToolTipsGE_EJERCICIO["Spanish"]["EJERCICIO_ID"] = "";
	$fieldLabelsGE_EJERCICIO["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_EJERCICIO["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGE_EJERCICIO["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_EJERCICIO["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_EJERCICIO["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_EJERCICIO["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_EJERCICIO["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_EJERCICIO["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_EJERCICIO["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_EJERCICIO["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_EJERCICIO["Spanish"]))
		$tdataGE_EJERCICIO[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_EJERCICIO[""] = array();
	$fieldToolTipsGE_EJERCICIO[""] = array();
	$pageTitlesGE_EJERCICIO[""] = array();
	$fieldLabelsGE_EJERCICIO[""]["EJERCICIO_ID"] = "EJERCICIO ID";
	$fieldToolTipsGE_EJERCICIO[""]["EJERCICIO_ID"] = "";
	$fieldLabelsGE_EJERCICIO[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_EJERCICIO[""]["NOMBRE"] = "";
	$fieldLabelsGE_EJERCICIO[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_EJERCICIO[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_EJERCICIO[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_EJERCICIO[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_EJERCICIO[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_EJERCICIO[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_EJERCICIO[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_EJERCICIO[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_EJERCICIO[""]))
		$tdataGE_EJERCICIO[".isUseToolTips"] = true;
}
	
	
	$tdataGE_EJERCICIO[".NCSearch"] = true;



$tdataGE_EJERCICIO[".shortTableName"] = "GE_EJERCICIO";
$tdataGE_EJERCICIO[".nSecOptions"] = 0;
$tdataGE_EJERCICIO[".recsPerRowList"] = 1;
$tdataGE_EJERCICIO[".mainTableOwnerID"] = "";
$tdataGE_EJERCICIO[".moveNext"] = 1;
$tdataGE_EJERCICIO[".nType"] = 0;

$tdataGE_EJERCICIO[".strOriginalTableName"] = "GE.EJERCICIO";




$tdataGE_EJERCICIO[".showAddInPopup"] = false;

$tdataGE_EJERCICIO[".showEditInPopup"] = false;

$tdataGE_EJERCICIO[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_EJERCICIO[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_EJERCICIO[".fieldsForRegister"] = array();

$tdataGE_EJERCICIO[".listAjax"] = false;

	$tdataGE_EJERCICIO[".audit"] = false;

	$tdataGE_EJERCICIO[".locking"] = false;

$tdataGE_EJERCICIO[".edit"] = true;

$tdataGE_EJERCICIO[".list"] = true;

$tdataGE_EJERCICIO[".inlineEdit"] = true;
$tdataGE_EJERCICIO[".inlineAdd"] = true;
$tdataGE_EJERCICIO[".view"] = true;

$tdataGE_EJERCICIO[".import"] = true;

$tdataGE_EJERCICIO[".exportTo"] = true;

$tdataGE_EJERCICIO[".printFriendly"] = true;

$tdataGE_EJERCICIO[".delete"] = true;

$tdataGE_EJERCICIO[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_EJERCICIO[".searchSaving"] = false;
//

$tdataGE_EJERCICIO[".showSearchPanel"] = true;
		$tdataGE_EJERCICIO[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_EJERCICIO[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_EJERCICIO[".isUseAjaxSuggest"] = true;

$tdataGE_EJERCICIO[".rowHighlite"] = true;



$tdataGE_EJERCICIO[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_EJERCICIO[".isUseTimeForSearch"] = false;



$tdataGE_EJERCICIO[".useDetailsPreview"] = true;


$tdataGE_EJERCICIO[".allSearchFields"] = array();
$tdataGE_EJERCICIO[".filterFields"] = array();
$tdataGE_EJERCICIO[".requiredSearchFields"] = array();

$tdataGE_EJERCICIO[".allSearchFields"][] = "EJERCICIO_ID";
	$tdataGE_EJERCICIO[".allSearchFields"][] = "NOMBRE";
	$tdataGE_EJERCICIO[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_EJERCICIO[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_EJERCICIO[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_EJERCICIO[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_EJERCICIO[".googleLikeFields"] = array();
$tdataGE_EJERCICIO[".googleLikeFields"][] = "EJERCICIO_ID";
$tdataGE_EJERCICIO[".googleLikeFields"][] = "NOMBRE";
$tdataGE_EJERCICIO[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_EJERCICIO[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_EJERCICIO[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EJERCICIO[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_EJERCICIO[".advSearchFields"] = array();
$tdataGE_EJERCICIO[".advSearchFields"][] = "EJERCICIO_ID";
$tdataGE_EJERCICIO[".advSearchFields"][] = "NOMBRE";
$tdataGE_EJERCICIO[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_EJERCICIO[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_EJERCICIO[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EJERCICIO[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_EJERCICIO[".tableType"] = "list";

$tdataGE_EJERCICIO[".printerPageOrientation"] = 0;
$tdataGE_EJERCICIO[".nPrinterPageScale"] = 100;

$tdataGE_EJERCICIO[".nPrinterSplitRecords"] = 40;

$tdataGE_EJERCICIO[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_EJERCICIO[".pageSize"] = 20;

$tdataGE_EJERCICIO[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_EJERCICIO[".strOrderBy"] = $tstrOrderBy;

$tdataGE_EJERCICIO[".orderindexes"] = array();

$tdataGE_EJERCICIO[".sqlHead"] = "SELECT EJERCICIO_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$tdataGE_EJERCICIO[".sqlFrom"] = "FROM GE.EJERCICIO";
$tdataGE_EJERCICIO[".sqlWhereExpr"] = "";
$tdataGE_EJERCICIO[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_EJERCICIO[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_EJERCICIO[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_EJERCICIO[".highlightSearchResults"] = true;

$tableKeysGE_EJERCICIO = array();
$tableKeysGE_EJERCICIO[] = "EJERCICIO_ID";
$tdataGE_EJERCICIO[".Keys"] = $tableKeysGE_EJERCICIO;

$tdataGE_EJERCICIO[".listFields"] = array();
$tdataGE_EJERCICIO[".listFields"][] = "EJERCICIO_ID";
$tdataGE_EJERCICIO[".listFields"][] = "NOMBRE";
$tdataGE_EJERCICIO[".listFields"][] = "FEC_CREACION";
$tdataGE_EJERCICIO[".listFields"][] = "USUARIO_CREACION";
$tdataGE_EJERCICIO[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EJERCICIO[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_EJERCICIO[".hideMobileList"] = array();


$tdataGE_EJERCICIO[".viewFields"] = array();
$tdataGE_EJERCICIO[".viewFields"][] = "EJERCICIO_ID";
$tdataGE_EJERCICIO[".viewFields"][] = "NOMBRE";
$tdataGE_EJERCICIO[".viewFields"][] = "FEC_CREACION";
$tdataGE_EJERCICIO[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_EJERCICIO[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EJERCICIO[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_EJERCICIO[".addFields"] = array();
$tdataGE_EJERCICIO[".addFields"][] = "EJERCICIO_ID";
$tdataGE_EJERCICIO[".addFields"][] = "NOMBRE";

$tdataGE_EJERCICIO[".inlineAddFields"] = array();
$tdataGE_EJERCICIO[".inlineAddFields"][] = "EJERCICIO_ID";
$tdataGE_EJERCICIO[".inlineAddFields"][] = "NOMBRE";
$tdataGE_EJERCICIO[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_EJERCICIO[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_EJERCICIO[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EJERCICIO[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_EJERCICIO[".editFields"] = array();
$tdataGE_EJERCICIO[".editFields"][] = "EJERCICIO_ID";
$tdataGE_EJERCICIO[".editFields"][] = "NOMBRE";

$tdataGE_EJERCICIO[".inlineEditFields"] = array();
$tdataGE_EJERCICIO[".inlineEditFields"][] = "EJERCICIO_ID";
$tdataGE_EJERCICIO[".inlineEditFields"][] = "NOMBRE";
$tdataGE_EJERCICIO[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_EJERCICIO[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_EJERCICIO[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EJERCICIO[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_EJERCICIO[".exportFields"] = array();
$tdataGE_EJERCICIO[".exportFields"][] = "EJERCICIO_ID";
$tdataGE_EJERCICIO[".exportFields"][] = "NOMBRE";
$tdataGE_EJERCICIO[".exportFields"][] = "FEC_CREACION";
$tdataGE_EJERCICIO[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_EJERCICIO[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EJERCICIO[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_EJERCICIO[".importFields"] = array();
$tdataGE_EJERCICIO[".importFields"][] = "EJERCICIO_ID";
$tdataGE_EJERCICIO[".importFields"][] = "NOMBRE";
$tdataGE_EJERCICIO[".importFields"][] = "FEC_CREACION";
$tdataGE_EJERCICIO[".importFields"][] = "USUARIO_CREACION";
$tdataGE_EJERCICIO[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EJERCICIO[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_EJERCICIO[".printFields"] = array();
$tdataGE_EJERCICIO[".printFields"][] = "EJERCICIO_ID";
$tdataGE_EJERCICIO[".printFields"][] = "NOMBRE";
$tdataGE_EJERCICIO[".printFields"][] = "FEC_CREACION";
$tdataGE_EJERCICIO[".printFields"][] = "USUARIO_CREACION";
$tdataGE_EJERCICIO[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EJERCICIO[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	EJERCICIO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EJERCICIO_ID";
	$fdata["GoodName"] = "EJERCICIO_ID";
	$fdata["ownerTable"] = "GE.EJERCICIO";
	$fdata["Label"] = GetFieldLabel("GE_EJERCICIO","EJERCICIO_ID"); 
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
	
		$fdata["strField"] = "EJERCICIO_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EJERCICIO_ID";
	
		
		
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

	

	
	$tdataGE_EJERCICIO["EJERCICIO_ID"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "GE.EJERCICIO";
	$fdata["Label"] = GetFieldLabel("GE_EJERCICIO","NOMBRE"); 
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

	

	
	$tdataGE_EJERCICIO["NOMBRE"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.EJERCICIO";
	$fdata["Label"] = GetFieldLabel("GE_EJERCICIO","FEC_CREACION"); 
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

	

	
	$tdataGE_EJERCICIO["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.EJERCICIO";
	$fdata["Label"] = GetFieldLabel("GE_EJERCICIO","USUARIO_CREACION"); 
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

	

	
	$tdataGE_EJERCICIO["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.EJERCICIO";
	$fdata["Label"] = GetFieldLabel("GE_EJERCICIO","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_EJERCICIO["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.EJERCICIO";
	$fdata["Label"] = GetFieldLabel("GE_EJERCICIO","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_EJERCICIO["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.EJERCICIO"]=&$tdataGE_EJERCICIO;
$field_labels["GE_EJERCICIO"] = &$fieldLabelsGE_EJERCICIO;
$fieldToolTips["GE.EJERCICIO"] = &$fieldToolTipsGE_EJERCICIO;
$page_titles["GE_EJERCICIO"] = &$pageTitlesGE_EJERCICIO;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.EJERCICIO"] = array();
//	GE.PERSONA_DISPONIBLEXEJERCICIO
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.PERSONA_DISPONIBLEXEJERCICIO";
		$detailsParam["dOriginalTable"] = "GE.PERSONA_DISPONIBLEXEJERCICIO";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_PERSONA_DISPONIBLEXEJERCICIO";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.EJERCICIO"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.EJERCICIO"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.EJERCICIO"][$dIndex]["masterKeys"][]="EJERCICIO_ID";

				$detailsTablesData["GE.EJERCICIO"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.EJERCICIO"][$dIndex]["detailKeys"][]="EJERCICIO_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.EJERCICIO"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_EJERCICIO()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EJERCICIO_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.EJERCICIO";
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
	"m_strName" => "EJERCICIO_ID",
	"m_strTable" => "GE.EJERCICIO",
	"m_srcTableName" => "GE.EJERCICIO"
));

$proto5["m_sql"] = "EJERCICIO_ID";
$proto5["m_srcTableName"] = "GE.EJERCICIO";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "GE.EJERCICIO",
	"m_srcTableName" => "GE.EJERCICIO"
));

$proto7["m_sql"] = "NOMBRE";
$proto7["m_srcTableName"] = "GE.EJERCICIO";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.EJERCICIO",
	"m_srcTableName" => "GE.EJERCICIO"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.EJERCICIO";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.EJERCICIO",
	"m_srcTableName" => "GE.EJERCICIO"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.EJERCICIO";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.EJERCICIO",
	"m_srcTableName" => "GE.EJERCICIO"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.EJERCICIO";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.EJERCICIO",
	"m_srcTableName" => "GE.EJERCICIO"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.EJERCICIO";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.EJERCICIO";
$proto18["m_srcTableName"] = "GE.EJERCICIO";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "EJERCICIO_ID";
$proto18["m_columns"][] = "NOMBRE";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.EJERCICIO";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.EJERCICIO";
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
$proto0["m_srcTableName"]="GE.EJERCICIO";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_EJERCICIO = createSqlQuery_GE_EJERCICIO();


	
						
	
$tdataGE_EJERCICIO[".sqlquery"] = $queryData_GE_EJERCICIO;

$tableEvents["GE.EJERCICIO"] = new eventsBase;
$tdataGE_EJERCICIO[".hasEvents"] = false;

?>
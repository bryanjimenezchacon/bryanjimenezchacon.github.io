<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_PARAMETROS = array();	
	$tdataGE_PARAMETROS[".truncateText"] = true;
	$tdataGE_PARAMETROS[".NumberOfChars"] = 80; 
	$tdataGE_PARAMETROS[".ShortName"] = "GE_PARAMETROS";
	$tdataGE_PARAMETROS[".OwnerID"] = "";
	$tdataGE_PARAMETROS[".OriginalTable"] = "GE.PARAMETROS";

//	field labels
$fieldLabelsGE_PARAMETROS = array();
$fieldToolTipsGE_PARAMETROS = array();
$pageTitlesGE_PARAMETROS = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_PARAMETROS["Spanish"] = array();
	$fieldToolTipsGE_PARAMETROS["Spanish"] = array();
	$pageTitlesGE_PARAMETROS["Spanish"] = array();
	$fieldLabelsGE_PARAMETROS["Spanish"]["PARAMETROS_ID"] = "PARAMETROS ID";
	$fieldToolTipsGE_PARAMETROS["Spanish"]["PARAMETROS_ID"] = "";
	$fieldLabelsGE_PARAMETROS["Spanish"]["VALOR"] = "VALOR";
	$fieldToolTipsGE_PARAMETROS["Spanish"]["VALOR"] = "";
	$fieldLabelsGE_PARAMETROS["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_PARAMETROS["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_PARAMETROS["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_PARAMETROS["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_PARAMETROS["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_PARAMETROS["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_PARAMETROS["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_PARAMETROS["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_PARAMETROS["Spanish"]))
		$tdataGE_PARAMETROS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_PARAMETROS[""] = array();
	$fieldToolTipsGE_PARAMETROS[""] = array();
	$pageTitlesGE_PARAMETROS[""] = array();
	$fieldLabelsGE_PARAMETROS[""]["PARAMETROS_ID"] = "PARAMETROS ID";
	$fieldToolTipsGE_PARAMETROS[""]["PARAMETROS_ID"] = "";
	$fieldLabelsGE_PARAMETROS[""]["VALOR"] = "VALOR";
	$fieldToolTipsGE_PARAMETROS[""]["VALOR"] = "";
	$fieldLabelsGE_PARAMETROS[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_PARAMETROS[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_PARAMETROS[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_PARAMETROS[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_PARAMETROS[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_PARAMETROS[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_PARAMETROS[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_PARAMETROS[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_PARAMETROS[""]))
		$tdataGE_PARAMETROS[".isUseToolTips"] = true;
}
	
	
	$tdataGE_PARAMETROS[".NCSearch"] = true;



$tdataGE_PARAMETROS[".shortTableName"] = "GE_PARAMETROS";
$tdataGE_PARAMETROS[".nSecOptions"] = 0;
$tdataGE_PARAMETROS[".recsPerRowList"] = 1;
$tdataGE_PARAMETROS[".mainTableOwnerID"] = "";
$tdataGE_PARAMETROS[".moveNext"] = 1;
$tdataGE_PARAMETROS[".nType"] = 0;

$tdataGE_PARAMETROS[".strOriginalTableName"] = "GE.PARAMETROS";




$tdataGE_PARAMETROS[".showAddInPopup"] = false;

$tdataGE_PARAMETROS[".showEditInPopup"] = false;

$tdataGE_PARAMETROS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_PARAMETROS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_PARAMETROS[".fieldsForRegister"] = array();

$tdataGE_PARAMETROS[".listAjax"] = false;

	$tdataGE_PARAMETROS[".audit"] = false;

	$tdataGE_PARAMETROS[".locking"] = false;

$tdataGE_PARAMETROS[".edit"] = true;

$tdataGE_PARAMETROS[".list"] = true;

$tdataGE_PARAMETROS[".inlineEdit"] = true;
$tdataGE_PARAMETROS[".inlineAdd"] = true;
$tdataGE_PARAMETROS[".view"] = true;

$tdataGE_PARAMETROS[".import"] = true;

$tdataGE_PARAMETROS[".exportTo"] = true;

$tdataGE_PARAMETROS[".printFriendly"] = true;

$tdataGE_PARAMETROS[".delete"] = true;

$tdataGE_PARAMETROS[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_PARAMETROS[".searchSaving"] = false;
//

$tdataGE_PARAMETROS[".showSearchPanel"] = true;
		$tdataGE_PARAMETROS[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_PARAMETROS[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_PARAMETROS[".isUseAjaxSuggest"] = true;

$tdataGE_PARAMETROS[".rowHighlite"] = true;



$tdataGE_PARAMETROS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_PARAMETROS[".isUseTimeForSearch"] = false;





$tdataGE_PARAMETROS[".allSearchFields"] = array();
$tdataGE_PARAMETROS[".filterFields"] = array();
$tdataGE_PARAMETROS[".requiredSearchFields"] = array();

$tdataGE_PARAMETROS[".allSearchFields"][] = "PARAMETROS_ID";
	$tdataGE_PARAMETROS[".allSearchFields"][] = "VALOR";
	$tdataGE_PARAMETROS[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_PARAMETROS[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_PARAMETROS[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_PARAMETROS[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_PARAMETROS[".googleLikeFields"] = array();
$tdataGE_PARAMETROS[".googleLikeFields"][] = "PARAMETROS_ID";
$tdataGE_PARAMETROS[".googleLikeFields"][] = "VALOR";
$tdataGE_PARAMETROS[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_PARAMETROS[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_PARAMETROS[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PARAMETROS[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_PARAMETROS[".advSearchFields"] = array();
$tdataGE_PARAMETROS[".advSearchFields"][] = "PARAMETROS_ID";
$tdataGE_PARAMETROS[".advSearchFields"][] = "VALOR";
$tdataGE_PARAMETROS[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_PARAMETROS[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_PARAMETROS[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PARAMETROS[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_PARAMETROS[".tableType"] = "list";

$tdataGE_PARAMETROS[".printerPageOrientation"] = 0;
$tdataGE_PARAMETROS[".nPrinterPageScale"] = 100;

$tdataGE_PARAMETROS[".nPrinterSplitRecords"] = 40;

$tdataGE_PARAMETROS[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_PARAMETROS[".pageSize"] = 20;

$tdataGE_PARAMETROS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_PARAMETROS[".strOrderBy"] = $tstrOrderBy;

$tdataGE_PARAMETROS[".orderindexes"] = array();

$tdataGE_PARAMETROS[".sqlHead"] = "SELECT PARAMETROS_ID,   VALOR,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$tdataGE_PARAMETROS[".sqlFrom"] = "FROM GE.PARAMETROS";
$tdataGE_PARAMETROS[".sqlWhereExpr"] = "";
$tdataGE_PARAMETROS[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_PARAMETROS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_PARAMETROS[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_PARAMETROS[".highlightSearchResults"] = true;

$tableKeysGE_PARAMETROS = array();
$tableKeysGE_PARAMETROS[] = "PARAMETROS_ID";
$tdataGE_PARAMETROS[".Keys"] = $tableKeysGE_PARAMETROS;

$tdataGE_PARAMETROS[".listFields"] = array();
$tdataGE_PARAMETROS[".listFields"][] = "PARAMETROS_ID";
$tdataGE_PARAMETROS[".listFields"][] = "VALOR";
$tdataGE_PARAMETROS[".listFields"][] = "FEC_CREACION";
$tdataGE_PARAMETROS[".listFields"][] = "USUARIO_CREACION";
$tdataGE_PARAMETROS[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PARAMETROS[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_PARAMETROS[".hideMobileList"] = array();


$tdataGE_PARAMETROS[".viewFields"] = array();
$tdataGE_PARAMETROS[".viewFields"][] = "PARAMETROS_ID";
$tdataGE_PARAMETROS[".viewFields"][] = "VALOR";
$tdataGE_PARAMETROS[".viewFields"][] = "FEC_CREACION";
$tdataGE_PARAMETROS[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_PARAMETROS[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PARAMETROS[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_PARAMETROS[".addFields"] = array();
$tdataGE_PARAMETROS[".addFields"][] = "PARAMETROS_ID";
$tdataGE_PARAMETROS[".addFields"][] = "VALOR";

$tdataGE_PARAMETROS[".inlineAddFields"] = array();
$tdataGE_PARAMETROS[".inlineAddFields"][] = "PARAMETROS_ID";
$tdataGE_PARAMETROS[".inlineAddFields"][] = "VALOR";
$tdataGE_PARAMETROS[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_PARAMETROS[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_PARAMETROS[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PARAMETROS[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_PARAMETROS[".editFields"] = array();
$tdataGE_PARAMETROS[".editFields"][] = "PARAMETROS_ID";
$tdataGE_PARAMETROS[".editFields"][] = "VALOR";

$tdataGE_PARAMETROS[".inlineEditFields"] = array();
$tdataGE_PARAMETROS[".inlineEditFields"][] = "PARAMETROS_ID";
$tdataGE_PARAMETROS[".inlineEditFields"][] = "VALOR";
$tdataGE_PARAMETROS[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_PARAMETROS[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_PARAMETROS[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PARAMETROS[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_PARAMETROS[".exportFields"] = array();
$tdataGE_PARAMETROS[".exportFields"][] = "PARAMETROS_ID";
$tdataGE_PARAMETROS[".exportFields"][] = "VALOR";
$tdataGE_PARAMETROS[".exportFields"][] = "FEC_CREACION";
$tdataGE_PARAMETROS[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_PARAMETROS[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PARAMETROS[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_PARAMETROS[".importFields"] = array();
$tdataGE_PARAMETROS[".importFields"][] = "PARAMETROS_ID";
$tdataGE_PARAMETROS[".importFields"][] = "VALOR";
$tdataGE_PARAMETROS[".importFields"][] = "FEC_CREACION";
$tdataGE_PARAMETROS[".importFields"][] = "USUARIO_CREACION";
$tdataGE_PARAMETROS[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PARAMETROS[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_PARAMETROS[".printFields"] = array();
$tdataGE_PARAMETROS[".printFields"][] = "PARAMETROS_ID";
$tdataGE_PARAMETROS[".printFields"][] = "VALOR";
$tdataGE_PARAMETROS[".printFields"][] = "FEC_CREACION";
$tdataGE_PARAMETROS[".printFields"][] = "USUARIO_CREACION";
$tdataGE_PARAMETROS[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PARAMETROS[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	PARAMETROS_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PARAMETROS_ID";
	$fdata["GoodName"] = "PARAMETROS_ID";
	$fdata["ownerTable"] = "GE.PARAMETROS";
	$fdata["Label"] = GetFieldLabel("GE_PARAMETROS","PARAMETROS_ID"); 
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
	
		$fdata["strField"] = "PARAMETROS_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PARAMETROS_ID";
	
		
		
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
			$edata["EditParams"].= " maxlength=40";
	
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

	

	
	$tdataGE_PARAMETROS["PARAMETROS_ID"] = $fdata;
//	VALOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "VALOR";
	$fdata["GoodName"] = "VALOR";
	$fdata["ownerTable"] = "GE.PARAMETROS";
	$fdata["Label"] = GetFieldLabel("GE_PARAMETROS","VALOR"); 
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
	
		$fdata["strField"] = "VALOR"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR";
	
		
		
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
			$edata["EditParams"].= " maxlength=40";
	
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

	

	
	$tdataGE_PARAMETROS["VALOR"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.PARAMETROS";
	$fdata["Label"] = GetFieldLabel("GE_PARAMETROS","FEC_CREACION"); 
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

	

	
	$tdataGE_PARAMETROS["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.PARAMETROS";
	$fdata["Label"] = GetFieldLabel("GE_PARAMETROS","USUARIO_CREACION"); 
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

	

	
	$tdataGE_PARAMETROS["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.PARAMETROS";
	$fdata["Label"] = GetFieldLabel("GE_PARAMETROS","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_PARAMETROS["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.PARAMETROS";
	$fdata["Label"] = GetFieldLabel("GE_PARAMETROS","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_PARAMETROS["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.PARAMETROS"]=&$tdataGE_PARAMETROS;
$field_labels["GE_PARAMETROS"] = &$fieldLabelsGE_PARAMETROS;
$fieldToolTips["GE.PARAMETROS"] = &$fieldToolTipsGE_PARAMETROS;
$page_titles["GE_PARAMETROS"] = &$pageTitlesGE_PARAMETROS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.PARAMETROS"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.PARAMETROS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_PARAMETROS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PARAMETROS_ID,   VALOR,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.PARAMETROS";
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
	"m_strName" => "PARAMETROS_ID",
	"m_strTable" => "GE.PARAMETROS",
	"m_srcTableName" => "GE.PARAMETROS"
));

$proto5["m_sql"] = "PARAMETROS_ID";
$proto5["m_srcTableName"] = "GE.PARAMETROS";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR",
	"m_strTable" => "GE.PARAMETROS",
	"m_srcTableName" => "GE.PARAMETROS"
));

$proto7["m_sql"] = "VALOR";
$proto7["m_srcTableName"] = "GE.PARAMETROS";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.PARAMETROS",
	"m_srcTableName" => "GE.PARAMETROS"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.PARAMETROS";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.PARAMETROS",
	"m_srcTableName" => "GE.PARAMETROS"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.PARAMETROS";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.PARAMETROS",
	"m_srcTableName" => "GE.PARAMETROS"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.PARAMETROS";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.PARAMETROS",
	"m_srcTableName" => "GE.PARAMETROS"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.PARAMETROS";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.PARAMETROS";
$proto18["m_srcTableName"] = "GE.PARAMETROS";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "PARAMETROS_ID";
$proto18["m_columns"][] = "VALOR";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.PARAMETROS";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.PARAMETROS";
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
$proto0["m_srcTableName"]="GE.PARAMETROS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_PARAMETROS = createSqlQuery_GE_PARAMETROS();


	
						
	
$tdataGE_PARAMETROS[".sqlquery"] = $queryData_GE_PARAMETROS;

$tableEvents["GE.PARAMETROS"] = new eventsBase;
$tdataGE_PARAMETROS[".hasEvents"] = false;

?>
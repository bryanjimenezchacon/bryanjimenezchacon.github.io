<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_GENERO = array();	
	$tdataGE_GENERO[".truncateText"] = true;
	$tdataGE_GENERO[".NumberOfChars"] = 80; 
	$tdataGE_GENERO[".ShortName"] = "GE_GENERO";
	$tdataGE_GENERO[".OwnerID"] = "";
	$tdataGE_GENERO[".OriginalTable"] = "GE.GENERO";

//	field labels
$fieldLabelsGE_GENERO = array();
$fieldToolTipsGE_GENERO = array();
$pageTitlesGE_GENERO = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_GENERO["Spanish"] = array();
	$fieldToolTipsGE_GENERO["Spanish"] = array();
	$pageTitlesGE_GENERO["Spanish"] = array();
	$fieldLabelsGE_GENERO["Spanish"]["GENERO_ID"] = "GENERO ID";
	$fieldToolTipsGE_GENERO["Spanish"]["GENERO_ID"] = "";
	$fieldLabelsGE_GENERO["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_GENERO["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGE_GENERO["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_GENERO["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_GENERO["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_GENERO["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_GENERO["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_GENERO["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_GENERO["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_GENERO["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_GENERO["Spanish"]))
		$tdataGE_GENERO[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_GENERO[""] = array();
	$fieldToolTipsGE_GENERO[""] = array();
	$pageTitlesGE_GENERO[""] = array();
	$fieldLabelsGE_GENERO[""]["GENERO_ID"] = "GENERO ID";
	$fieldToolTipsGE_GENERO[""]["GENERO_ID"] = "";
	$fieldLabelsGE_GENERO[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_GENERO[""]["NOMBRE"] = "";
	$fieldLabelsGE_GENERO[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_GENERO[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_GENERO[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_GENERO[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_GENERO[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_GENERO[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_GENERO[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_GENERO[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_GENERO[""]))
		$tdataGE_GENERO[".isUseToolTips"] = true;
}
	
	
	$tdataGE_GENERO[".NCSearch"] = true;



$tdataGE_GENERO[".shortTableName"] = "GE_GENERO";
$tdataGE_GENERO[".nSecOptions"] = 0;
$tdataGE_GENERO[".recsPerRowList"] = 1;
$tdataGE_GENERO[".mainTableOwnerID"] = "";
$tdataGE_GENERO[".moveNext"] = 1;
$tdataGE_GENERO[".nType"] = 0;

$tdataGE_GENERO[".strOriginalTableName"] = "GE.GENERO";




$tdataGE_GENERO[".showAddInPopup"] = false;

$tdataGE_GENERO[".showEditInPopup"] = false;

$tdataGE_GENERO[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_GENERO[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_GENERO[".fieldsForRegister"] = array();

$tdataGE_GENERO[".listAjax"] = false;

	$tdataGE_GENERO[".audit"] = false;

	$tdataGE_GENERO[".locking"] = false;

$tdataGE_GENERO[".edit"] = true;

$tdataGE_GENERO[".list"] = true;

$tdataGE_GENERO[".inlineEdit"] = true;
$tdataGE_GENERO[".inlineAdd"] = true;
$tdataGE_GENERO[".view"] = true;

$tdataGE_GENERO[".import"] = true;

$tdataGE_GENERO[".exportTo"] = true;

$tdataGE_GENERO[".printFriendly"] = true;

$tdataGE_GENERO[".delete"] = true;

$tdataGE_GENERO[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_GENERO[".searchSaving"] = false;
//

$tdataGE_GENERO[".showSearchPanel"] = true;
		$tdataGE_GENERO[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_GENERO[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_GENERO[".isUseAjaxSuggest"] = true;

$tdataGE_GENERO[".rowHighlite"] = true;



$tdataGE_GENERO[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_GENERO[".isUseTimeForSearch"] = false;



$tdataGE_GENERO[".useDetailsPreview"] = true;


$tdataGE_GENERO[".allSearchFields"] = array();
$tdataGE_GENERO[".filterFields"] = array();
$tdataGE_GENERO[".requiredSearchFields"] = array();

$tdataGE_GENERO[".allSearchFields"][] = "GENERO_ID";
	$tdataGE_GENERO[".allSearchFields"][] = "NOMBRE";
	$tdataGE_GENERO[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_GENERO[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_GENERO[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_GENERO[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_GENERO[".googleLikeFields"] = array();
$tdataGE_GENERO[".googleLikeFields"][] = "GENERO_ID";
$tdataGE_GENERO[".googleLikeFields"][] = "NOMBRE";
$tdataGE_GENERO[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_GENERO[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_GENERO[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_GENERO[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_GENERO[".advSearchFields"] = array();
$tdataGE_GENERO[".advSearchFields"][] = "GENERO_ID";
$tdataGE_GENERO[".advSearchFields"][] = "NOMBRE";
$tdataGE_GENERO[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_GENERO[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_GENERO[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_GENERO[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_GENERO[".tableType"] = "list";

$tdataGE_GENERO[".printerPageOrientation"] = 0;
$tdataGE_GENERO[".nPrinterPageScale"] = 100;

$tdataGE_GENERO[".nPrinterSplitRecords"] = 40;

$tdataGE_GENERO[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_GENERO[".pageSize"] = 20;

$tdataGE_GENERO[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_GENERO[".strOrderBy"] = $tstrOrderBy;

$tdataGE_GENERO[".orderindexes"] = array();

$tdataGE_GENERO[".sqlHead"] = "SELECT GENERO_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$tdataGE_GENERO[".sqlFrom"] = "FROM GE.GENERO";
$tdataGE_GENERO[".sqlWhereExpr"] = "";
$tdataGE_GENERO[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_GENERO[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_GENERO[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_GENERO[".highlightSearchResults"] = true;

$tableKeysGE_GENERO = array();
$tableKeysGE_GENERO[] = "GENERO_ID";
$tdataGE_GENERO[".Keys"] = $tableKeysGE_GENERO;

$tdataGE_GENERO[".listFields"] = array();
$tdataGE_GENERO[".listFields"][] = "GENERO_ID";
$tdataGE_GENERO[".listFields"][] = "NOMBRE";
$tdataGE_GENERO[".listFields"][] = "FEC_CREACION";
$tdataGE_GENERO[".listFields"][] = "USUARIO_CREACION";
$tdataGE_GENERO[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_GENERO[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_GENERO[".hideMobileList"] = array();


$tdataGE_GENERO[".viewFields"] = array();
$tdataGE_GENERO[".viewFields"][] = "GENERO_ID";
$tdataGE_GENERO[".viewFields"][] = "NOMBRE";
$tdataGE_GENERO[".viewFields"][] = "FEC_CREACION";
$tdataGE_GENERO[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_GENERO[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_GENERO[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_GENERO[".addFields"] = array();
$tdataGE_GENERO[".addFields"][] = "GENERO_ID";
$tdataGE_GENERO[".addFields"][] = "NOMBRE";

$tdataGE_GENERO[".inlineAddFields"] = array();
$tdataGE_GENERO[".inlineAddFields"][] = "GENERO_ID";
$tdataGE_GENERO[".inlineAddFields"][] = "NOMBRE";
$tdataGE_GENERO[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_GENERO[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_GENERO[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_GENERO[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_GENERO[".editFields"] = array();
$tdataGE_GENERO[".editFields"][] = "GENERO_ID";
$tdataGE_GENERO[".editFields"][] = "NOMBRE";

$tdataGE_GENERO[".inlineEditFields"] = array();
$tdataGE_GENERO[".inlineEditFields"][] = "GENERO_ID";
$tdataGE_GENERO[".inlineEditFields"][] = "NOMBRE";
$tdataGE_GENERO[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_GENERO[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_GENERO[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_GENERO[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_GENERO[".exportFields"] = array();
$tdataGE_GENERO[".exportFields"][] = "GENERO_ID";
$tdataGE_GENERO[".exportFields"][] = "NOMBRE";
$tdataGE_GENERO[".exportFields"][] = "FEC_CREACION";
$tdataGE_GENERO[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_GENERO[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_GENERO[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_GENERO[".importFields"] = array();
$tdataGE_GENERO[".importFields"][] = "GENERO_ID";
$tdataGE_GENERO[".importFields"][] = "NOMBRE";
$tdataGE_GENERO[".importFields"][] = "FEC_CREACION";
$tdataGE_GENERO[".importFields"][] = "USUARIO_CREACION";
$tdataGE_GENERO[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_GENERO[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_GENERO[".printFields"] = array();
$tdataGE_GENERO[".printFields"][] = "GENERO_ID";
$tdataGE_GENERO[".printFields"][] = "NOMBRE";
$tdataGE_GENERO[".printFields"][] = "FEC_CREACION";
$tdataGE_GENERO[".printFields"][] = "USUARIO_CREACION";
$tdataGE_GENERO[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_GENERO[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	GENERO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GENERO_ID";
	$fdata["GoodName"] = "GENERO_ID";
	$fdata["ownerTable"] = "GE.GENERO";
	$fdata["Label"] = GetFieldLabel("GE_GENERO","GENERO_ID"); 
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
	
		$fdata["strField"] = "GENERO_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GENERO_ID";
	
		
		
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

	

	
	$tdataGE_GENERO["GENERO_ID"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "GE.GENERO";
	$fdata["Label"] = GetFieldLabel("GE_GENERO","NOMBRE"); 
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

	

	
	$tdataGE_GENERO["NOMBRE"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.GENERO";
	$fdata["Label"] = GetFieldLabel("GE_GENERO","FEC_CREACION"); 
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

	

	
	$tdataGE_GENERO["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.GENERO";
	$fdata["Label"] = GetFieldLabel("GE_GENERO","USUARIO_CREACION"); 
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

	

	
	$tdataGE_GENERO["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.GENERO";
	$fdata["Label"] = GetFieldLabel("GE_GENERO","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_GENERO["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.GENERO";
	$fdata["Label"] = GetFieldLabel("GE_GENERO","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_GENERO["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.GENERO"]=&$tdataGE_GENERO;
$field_labels["GE_GENERO"] = &$fieldLabelsGE_GENERO;
$fieldToolTips["GE.GENERO"] = &$fieldToolTipsGE_GENERO;
$page_titles["GE_GENERO"] = &$pageTitlesGE_GENERO;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.GENERO"] = array();
//	GE.PERSONA
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.PERSONA";
		$detailsParam["dOriginalTable"] = "GE.PERSONA";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_PERSONA";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.GENERO"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.GENERO"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.GENERO"][$dIndex]["masterKeys"][]="GENERO_ID";

				$detailsTablesData["GE.GENERO"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.GENERO"][$dIndex]["detailKeys"][]="GENERO_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.GENERO"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_GENERO()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GENERO_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.GENERO";
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
	"m_strName" => "GENERO_ID",
	"m_strTable" => "GE.GENERO",
	"m_srcTableName" => "GE.GENERO"
));

$proto5["m_sql"] = "GENERO_ID";
$proto5["m_srcTableName"] = "GE.GENERO";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "GE.GENERO",
	"m_srcTableName" => "GE.GENERO"
));

$proto7["m_sql"] = "NOMBRE";
$proto7["m_srcTableName"] = "GE.GENERO";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.GENERO",
	"m_srcTableName" => "GE.GENERO"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.GENERO";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.GENERO",
	"m_srcTableName" => "GE.GENERO"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.GENERO";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.GENERO",
	"m_srcTableName" => "GE.GENERO"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.GENERO";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.GENERO",
	"m_srcTableName" => "GE.GENERO"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.GENERO";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.GENERO";
$proto18["m_srcTableName"] = "GE.GENERO";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "GENERO_ID";
$proto18["m_columns"][] = "NOMBRE";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.GENERO";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.GENERO";
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
$proto0["m_srcTableName"]="GE.GENERO";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_GENERO = createSqlQuery_GE_GENERO();


	
						
	
$tdataGE_GENERO[".sqlquery"] = $queryData_GE_GENERO;

$tableEvents["GE.GENERO"] = new eventsBase;
$tdataGE_GENERO[".hasEvents"] = false;

?>
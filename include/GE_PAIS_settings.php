<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_PAIS = array();	
	$tdataGE_PAIS[".truncateText"] = true;
	$tdataGE_PAIS[".NumberOfChars"] = 80; 
	$tdataGE_PAIS[".ShortName"] = "GE_PAIS";
	$tdataGE_PAIS[".OwnerID"] = "";
	$tdataGE_PAIS[".OriginalTable"] = "GE.PAIS";

//	field labels
$fieldLabelsGE_PAIS = array();
$fieldToolTipsGE_PAIS = array();
$pageTitlesGE_PAIS = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_PAIS["Spanish"] = array();
	$fieldToolTipsGE_PAIS["Spanish"] = array();
	$pageTitlesGE_PAIS["Spanish"] = array();
	$fieldLabelsGE_PAIS["Spanish"]["PAIS_ID"] = "PAIS ID";
	$fieldToolTipsGE_PAIS["Spanish"]["PAIS_ID"] = "";
	$fieldLabelsGE_PAIS["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_PAIS["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGE_PAIS["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_PAIS["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_PAIS["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_PAIS["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_PAIS["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_PAIS["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_PAIS["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_PAIS["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_PAIS["Spanish"]))
		$tdataGE_PAIS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_PAIS[""] = array();
	$fieldToolTipsGE_PAIS[""] = array();
	$pageTitlesGE_PAIS[""] = array();
	$fieldLabelsGE_PAIS[""]["PAIS_ID"] = "PAIS ID";
	$fieldToolTipsGE_PAIS[""]["PAIS_ID"] = "";
	$fieldLabelsGE_PAIS[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_PAIS[""]["NOMBRE"] = "";
	$fieldLabelsGE_PAIS[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_PAIS[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_PAIS[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_PAIS[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_PAIS[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_PAIS[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_PAIS[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_PAIS[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_PAIS[""]))
		$tdataGE_PAIS[".isUseToolTips"] = true;
}
	
	
	$tdataGE_PAIS[".NCSearch"] = true;



$tdataGE_PAIS[".shortTableName"] = "GE_PAIS";
$tdataGE_PAIS[".nSecOptions"] = 0;
$tdataGE_PAIS[".recsPerRowList"] = 1;
$tdataGE_PAIS[".mainTableOwnerID"] = "";
$tdataGE_PAIS[".moveNext"] = 1;
$tdataGE_PAIS[".nType"] = 0;

$tdataGE_PAIS[".strOriginalTableName"] = "GE.PAIS";




$tdataGE_PAIS[".showAddInPopup"] = false;

$tdataGE_PAIS[".showEditInPopup"] = false;

$tdataGE_PAIS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_PAIS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_PAIS[".fieldsForRegister"] = array();

$tdataGE_PAIS[".listAjax"] = false;

	$tdataGE_PAIS[".audit"] = false;

	$tdataGE_PAIS[".locking"] = false;

$tdataGE_PAIS[".edit"] = true;

$tdataGE_PAIS[".list"] = true;

$tdataGE_PAIS[".inlineEdit"] = true;
$tdataGE_PAIS[".inlineAdd"] = true;
$tdataGE_PAIS[".view"] = true;

$tdataGE_PAIS[".import"] = true;

$tdataGE_PAIS[".exportTo"] = true;

$tdataGE_PAIS[".printFriendly"] = true;

$tdataGE_PAIS[".delete"] = true;

$tdataGE_PAIS[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_PAIS[".searchSaving"] = false;
//

$tdataGE_PAIS[".showSearchPanel"] = true;
		$tdataGE_PAIS[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_PAIS[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_PAIS[".isUseAjaxSuggest"] = true;

$tdataGE_PAIS[".rowHighlite"] = true;



$tdataGE_PAIS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_PAIS[".isUseTimeForSearch"] = false;



$tdataGE_PAIS[".useDetailsPreview"] = true;


$tdataGE_PAIS[".allSearchFields"] = array();
$tdataGE_PAIS[".filterFields"] = array();
$tdataGE_PAIS[".requiredSearchFields"] = array();

$tdataGE_PAIS[".allSearchFields"][] = "PAIS_ID";
	$tdataGE_PAIS[".allSearchFields"][] = "NOMBRE";
	$tdataGE_PAIS[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_PAIS[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_PAIS[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_PAIS[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_PAIS[".googleLikeFields"] = array();
$tdataGE_PAIS[".googleLikeFields"][] = "PAIS_ID";
$tdataGE_PAIS[".googleLikeFields"][] = "NOMBRE";
$tdataGE_PAIS[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_PAIS[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_PAIS[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PAIS[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_PAIS[".advSearchFields"] = array();
$tdataGE_PAIS[".advSearchFields"][] = "PAIS_ID";
$tdataGE_PAIS[".advSearchFields"][] = "NOMBRE";
$tdataGE_PAIS[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_PAIS[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_PAIS[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PAIS[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_PAIS[".tableType"] = "list";

$tdataGE_PAIS[".printerPageOrientation"] = 0;
$tdataGE_PAIS[".nPrinterPageScale"] = 100;

$tdataGE_PAIS[".nPrinterSplitRecords"] = 40;

$tdataGE_PAIS[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_PAIS[".pageSize"] = 20;

$tdataGE_PAIS[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_PAIS[".strOrderBy"] = $tstrOrderBy;

$tdataGE_PAIS[".orderindexes"] = array();

$tdataGE_PAIS[".sqlHead"] = "SELECT PAIS_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$tdataGE_PAIS[".sqlFrom"] = "FROM GE.PAIS";
$tdataGE_PAIS[".sqlWhereExpr"] = "";
$tdataGE_PAIS[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_PAIS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_PAIS[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_PAIS[".highlightSearchResults"] = true;

$tableKeysGE_PAIS = array();
$tableKeysGE_PAIS[] = "PAIS_ID";
$tdataGE_PAIS[".Keys"] = $tableKeysGE_PAIS;

$tdataGE_PAIS[".listFields"] = array();
$tdataGE_PAIS[".listFields"][] = "PAIS_ID";
$tdataGE_PAIS[".listFields"][] = "NOMBRE";
$tdataGE_PAIS[".listFields"][] = "FEC_CREACION";
$tdataGE_PAIS[".listFields"][] = "USUARIO_CREACION";
$tdataGE_PAIS[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PAIS[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_PAIS[".hideMobileList"] = array();


$tdataGE_PAIS[".viewFields"] = array();
$tdataGE_PAIS[".viewFields"][] = "PAIS_ID";
$tdataGE_PAIS[".viewFields"][] = "NOMBRE";
$tdataGE_PAIS[".viewFields"][] = "FEC_CREACION";
$tdataGE_PAIS[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_PAIS[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PAIS[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_PAIS[".addFields"] = array();
$tdataGE_PAIS[".addFields"][] = "PAIS_ID";
$tdataGE_PAIS[".addFields"][] = "NOMBRE";

$tdataGE_PAIS[".inlineAddFields"] = array();
$tdataGE_PAIS[".inlineAddFields"][] = "PAIS_ID";
$tdataGE_PAIS[".inlineAddFields"][] = "NOMBRE";
$tdataGE_PAIS[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_PAIS[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_PAIS[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PAIS[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_PAIS[".editFields"] = array();
$tdataGE_PAIS[".editFields"][] = "PAIS_ID";
$tdataGE_PAIS[".editFields"][] = "NOMBRE";

$tdataGE_PAIS[".inlineEditFields"] = array();
$tdataGE_PAIS[".inlineEditFields"][] = "PAIS_ID";
$tdataGE_PAIS[".inlineEditFields"][] = "NOMBRE";
$tdataGE_PAIS[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_PAIS[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_PAIS[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PAIS[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_PAIS[".exportFields"] = array();
$tdataGE_PAIS[".exportFields"][] = "PAIS_ID";
$tdataGE_PAIS[".exportFields"][] = "NOMBRE";
$tdataGE_PAIS[".exportFields"][] = "FEC_CREACION";
$tdataGE_PAIS[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_PAIS[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PAIS[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_PAIS[".importFields"] = array();
$tdataGE_PAIS[".importFields"][] = "PAIS_ID";
$tdataGE_PAIS[".importFields"][] = "NOMBRE";
$tdataGE_PAIS[".importFields"][] = "FEC_CREACION";
$tdataGE_PAIS[".importFields"][] = "USUARIO_CREACION";
$tdataGE_PAIS[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PAIS[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_PAIS[".printFields"] = array();
$tdataGE_PAIS[".printFields"][] = "PAIS_ID";
$tdataGE_PAIS[".printFields"][] = "NOMBRE";
$tdataGE_PAIS[".printFields"][] = "FEC_CREACION";
$tdataGE_PAIS[".printFields"][] = "USUARIO_CREACION";
$tdataGE_PAIS[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PAIS[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	PAIS_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAIS_ID";
	$fdata["GoodName"] = "PAIS_ID";
	$fdata["ownerTable"] = "GE.PAIS";
	$fdata["Label"] = GetFieldLabel("GE_PAIS","PAIS_ID"); 
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
	
		$fdata["strField"] = "PAIS_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAIS_ID";
	
		
		
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

	

	
	$tdataGE_PAIS["PAIS_ID"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "GE.PAIS";
	$fdata["Label"] = GetFieldLabel("GE_PAIS","NOMBRE"); 
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

	

	
	$tdataGE_PAIS["NOMBRE"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.PAIS";
	$fdata["Label"] = GetFieldLabel("GE_PAIS","FEC_CREACION"); 
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

	

	
	$tdataGE_PAIS["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.PAIS";
	$fdata["Label"] = GetFieldLabel("GE_PAIS","USUARIO_CREACION"); 
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

	

	
	$tdataGE_PAIS["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.PAIS";
	$fdata["Label"] = GetFieldLabel("GE_PAIS","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_PAIS["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.PAIS";
	$fdata["Label"] = GetFieldLabel("GE_PAIS","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_PAIS["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.PAIS"]=&$tdataGE_PAIS;
$field_labels["GE_PAIS"] = &$fieldLabelsGE_PAIS;
$fieldToolTips["GE.PAIS"] = &$fieldToolTipsGE_PAIS;
$page_titles["GE_PAIS"] = &$pageTitlesGE_PAIS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.PAIS"] = array();
//	GE.CIUDAD
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.CIUDAD";
		$detailsParam["dOriginalTable"] = "GE.CIUDAD";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_CIUDAD";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.PAIS"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.PAIS"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.PAIS"][$dIndex]["masterKeys"][]="PAIS_ID";

				$detailsTablesData["GE.PAIS"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.PAIS"][$dIndex]["detailKeys"][]="PAIS_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.PAIS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_PAIS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAIS_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.PAIS";
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
	"m_strName" => "PAIS_ID",
	"m_strTable" => "GE.PAIS",
	"m_srcTableName" => "GE.PAIS"
));

$proto5["m_sql"] = "PAIS_ID";
$proto5["m_srcTableName"] = "GE.PAIS";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "GE.PAIS",
	"m_srcTableName" => "GE.PAIS"
));

$proto7["m_sql"] = "NOMBRE";
$proto7["m_srcTableName"] = "GE.PAIS";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.PAIS",
	"m_srcTableName" => "GE.PAIS"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.PAIS";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.PAIS",
	"m_srcTableName" => "GE.PAIS"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.PAIS";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.PAIS",
	"m_srcTableName" => "GE.PAIS"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.PAIS";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.PAIS",
	"m_srcTableName" => "GE.PAIS"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.PAIS";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.PAIS";
$proto18["m_srcTableName"] = "GE.PAIS";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "PAIS_ID";
$proto18["m_columns"][] = "NOMBRE";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.PAIS";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.PAIS";
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
$proto0["m_srcTableName"]="GE.PAIS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_PAIS = createSqlQuery_GE_PAIS();


	
						
	
$tdataGE_PAIS[".sqlquery"] = $queryData_GE_PAIS;

$tableEvents["GE.PAIS"] = new eventsBase;
$tdataGE_PAIS[".hasEvents"] = false;

?>
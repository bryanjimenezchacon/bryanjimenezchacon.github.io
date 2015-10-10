<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_COLOR_PELO = array();	
	$tdataGE_COLOR_PELO[".truncateText"] = true;
	$tdataGE_COLOR_PELO[".NumberOfChars"] = 80; 
	$tdataGE_COLOR_PELO[".ShortName"] = "GE_COLOR_PELO";
	$tdataGE_COLOR_PELO[".OwnerID"] = "";
	$tdataGE_COLOR_PELO[".OriginalTable"] = "GE.COLOR_PELO";

//	field labels
$fieldLabelsGE_COLOR_PELO = array();
$fieldToolTipsGE_COLOR_PELO = array();
$pageTitlesGE_COLOR_PELO = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_COLOR_PELO["Spanish"] = array();
	$fieldToolTipsGE_COLOR_PELO["Spanish"] = array();
	$pageTitlesGE_COLOR_PELO["Spanish"] = array();
	$fieldLabelsGE_COLOR_PELO["Spanish"]["COLOR_PELO_ID"] = "COLOR PELO ID";
	$fieldToolTipsGE_COLOR_PELO["Spanish"]["COLOR_PELO_ID"] = "";
	$fieldLabelsGE_COLOR_PELO["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_COLOR_PELO["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGE_COLOR_PELO["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_COLOR_PELO["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_COLOR_PELO["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_COLOR_PELO["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_COLOR_PELO["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_COLOR_PELO["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_COLOR_PELO["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_COLOR_PELO["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_COLOR_PELO["Spanish"]))
		$tdataGE_COLOR_PELO[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_COLOR_PELO[""] = array();
	$fieldToolTipsGE_COLOR_PELO[""] = array();
	$pageTitlesGE_COLOR_PELO[""] = array();
	$fieldLabelsGE_COLOR_PELO[""]["COLOR_PELO_ID"] = "COLOR PELO ID";
	$fieldToolTipsGE_COLOR_PELO[""]["COLOR_PELO_ID"] = "";
	$fieldLabelsGE_COLOR_PELO[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_COLOR_PELO[""]["NOMBRE"] = "";
	$fieldLabelsGE_COLOR_PELO[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_COLOR_PELO[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_COLOR_PELO[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_COLOR_PELO[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_COLOR_PELO[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_COLOR_PELO[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_COLOR_PELO[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_COLOR_PELO[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_COLOR_PELO[""]))
		$tdataGE_COLOR_PELO[".isUseToolTips"] = true;
}
	
	
	$tdataGE_COLOR_PELO[".NCSearch"] = true;



$tdataGE_COLOR_PELO[".shortTableName"] = "GE_COLOR_PELO";
$tdataGE_COLOR_PELO[".nSecOptions"] = 0;
$tdataGE_COLOR_PELO[".recsPerRowList"] = 1;
$tdataGE_COLOR_PELO[".mainTableOwnerID"] = "";
$tdataGE_COLOR_PELO[".moveNext"] = 1;
$tdataGE_COLOR_PELO[".nType"] = 0;

$tdataGE_COLOR_PELO[".strOriginalTableName"] = "GE.COLOR_PELO";




$tdataGE_COLOR_PELO[".showAddInPopup"] = false;

$tdataGE_COLOR_PELO[".showEditInPopup"] = false;

$tdataGE_COLOR_PELO[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_COLOR_PELO[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_COLOR_PELO[".fieldsForRegister"] = array();

$tdataGE_COLOR_PELO[".listAjax"] = false;

	$tdataGE_COLOR_PELO[".audit"] = false;

	$tdataGE_COLOR_PELO[".locking"] = false;

$tdataGE_COLOR_PELO[".edit"] = true;

$tdataGE_COLOR_PELO[".list"] = true;

$tdataGE_COLOR_PELO[".inlineEdit"] = true;
$tdataGE_COLOR_PELO[".inlineAdd"] = true;
$tdataGE_COLOR_PELO[".view"] = true;

$tdataGE_COLOR_PELO[".import"] = true;

$tdataGE_COLOR_PELO[".exportTo"] = true;

$tdataGE_COLOR_PELO[".printFriendly"] = true;

$tdataGE_COLOR_PELO[".delete"] = true;

$tdataGE_COLOR_PELO[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_COLOR_PELO[".searchSaving"] = false;
//

$tdataGE_COLOR_PELO[".showSearchPanel"] = true;
		$tdataGE_COLOR_PELO[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_COLOR_PELO[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_COLOR_PELO[".isUseAjaxSuggest"] = true;

$tdataGE_COLOR_PELO[".rowHighlite"] = true;



$tdataGE_COLOR_PELO[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_COLOR_PELO[".isUseTimeForSearch"] = false;



$tdataGE_COLOR_PELO[".useDetailsPreview"] = true;


$tdataGE_COLOR_PELO[".allSearchFields"] = array();
$tdataGE_COLOR_PELO[".filterFields"] = array();
$tdataGE_COLOR_PELO[".requiredSearchFields"] = array();

$tdataGE_COLOR_PELO[".allSearchFields"][] = "COLOR_PELO_ID";
	$tdataGE_COLOR_PELO[".allSearchFields"][] = "NOMBRE";
	$tdataGE_COLOR_PELO[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_COLOR_PELO[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_COLOR_PELO[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_COLOR_PELO[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_COLOR_PELO[".googleLikeFields"] = array();
$tdataGE_COLOR_PELO[".googleLikeFields"][] = "COLOR_PELO_ID";
$tdataGE_COLOR_PELO[".googleLikeFields"][] = "NOMBRE";
$tdataGE_COLOR_PELO[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PELO[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PELO[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PELO[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_COLOR_PELO[".advSearchFields"] = array();
$tdataGE_COLOR_PELO[".advSearchFields"][] = "COLOR_PELO_ID";
$tdataGE_COLOR_PELO[".advSearchFields"][] = "NOMBRE";
$tdataGE_COLOR_PELO[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PELO[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PELO[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PELO[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_PELO[".tableType"] = "list";

$tdataGE_COLOR_PELO[".printerPageOrientation"] = 0;
$tdataGE_COLOR_PELO[".nPrinterPageScale"] = 100;

$tdataGE_COLOR_PELO[".nPrinterSplitRecords"] = 40;

$tdataGE_COLOR_PELO[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_COLOR_PELO[".pageSize"] = 20;

$tdataGE_COLOR_PELO[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_COLOR_PELO[".strOrderBy"] = $tstrOrderBy;

$tdataGE_COLOR_PELO[".orderindexes"] = array();

$tdataGE_COLOR_PELO[".sqlHead"] = "SELECT COLOR_PELO_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$tdataGE_COLOR_PELO[".sqlFrom"] = "FROM GE.COLOR_PELO";
$tdataGE_COLOR_PELO[".sqlWhereExpr"] = "";
$tdataGE_COLOR_PELO[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_COLOR_PELO[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_COLOR_PELO[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_COLOR_PELO[".highlightSearchResults"] = true;

$tableKeysGE_COLOR_PELO = array();
$tableKeysGE_COLOR_PELO[] = "COLOR_PELO_ID";
$tdataGE_COLOR_PELO[".Keys"] = $tableKeysGE_COLOR_PELO;

$tdataGE_COLOR_PELO[".listFields"] = array();
$tdataGE_COLOR_PELO[".listFields"][] = "COLOR_PELO_ID";
$tdataGE_COLOR_PELO[".listFields"][] = "NOMBRE";
$tdataGE_COLOR_PELO[".listFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PELO[".listFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PELO[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PELO[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_PELO[".hideMobileList"] = array();


$tdataGE_COLOR_PELO[".viewFields"] = array();
$tdataGE_COLOR_PELO[".viewFields"][] = "COLOR_PELO_ID";
$tdataGE_COLOR_PELO[".viewFields"][] = "NOMBRE";
$tdataGE_COLOR_PELO[".viewFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PELO[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PELO[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PELO[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_PELO[".addFields"] = array();
$tdataGE_COLOR_PELO[".addFields"][] = "COLOR_PELO_ID";
$tdataGE_COLOR_PELO[".addFields"][] = "NOMBRE";

$tdataGE_COLOR_PELO[".inlineAddFields"] = array();
$tdataGE_COLOR_PELO[".inlineAddFields"][] = "COLOR_PELO_ID";
$tdataGE_COLOR_PELO[".inlineAddFields"][] = "NOMBRE";
$tdataGE_COLOR_PELO[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PELO[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PELO[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PELO[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_PELO[".editFields"] = array();
$tdataGE_COLOR_PELO[".editFields"][] = "COLOR_PELO_ID";
$tdataGE_COLOR_PELO[".editFields"][] = "NOMBRE";

$tdataGE_COLOR_PELO[".inlineEditFields"] = array();
$tdataGE_COLOR_PELO[".inlineEditFields"][] = "COLOR_PELO_ID";
$tdataGE_COLOR_PELO[".inlineEditFields"][] = "NOMBRE";
$tdataGE_COLOR_PELO[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PELO[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PELO[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PELO[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_PELO[".exportFields"] = array();
$tdataGE_COLOR_PELO[".exportFields"][] = "COLOR_PELO_ID";
$tdataGE_COLOR_PELO[".exportFields"][] = "NOMBRE";
$tdataGE_COLOR_PELO[".exportFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PELO[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PELO[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PELO[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_PELO[".importFields"] = array();
$tdataGE_COLOR_PELO[".importFields"][] = "COLOR_PELO_ID";
$tdataGE_COLOR_PELO[".importFields"][] = "NOMBRE";
$tdataGE_COLOR_PELO[".importFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PELO[".importFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PELO[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PELO[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_PELO[".printFields"] = array();
$tdataGE_COLOR_PELO[".printFields"][] = "COLOR_PELO_ID";
$tdataGE_COLOR_PELO[".printFields"][] = "NOMBRE";
$tdataGE_COLOR_PELO[".printFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PELO[".printFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PELO[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PELO[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	COLOR_PELO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COLOR_PELO_ID";
	$fdata["GoodName"] = "COLOR_PELO_ID";
	$fdata["ownerTable"] = "GE.COLOR_PELO";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_PELO","COLOR_PELO_ID"); 
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
	
		$fdata["strField"] = "COLOR_PELO_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COLOR_PELO_ID";
	
		
		
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

	

	
	$tdataGE_COLOR_PELO["COLOR_PELO_ID"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "GE.COLOR_PELO";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_PELO","NOMBRE"); 
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

	

	
	$tdataGE_COLOR_PELO["NOMBRE"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.COLOR_PELO";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_PELO","FEC_CREACION"); 
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

	

	
	$tdataGE_COLOR_PELO["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.COLOR_PELO";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_PELO","USUARIO_CREACION"); 
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

	

	
	$tdataGE_COLOR_PELO["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.COLOR_PELO";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_PELO","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_COLOR_PELO["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.COLOR_PELO";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_PELO","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_COLOR_PELO["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.COLOR_PELO"]=&$tdataGE_COLOR_PELO;
$field_labels["GE_COLOR_PELO"] = &$fieldLabelsGE_COLOR_PELO;
$fieldToolTips["GE.COLOR_PELO"] = &$fieldToolTipsGE_COLOR_PELO;
$page_titles["GE_COLOR_PELO"] = &$pageTitlesGE_COLOR_PELO;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.COLOR_PELO"] = array();
//	GE.PERSONA_DISPONIBLEXCOLOR_PELO
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.PERSONA_DISPONIBLEXCOLOR_PELO";
		$detailsParam["dOriginalTable"] = "GE.PERSONA_DISPONIBLEXCOLOR_PELO";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_PERSONA_DISPONIBLEXCOLOR_PELO";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.COLOR_PELO"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.COLOR_PELO"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.COLOR_PELO"][$dIndex]["masterKeys"][]="COLOR_PELO_ID";

				$detailsTablesData["GE.COLOR_PELO"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.COLOR_PELO"][$dIndex]["detailKeys"][]="COLOR_PELO_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.COLOR_PELO"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_COLOR_PELO()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COLOR_PELO_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.COLOR_PELO";
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
	"m_strName" => "COLOR_PELO_ID",
	"m_strTable" => "GE.COLOR_PELO",
	"m_srcTableName" => "GE.COLOR_PELO"
));

$proto5["m_sql"] = "COLOR_PELO_ID";
$proto5["m_srcTableName"] = "GE.COLOR_PELO";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "GE.COLOR_PELO",
	"m_srcTableName" => "GE.COLOR_PELO"
));

$proto7["m_sql"] = "NOMBRE";
$proto7["m_srcTableName"] = "GE.COLOR_PELO";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.COLOR_PELO",
	"m_srcTableName" => "GE.COLOR_PELO"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.COLOR_PELO";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.COLOR_PELO",
	"m_srcTableName" => "GE.COLOR_PELO"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.COLOR_PELO";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.COLOR_PELO",
	"m_srcTableName" => "GE.COLOR_PELO"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.COLOR_PELO";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.COLOR_PELO",
	"m_srcTableName" => "GE.COLOR_PELO"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.COLOR_PELO";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.COLOR_PELO";
$proto18["m_srcTableName"] = "GE.COLOR_PELO";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "COLOR_PELO_ID";
$proto18["m_columns"][] = "NOMBRE";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.COLOR_PELO";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.COLOR_PELO";
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
$proto0["m_srcTableName"]="GE.COLOR_PELO";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_COLOR_PELO = createSqlQuery_GE_COLOR_PELO();


	
						
	
$tdataGE_COLOR_PELO[".sqlquery"] = $queryData_GE_COLOR_PELO;

$tableEvents["GE.COLOR_PELO"] = new eventsBase;
$tdataGE_COLOR_PELO[".hasEvents"] = false;

?>
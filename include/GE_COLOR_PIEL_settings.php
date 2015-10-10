<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_COLOR_PIEL = array();	
	$tdataGE_COLOR_PIEL[".truncateText"] = true;
	$tdataGE_COLOR_PIEL[".NumberOfChars"] = 80; 
	$tdataGE_COLOR_PIEL[".ShortName"] = "GE_COLOR_PIEL";
	$tdataGE_COLOR_PIEL[".OwnerID"] = "";
	$tdataGE_COLOR_PIEL[".OriginalTable"] = "GE.COLOR_PIEL";

//	field labels
$fieldLabelsGE_COLOR_PIEL = array();
$fieldToolTipsGE_COLOR_PIEL = array();
$pageTitlesGE_COLOR_PIEL = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_COLOR_PIEL["Spanish"] = array();
	$fieldToolTipsGE_COLOR_PIEL["Spanish"] = array();
	$pageTitlesGE_COLOR_PIEL["Spanish"] = array();
	$fieldLabelsGE_COLOR_PIEL["Spanish"]["COLOR_PIEL_ID"] = "COLOR PIEL ID";
	$fieldToolTipsGE_COLOR_PIEL["Spanish"]["COLOR_PIEL_ID"] = "";
	$fieldLabelsGE_COLOR_PIEL["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_COLOR_PIEL["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGE_COLOR_PIEL["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_COLOR_PIEL["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_COLOR_PIEL["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_COLOR_PIEL["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_COLOR_PIEL["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_COLOR_PIEL["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_COLOR_PIEL["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_COLOR_PIEL["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_COLOR_PIEL["Spanish"]))
		$tdataGE_COLOR_PIEL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_COLOR_PIEL[""] = array();
	$fieldToolTipsGE_COLOR_PIEL[""] = array();
	$pageTitlesGE_COLOR_PIEL[""] = array();
	$fieldLabelsGE_COLOR_PIEL[""]["COLOR_PIEL_ID"] = "COLOR PIEL ID";
	$fieldToolTipsGE_COLOR_PIEL[""]["COLOR_PIEL_ID"] = "";
	$fieldLabelsGE_COLOR_PIEL[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_COLOR_PIEL[""]["NOMBRE"] = "";
	$fieldLabelsGE_COLOR_PIEL[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_COLOR_PIEL[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_COLOR_PIEL[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_COLOR_PIEL[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_COLOR_PIEL[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_COLOR_PIEL[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_COLOR_PIEL[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_COLOR_PIEL[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_COLOR_PIEL[""]))
		$tdataGE_COLOR_PIEL[".isUseToolTips"] = true;
}
	
	
	$tdataGE_COLOR_PIEL[".NCSearch"] = true;



$tdataGE_COLOR_PIEL[".shortTableName"] = "GE_COLOR_PIEL";
$tdataGE_COLOR_PIEL[".nSecOptions"] = 0;
$tdataGE_COLOR_PIEL[".recsPerRowList"] = 1;
$tdataGE_COLOR_PIEL[".mainTableOwnerID"] = "";
$tdataGE_COLOR_PIEL[".moveNext"] = 1;
$tdataGE_COLOR_PIEL[".nType"] = 0;

$tdataGE_COLOR_PIEL[".strOriginalTableName"] = "GE.COLOR_PIEL";




$tdataGE_COLOR_PIEL[".showAddInPopup"] = false;

$tdataGE_COLOR_PIEL[".showEditInPopup"] = false;

$tdataGE_COLOR_PIEL[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_COLOR_PIEL[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_COLOR_PIEL[".fieldsForRegister"] = array();

$tdataGE_COLOR_PIEL[".listAjax"] = false;

	$tdataGE_COLOR_PIEL[".audit"] = false;

	$tdataGE_COLOR_PIEL[".locking"] = false;

$tdataGE_COLOR_PIEL[".edit"] = true;

$tdataGE_COLOR_PIEL[".list"] = true;

$tdataGE_COLOR_PIEL[".inlineEdit"] = true;
$tdataGE_COLOR_PIEL[".inlineAdd"] = true;
$tdataGE_COLOR_PIEL[".view"] = true;

$tdataGE_COLOR_PIEL[".import"] = true;

$tdataGE_COLOR_PIEL[".exportTo"] = true;

$tdataGE_COLOR_PIEL[".printFriendly"] = true;

$tdataGE_COLOR_PIEL[".delete"] = true;

$tdataGE_COLOR_PIEL[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_COLOR_PIEL[".searchSaving"] = false;
//

$tdataGE_COLOR_PIEL[".showSearchPanel"] = true;
		$tdataGE_COLOR_PIEL[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_COLOR_PIEL[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_COLOR_PIEL[".isUseAjaxSuggest"] = true;

$tdataGE_COLOR_PIEL[".rowHighlite"] = true;



$tdataGE_COLOR_PIEL[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_COLOR_PIEL[".isUseTimeForSearch"] = false;



$tdataGE_COLOR_PIEL[".useDetailsPreview"] = true;


$tdataGE_COLOR_PIEL[".allSearchFields"] = array();
$tdataGE_COLOR_PIEL[".filterFields"] = array();
$tdataGE_COLOR_PIEL[".requiredSearchFields"] = array();

$tdataGE_COLOR_PIEL[".allSearchFields"][] = "COLOR_PIEL_ID";
	$tdataGE_COLOR_PIEL[".allSearchFields"][] = "NOMBRE";
	$tdataGE_COLOR_PIEL[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_COLOR_PIEL[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_COLOR_PIEL[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_COLOR_PIEL[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_COLOR_PIEL[".googleLikeFields"] = array();
$tdataGE_COLOR_PIEL[".googleLikeFields"][] = "COLOR_PIEL_ID";
$tdataGE_COLOR_PIEL[".googleLikeFields"][] = "NOMBRE";
$tdataGE_COLOR_PIEL[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PIEL[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PIEL[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PIEL[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_COLOR_PIEL[".advSearchFields"] = array();
$tdataGE_COLOR_PIEL[".advSearchFields"][] = "COLOR_PIEL_ID";
$tdataGE_COLOR_PIEL[".advSearchFields"][] = "NOMBRE";
$tdataGE_COLOR_PIEL[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PIEL[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PIEL[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PIEL[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_PIEL[".tableType"] = "list";

$tdataGE_COLOR_PIEL[".printerPageOrientation"] = 0;
$tdataGE_COLOR_PIEL[".nPrinterPageScale"] = 100;

$tdataGE_COLOR_PIEL[".nPrinterSplitRecords"] = 40;

$tdataGE_COLOR_PIEL[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_COLOR_PIEL[".pageSize"] = 20;

$tdataGE_COLOR_PIEL[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_COLOR_PIEL[".strOrderBy"] = $tstrOrderBy;

$tdataGE_COLOR_PIEL[".orderindexes"] = array();

$tdataGE_COLOR_PIEL[".sqlHead"] = "SELECT COLOR_PIEL_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$tdataGE_COLOR_PIEL[".sqlFrom"] = "FROM GE.COLOR_PIEL";
$tdataGE_COLOR_PIEL[".sqlWhereExpr"] = "";
$tdataGE_COLOR_PIEL[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_COLOR_PIEL[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_COLOR_PIEL[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_COLOR_PIEL[".highlightSearchResults"] = true;

$tableKeysGE_COLOR_PIEL = array();
$tableKeysGE_COLOR_PIEL[] = "COLOR_PIEL_ID";
$tdataGE_COLOR_PIEL[".Keys"] = $tableKeysGE_COLOR_PIEL;

$tdataGE_COLOR_PIEL[".listFields"] = array();
$tdataGE_COLOR_PIEL[".listFields"][] = "COLOR_PIEL_ID";
$tdataGE_COLOR_PIEL[".listFields"][] = "NOMBRE";
$tdataGE_COLOR_PIEL[".listFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PIEL[".listFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PIEL[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PIEL[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_PIEL[".hideMobileList"] = array();


$tdataGE_COLOR_PIEL[".viewFields"] = array();
$tdataGE_COLOR_PIEL[".viewFields"][] = "COLOR_PIEL_ID";
$tdataGE_COLOR_PIEL[".viewFields"][] = "NOMBRE";
$tdataGE_COLOR_PIEL[".viewFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PIEL[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PIEL[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PIEL[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_PIEL[".addFields"] = array();
$tdataGE_COLOR_PIEL[".addFields"][] = "COLOR_PIEL_ID";
$tdataGE_COLOR_PIEL[".addFields"][] = "NOMBRE";

$tdataGE_COLOR_PIEL[".inlineAddFields"] = array();
$tdataGE_COLOR_PIEL[".inlineAddFields"][] = "COLOR_PIEL_ID";
$tdataGE_COLOR_PIEL[".inlineAddFields"][] = "NOMBRE";
$tdataGE_COLOR_PIEL[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PIEL[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PIEL[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PIEL[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_PIEL[".editFields"] = array();
$tdataGE_COLOR_PIEL[".editFields"][] = "COLOR_PIEL_ID";
$tdataGE_COLOR_PIEL[".editFields"][] = "NOMBRE";

$tdataGE_COLOR_PIEL[".inlineEditFields"] = array();
$tdataGE_COLOR_PIEL[".inlineEditFields"][] = "COLOR_PIEL_ID";
$tdataGE_COLOR_PIEL[".inlineEditFields"][] = "NOMBRE";
$tdataGE_COLOR_PIEL[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PIEL[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PIEL[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PIEL[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_PIEL[".exportFields"] = array();
$tdataGE_COLOR_PIEL[".exportFields"][] = "COLOR_PIEL_ID";
$tdataGE_COLOR_PIEL[".exportFields"][] = "NOMBRE";
$tdataGE_COLOR_PIEL[".exportFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PIEL[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PIEL[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PIEL[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_PIEL[".importFields"] = array();
$tdataGE_COLOR_PIEL[".importFields"][] = "COLOR_PIEL_ID";
$tdataGE_COLOR_PIEL[".importFields"][] = "NOMBRE";
$tdataGE_COLOR_PIEL[".importFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PIEL[".importFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PIEL[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PIEL[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_COLOR_PIEL[".printFields"] = array();
$tdataGE_COLOR_PIEL[".printFields"][] = "COLOR_PIEL_ID";
$tdataGE_COLOR_PIEL[".printFields"][] = "NOMBRE";
$tdataGE_COLOR_PIEL[".printFields"][] = "FEC_CREACION";
$tdataGE_COLOR_PIEL[".printFields"][] = "USUARIO_CREACION";
$tdataGE_COLOR_PIEL[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_COLOR_PIEL[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	COLOR_PIEL_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COLOR_PIEL_ID";
	$fdata["GoodName"] = "COLOR_PIEL_ID";
	$fdata["ownerTable"] = "GE.COLOR_PIEL";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_PIEL","COLOR_PIEL_ID"); 
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
	
		$fdata["strField"] = "COLOR_PIEL_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COLOR_PIEL_ID";
	
		
		
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

	

	
	$tdataGE_COLOR_PIEL["COLOR_PIEL_ID"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "GE.COLOR_PIEL";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_PIEL","NOMBRE"); 
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

	

	
	$tdataGE_COLOR_PIEL["NOMBRE"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.COLOR_PIEL";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_PIEL","FEC_CREACION"); 
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

	

	
	$tdataGE_COLOR_PIEL["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.COLOR_PIEL";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_PIEL","USUARIO_CREACION"); 
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

	

	
	$tdataGE_COLOR_PIEL["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.COLOR_PIEL";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_PIEL","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_COLOR_PIEL["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.COLOR_PIEL";
	$fdata["Label"] = GetFieldLabel("GE_COLOR_PIEL","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_COLOR_PIEL["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.COLOR_PIEL"]=&$tdataGE_COLOR_PIEL;
$field_labels["GE_COLOR_PIEL"] = &$fieldLabelsGE_COLOR_PIEL;
$fieldToolTips["GE.COLOR_PIEL"] = &$fieldToolTipsGE_COLOR_PIEL;
$page_titles["GE_COLOR_PIEL"] = &$pageTitlesGE_COLOR_PIEL;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.COLOR_PIEL"] = array();
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
			
	$detailsTablesData["GE.COLOR_PIEL"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.COLOR_PIEL"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.COLOR_PIEL"][$dIndex]["masterKeys"][]="COLOR_PIEL_ID";

				$detailsTablesData["GE.COLOR_PIEL"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.COLOR_PIEL"][$dIndex]["detailKeys"][]="COLOR_PIEL_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.COLOR_PIEL"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_COLOR_PIEL()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COLOR_PIEL_ID,   NOMBRE,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.COLOR_PIEL";
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
	"m_strName" => "COLOR_PIEL_ID",
	"m_strTable" => "GE.COLOR_PIEL",
	"m_srcTableName" => "GE.COLOR_PIEL"
));

$proto5["m_sql"] = "COLOR_PIEL_ID";
$proto5["m_srcTableName"] = "GE.COLOR_PIEL";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "GE.COLOR_PIEL",
	"m_srcTableName" => "GE.COLOR_PIEL"
));

$proto7["m_sql"] = "NOMBRE";
$proto7["m_srcTableName"] = "GE.COLOR_PIEL";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.COLOR_PIEL",
	"m_srcTableName" => "GE.COLOR_PIEL"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.COLOR_PIEL";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.COLOR_PIEL",
	"m_srcTableName" => "GE.COLOR_PIEL"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.COLOR_PIEL";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.COLOR_PIEL",
	"m_srcTableName" => "GE.COLOR_PIEL"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.COLOR_PIEL";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.COLOR_PIEL",
	"m_srcTableName" => "GE.COLOR_PIEL"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.COLOR_PIEL";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.COLOR_PIEL";
$proto18["m_srcTableName"] = "GE.COLOR_PIEL";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "COLOR_PIEL_ID";
$proto18["m_columns"][] = "NOMBRE";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.COLOR_PIEL";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.COLOR_PIEL";
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
$proto0["m_srcTableName"]="GE.COLOR_PIEL";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_COLOR_PIEL = createSqlQuery_GE_COLOR_PIEL();


	
						
	
$tdataGE_COLOR_PIEL[".sqlquery"] = $queryData_GE_COLOR_PIEL;

$tableEvents["GE.COLOR_PIEL"] = new eventsBase;
$tdataGE_COLOR_PIEL[".hasEvents"] = false;

?>
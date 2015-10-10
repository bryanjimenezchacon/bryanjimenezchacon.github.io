<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_CONTEXTURA = array();	
	$tdataGE_CONTEXTURA[".truncateText"] = true;
	$tdataGE_CONTEXTURA[".NumberOfChars"] = 80; 
	$tdataGE_CONTEXTURA[".ShortName"] = "GE_CONTEXTURA";
	$tdataGE_CONTEXTURA[".OwnerID"] = "";
	$tdataGE_CONTEXTURA[".OriginalTable"] = "GE.CONTEXTURA";

//	field labels
$fieldLabelsGE_CONTEXTURA = array();
$fieldToolTipsGE_CONTEXTURA = array();
$pageTitlesGE_CONTEXTURA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_CONTEXTURA["Spanish"] = array();
	$fieldToolTipsGE_CONTEXTURA["Spanish"] = array();
	$pageTitlesGE_CONTEXTURA["Spanish"] = array();
	$fieldLabelsGE_CONTEXTURA["Spanish"]["CONTEXTURA_ID"] = "CONTEXTURA ID";
	$fieldToolTipsGE_CONTEXTURA["Spanish"]["CONTEXTURA_ID"] = "";
	$fieldLabelsGE_CONTEXTURA["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsGE_CONTEXTURA["Spanish"]["TIPO"] = "";
	$fieldLabelsGE_CONTEXTURA["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_CONTEXTURA["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_CONTEXTURA["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_CONTEXTURA["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_CONTEXTURA["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_CONTEXTURA["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_CONTEXTURA["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_CONTEXTURA["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_CONTEXTURA["Spanish"]))
		$tdataGE_CONTEXTURA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_CONTEXTURA[""] = array();
	$fieldToolTipsGE_CONTEXTURA[""] = array();
	$pageTitlesGE_CONTEXTURA[""] = array();
	$fieldLabelsGE_CONTEXTURA[""]["CONTEXTURA_ID"] = "CONTEXTURA ID";
	$fieldToolTipsGE_CONTEXTURA[""]["CONTEXTURA_ID"] = "";
	$fieldLabelsGE_CONTEXTURA[""]["TIPO"] = "TIPO";
	$fieldToolTipsGE_CONTEXTURA[""]["TIPO"] = "";
	$fieldLabelsGE_CONTEXTURA[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_CONTEXTURA[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_CONTEXTURA[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_CONTEXTURA[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_CONTEXTURA[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_CONTEXTURA[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_CONTEXTURA[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_CONTEXTURA[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_CONTEXTURA[""]))
		$tdataGE_CONTEXTURA[".isUseToolTips"] = true;
}
	
	
	$tdataGE_CONTEXTURA[".NCSearch"] = true;



$tdataGE_CONTEXTURA[".shortTableName"] = "GE_CONTEXTURA";
$tdataGE_CONTEXTURA[".nSecOptions"] = 0;
$tdataGE_CONTEXTURA[".recsPerRowList"] = 1;
$tdataGE_CONTEXTURA[".mainTableOwnerID"] = "";
$tdataGE_CONTEXTURA[".moveNext"] = 1;
$tdataGE_CONTEXTURA[".nType"] = 0;

$tdataGE_CONTEXTURA[".strOriginalTableName"] = "GE.CONTEXTURA";




$tdataGE_CONTEXTURA[".showAddInPopup"] = false;

$tdataGE_CONTEXTURA[".showEditInPopup"] = false;

$tdataGE_CONTEXTURA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_CONTEXTURA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_CONTEXTURA[".fieldsForRegister"] = array();

$tdataGE_CONTEXTURA[".listAjax"] = false;

	$tdataGE_CONTEXTURA[".audit"] = false;

	$tdataGE_CONTEXTURA[".locking"] = false;

$tdataGE_CONTEXTURA[".edit"] = true;

$tdataGE_CONTEXTURA[".list"] = true;

$tdataGE_CONTEXTURA[".inlineEdit"] = true;
$tdataGE_CONTEXTURA[".inlineAdd"] = true;
$tdataGE_CONTEXTURA[".view"] = true;

$tdataGE_CONTEXTURA[".import"] = true;

$tdataGE_CONTEXTURA[".exportTo"] = true;

$tdataGE_CONTEXTURA[".printFriendly"] = true;

$tdataGE_CONTEXTURA[".delete"] = true;

$tdataGE_CONTEXTURA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_CONTEXTURA[".searchSaving"] = false;
//

$tdataGE_CONTEXTURA[".showSearchPanel"] = true;
		$tdataGE_CONTEXTURA[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_CONTEXTURA[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_CONTEXTURA[".isUseAjaxSuggest"] = true;

$tdataGE_CONTEXTURA[".rowHighlite"] = true;



$tdataGE_CONTEXTURA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_CONTEXTURA[".isUseTimeForSearch"] = false;



$tdataGE_CONTEXTURA[".useDetailsPreview"] = true;


$tdataGE_CONTEXTURA[".allSearchFields"] = array();
$tdataGE_CONTEXTURA[".filterFields"] = array();
$tdataGE_CONTEXTURA[".requiredSearchFields"] = array();

$tdataGE_CONTEXTURA[".allSearchFields"][] = "CONTEXTURA_ID";
	$tdataGE_CONTEXTURA[".allSearchFields"][] = "TIPO";
	$tdataGE_CONTEXTURA[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_CONTEXTURA[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_CONTEXTURA[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_CONTEXTURA[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_CONTEXTURA[".googleLikeFields"] = array();
$tdataGE_CONTEXTURA[".googleLikeFields"][] = "CONTEXTURA_ID";
$tdataGE_CONTEXTURA[".googleLikeFields"][] = "TIPO";
$tdataGE_CONTEXTURA[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_CONTEXTURA[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_CONTEXTURA[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CONTEXTURA[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_CONTEXTURA[".advSearchFields"] = array();
$tdataGE_CONTEXTURA[".advSearchFields"][] = "CONTEXTURA_ID";
$tdataGE_CONTEXTURA[".advSearchFields"][] = "TIPO";
$tdataGE_CONTEXTURA[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_CONTEXTURA[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_CONTEXTURA[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CONTEXTURA[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_CONTEXTURA[".tableType"] = "list";

$tdataGE_CONTEXTURA[".printerPageOrientation"] = 0;
$tdataGE_CONTEXTURA[".nPrinterPageScale"] = 100;

$tdataGE_CONTEXTURA[".nPrinterSplitRecords"] = 40;

$tdataGE_CONTEXTURA[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_CONTEXTURA[".pageSize"] = 20;

$tdataGE_CONTEXTURA[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_CONTEXTURA[".strOrderBy"] = $tstrOrderBy;

$tdataGE_CONTEXTURA[".orderindexes"] = array();

$tdataGE_CONTEXTURA[".sqlHead"] = "SELECT CONTEXTURA_ID,  TIPO,  FEC_CREACION,  USUARIO_CREACION,  FEC_ULTIMA_MOD,  USUARIO_ULTIMA_MOD";
$tdataGE_CONTEXTURA[".sqlFrom"] = "FROM GE.CONTEXTURA";
$tdataGE_CONTEXTURA[".sqlWhereExpr"] = "";
$tdataGE_CONTEXTURA[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_CONTEXTURA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_CONTEXTURA[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_CONTEXTURA[".highlightSearchResults"] = true;

$tableKeysGE_CONTEXTURA = array();
$tableKeysGE_CONTEXTURA[] = "CONTEXTURA_ID";
$tdataGE_CONTEXTURA[".Keys"] = $tableKeysGE_CONTEXTURA;

$tdataGE_CONTEXTURA[".listFields"] = array();
$tdataGE_CONTEXTURA[".listFields"][] = "CONTEXTURA_ID";
$tdataGE_CONTEXTURA[".listFields"][] = "TIPO";
$tdataGE_CONTEXTURA[".listFields"][] = "FEC_CREACION";
$tdataGE_CONTEXTURA[".listFields"][] = "USUARIO_CREACION";
$tdataGE_CONTEXTURA[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CONTEXTURA[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_CONTEXTURA[".hideMobileList"] = array();


$tdataGE_CONTEXTURA[".viewFields"] = array();
$tdataGE_CONTEXTURA[".viewFields"][] = "CONTEXTURA_ID";
$tdataGE_CONTEXTURA[".viewFields"][] = "TIPO";
$tdataGE_CONTEXTURA[".viewFields"][] = "FEC_CREACION";
$tdataGE_CONTEXTURA[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_CONTEXTURA[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CONTEXTURA[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_CONTEXTURA[".addFields"] = array();
$tdataGE_CONTEXTURA[".addFields"][] = "CONTEXTURA_ID";
$tdataGE_CONTEXTURA[".addFields"][] = "TIPO";

$tdataGE_CONTEXTURA[".inlineAddFields"] = array();
$tdataGE_CONTEXTURA[".inlineAddFields"][] = "CONTEXTURA_ID";
$tdataGE_CONTEXTURA[".inlineAddFields"][] = "TIPO";
$tdataGE_CONTEXTURA[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_CONTEXTURA[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_CONTEXTURA[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CONTEXTURA[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_CONTEXTURA[".editFields"] = array();
$tdataGE_CONTEXTURA[".editFields"][] = "CONTEXTURA_ID";
$tdataGE_CONTEXTURA[".editFields"][] = "TIPO";

$tdataGE_CONTEXTURA[".inlineEditFields"] = array();
$tdataGE_CONTEXTURA[".inlineEditFields"][] = "CONTEXTURA_ID";
$tdataGE_CONTEXTURA[".inlineEditFields"][] = "TIPO";
$tdataGE_CONTEXTURA[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_CONTEXTURA[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_CONTEXTURA[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CONTEXTURA[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_CONTEXTURA[".exportFields"] = array();
$tdataGE_CONTEXTURA[".exportFields"][] = "CONTEXTURA_ID";
$tdataGE_CONTEXTURA[".exportFields"][] = "TIPO";
$tdataGE_CONTEXTURA[".exportFields"][] = "FEC_CREACION";
$tdataGE_CONTEXTURA[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_CONTEXTURA[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CONTEXTURA[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_CONTEXTURA[".importFields"] = array();
$tdataGE_CONTEXTURA[".importFields"][] = "CONTEXTURA_ID";
$tdataGE_CONTEXTURA[".importFields"][] = "TIPO";
$tdataGE_CONTEXTURA[".importFields"][] = "FEC_CREACION";
$tdataGE_CONTEXTURA[".importFields"][] = "USUARIO_CREACION";
$tdataGE_CONTEXTURA[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CONTEXTURA[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_CONTEXTURA[".printFields"] = array();
$tdataGE_CONTEXTURA[".printFields"][] = "CONTEXTURA_ID";
$tdataGE_CONTEXTURA[".printFields"][] = "TIPO";
$tdataGE_CONTEXTURA[".printFields"][] = "FEC_CREACION";
$tdataGE_CONTEXTURA[".printFields"][] = "USUARIO_CREACION";
$tdataGE_CONTEXTURA[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CONTEXTURA[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	CONTEXTURA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CONTEXTURA_ID";
	$fdata["GoodName"] = "CONTEXTURA_ID";
	$fdata["ownerTable"] = "GE.CONTEXTURA";
	$fdata["Label"] = GetFieldLabel("GE_CONTEXTURA","CONTEXTURA_ID"); 
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
	
		$fdata["strField"] = "CONTEXTURA_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONTEXTURA_ID";
	
		
		
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

	

	
	$tdataGE_CONTEXTURA["CONTEXTURA_ID"] = $fdata;
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "GE.CONTEXTURA";
	$fdata["Label"] = GetFieldLabel("GE_CONTEXTURA","TIPO"); 
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
	
		$fdata["strField"] = "TIPO"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPO";
	
		
		
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

	

	
	$tdataGE_CONTEXTURA["TIPO"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.CONTEXTURA";
	$fdata["Label"] = GetFieldLabel("GE_CONTEXTURA","FEC_CREACION"); 
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

	

	
	$tdataGE_CONTEXTURA["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.CONTEXTURA";
	$fdata["Label"] = GetFieldLabel("GE_CONTEXTURA","USUARIO_CREACION"); 
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

	

	
	$tdataGE_CONTEXTURA["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.CONTEXTURA";
	$fdata["Label"] = GetFieldLabel("GE_CONTEXTURA","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_CONTEXTURA["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.CONTEXTURA";
	$fdata["Label"] = GetFieldLabel("GE_CONTEXTURA","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_CONTEXTURA["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.CONTEXTURA"]=&$tdataGE_CONTEXTURA;
$field_labels["GE_CONTEXTURA"] = &$fieldLabelsGE_CONTEXTURA;
$fieldToolTips["GE.CONTEXTURA"] = &$fieldToolTipsGE_CONTEXTURA;
$page_titles["GE_CONTEXTURA"] = &$pageTitlesGE_CONTEXTURA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.CONTEXTURA"] = array();
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
			
	$detailsTablesData["GE.CONTEXTURA"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.CONTEXTURA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.CONTEXTURA"][$dIndex]["masterKeys"][]="CONTEXTURA_ID";

				$detailsTablesData["GE.CONTEXTURA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.CONTEXTURA"][$dIndex]["detailKeys"][]="CONTEXTURA_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.CONTEXTURA"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_CONTEXTURA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CONTEXTURA_ID,  TIPO,  FEC_CREACION,  USUARIO_CREACION,  FEC_ULTIMA_MOD,  USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.CONTEXTURA";
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
	"m_strName" => "CONTEXTURA_ID",
	"m_strTable" => "GE.CONTEXTURA",
	"m_srcTableName" => "GE.CONTEXTURA"
));

$proto5["m_sql"] = "CONTEXTURA_ID";
$proto5["m_srcTableName"] = "GE.CONTEXTURA";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "GE.CONTEXTURA",
	"m_srcTableName" => "GE.CONTEXTURA"
));

$proto7["m_sql"] = "TIPO";
$proto7["m_srcTableName"] = "GE.CONTEXTURA";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.CONTEXTURA",
	"m_srcTableName" => "GE.CONTEXTURA"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.CONTEXTURA";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.CONTEXTURA",
	"m_srcTableName" => "GE.CONTEXTURA"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.CONTEXTURA";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.CONTEXTURA",
	"m_srcTableName" => "GE.CONTEXTURA"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.CONTEXTURA";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.CONTEXTURA",
	"m_srcTableName" => "GE.CONTEXTURA"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.CONTEXTURA";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.CONTEXTURA";
$proto18["m_srcTableName"] = "GE.CONTEXTURA";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "CONTEXTURA_ID";
$proto18["m_columns"][] = "TIPO";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.CONTEXTURA";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.CONTEXTURA";
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
$proto0["m_srcTableName"]="GE.CONTEXTURA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_CONTEXTURA = createSqlQuery_GE_CONTEXTURA();


	
						
	
$tdataGE_CONTEXTURA[".sqlquery"] = $queryData_GE_CONTEXTURA;

$tableEvents["GE.CONTEXTURA"] = new eventsBase;
$tdataGE_CONTEXTURA[".hasEvents"] = false;

?>
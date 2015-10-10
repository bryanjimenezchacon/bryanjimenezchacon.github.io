<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_MASCOTA = array();	
	$tdataGE_MASCOTA[".truncateText"] = true;
	$tdataGE_MASCOTA[".NumberOfChars"] = 80; 
	$tdataGE_MASCOTA[".ShortName"] = "GE_MASCOTA";
	$tdataGE_MASCOTA[".OwnerID"] = "";
	$tdataGE_MASCOTA[".OriginalTable"] = "GE.MASCOTA";

//	field labels
$fieldLabelsGE_MASCOTA = array();
$fieldToolTipsGE_MASCOTA = array();
$pageTitlesGE_MASCOTA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_MASCOTA["Spanish"] = array();
	$fieldToolTipsGE_MASCOTA["Spanish"] = array();
	$pageTitlesGE_MASCOTA["Spanish"] = array();
	$fieldLabelsGE_MASCOTA["Spanish"]["MASCOTA_ID"] = "MASCOTA ID";
	$fieldToolTipsGE_MASCOTA["Spanish"]["MASCOTA_ID"] = "";
	$fieldLabelsGE_MASCOTA["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsGE_MASCOTA["Spanish"]["TIPO"] = "";
	$fieldLabelsGE_MASCOTA["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_MASCOTA["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_MASCOTA["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_MASCOTA["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_MASCOTA["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_MASCOTA["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_MASCOTA["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_MASCOTA["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_MASCOTA["Spanish"]))
		$tdataGE_MASCOTA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_MASCOTA[""] = array();
	$fieldToolTipsGE_MASCOTA[""] = array();
	$pageTitlesGE_MASCOTA[""] = array();
	$fieldLabelsGE_MASCOTA[""]["MASCOTA_ID"] = "MASCOTA ID";
	$fieldToolTipsGE_MASCOTA[""]["MASCOTA_ID"] = "";
	$fieldLabelsGE_MASCOTA[""]["TIPO"] = "TIPO";
	$fieldToolTipsGE_MASCOTA[""]["TIPO"] = "";
	$fieldLabelsGE_MASCOTA[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_MASCOTA[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_MASCOTA[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_MASCOTA[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_MASCOTA[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_MASCOTA[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_MASCOTA[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_MASCOTA[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_MASCOTA[""]))
		$tdataGE_MASCOTA[".isUseToolTips"] = true;
}
	
	
	$tdataGE_MASCOTA[".NCSearch"] = true;



$tdataGE_MASCOTA[".shortTableName"] = "GE_MASCOTA";
$tdataGE_MASCOTA[".nSecOptions"] = 0;
$tdataGE_MASCOTA[".recsPerRowList"] = 1;
$tdataGE_MASCOTA[".mainTableOwnerID"] = "";
$tdataGE_MASCOTA[".moveNext"] = 1;
$tdataGE_MASCOTA[".nType"] = 0;

$tdataGE_MASCOTA[".strOriginalTableName"] = "GE.MASCOTA";




$tdataGE_MASCOTA[".showAddInPopup"] = false;

$tdataGE_MASCOTA[".showEditInPopup"] = false;

$tdataGE_MASCOTA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_MASCOTA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_MASCOTA[".fieldsForRegister"] = array();

$tdataGE_MASCOTA[".listAjax"] = false;

	$tdataGE_MASCOTA[".audit"] = false;

	$tdataGE_MASCOTA[".locking"] = false;

$tdataGE_MASCOTA[".edit"] = true;

$tdataGE_MASCOTA[".list"] = true;

$tdataGE_MASCOTA[".inlineEdit"] = true;
$tdataGE_MASCOTA[".inlineAdd"] = true;
$tdataGE_MASCOTA[".view"] = true;

$tdataGE_MASCOTA[".import"] = true;

$tdataGE_MASCOTA[".exportTo"] = true;

$tdataGE_MASCOTA[".printFriendly"] = true;

$tdataGE_MASCOTA[".delete"] = true;

$tdataGE_MASCOTA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_MASCOTA[".searchSaving"] = false;
//

$tdataGE_MASCOTA[".showSearchPanel"] = true;
		$tdataGE_MASCOTA[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_MASCOTA[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_MASCOTA[".isUseAjaxSuggest"] = true;

$tdataGE_MASCOTA[".rowHighlite"] = true;



$tdataGE_MASCOTA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_MASCOTA[".isUseTimeForSearch"] = false;



$tdataGE_MASCOTA[".useDetailsPreview"] = true;


$tdataGE_MASCOTA[".allSearchFields"] = array();
$tdataGE_MASCOTA[".filterFields"] = array();
$tdataGE_MASCOTA[".requiredSearchFields"] = array();

$tdataGE_MASCOTA[".allSearchFields"][] = "MASCOTA_ID";
	$tdataGE_MASCOTA[".allSearchFields"][] = "TIPO";
	$tdataGE_MASCOTA[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_MASCOTA[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_MASCOTA[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_MASCOTA[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_MASCOTA[".googleLikeFields"] = array();
$tdataGE_MASCOTA[".googleLikeFields"][] = "MASCOTA_ID";
$tdataGE_MASCOTA[".googleLikeFields"][] = "TIPO";
$tdataGE_MASCOTA[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_MASCOTA[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_MASCOTA[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_MASCOTA[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_MASCOTA[".advSearchFields"] = array();
$tdataGE_MASCOTA[".advSearchFields"][] = "MASCOTA_ID";
$tdataGE_MASCOTA[".advSearchFields"][] = "TIPO";
$tdataGE_MASCOTA[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_MASCOTA[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_MASCOTA[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_MASCOTA[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_MASCOTA[".tableType"] = "list";

$tdataGE_MASCOTA[".printerPageOrientation"] = 0;
$tdataGE_MASCOTA[".nPrinterPageScale"] = 100;

$tdataGE_MASCOTA[".nPrinterSplitRecords"] = 40;

$tdataGE_MASCOTA[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_MASCOTA[".pageSize"] = 20;

$tdataGE_MASCOTA[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_MASCOTA[".strOrderBy"] = $tstrOrderBy;

$tdataGE_MASCOTA[".orderindexes"] = array();

$tdataGE_MASCOTA[".sqlHead"] = "SELECT MASCOTA_ID,   TIPO,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$tdataGE_MASCOTA[".sqlFrom"] = "FROM GE.MASCOTA";
$tdataGE_MASCOTA[".sqlWhereExpr"] = "";
$tdataGE_MASCOTA[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_MASCOTA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_MASCOTA[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_MASCOTA[".highlightSearchResults"] = true;

$tableKeysGE_MASCOTA = array();
$tableKeysGE_MASCOTA[] = "MASCOTA_ID";
$tdataGE_MASCOTA[".Keys"] = $tableKeysGE_MASCOTA;

$tdataGE_MASCOTA[".listFields"] = array();
$tdataGE_MASCOTA[".listFields"][] = "MASCOTA_ID";
$tdataGE_MASCOTA[".listFields"][] = "TIPO";
$tdataGE_MASCOTA[".listFields"][] = "FEC_CREACION";
$tdataGE_MASCOTA[".listFields"][] = "USUARIO_CREACION";
$tdataGE_MASCOTA[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_MASCOTA[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_MASCOTA[".hideMobileList"] = array();


$tdataGE_MASCOTA[".viewFields"] = array();
$tdataGE_MASCOTA[".viewFields"][] = "MASCOTA_ID";
$tdataGE_MASCOTA[".viewFields"][] = "TIPO";
$tdataGE_MASCOTA[".viewFields"][] = "FEC_CREACION";
$tdataGE_MASCOTA[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_MASCOTA[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_MASCOTA[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_MASCOTA[".addFields"] = array();
$tdataGE_MASCOTA[".addFields"][] = "MASCOTA_ID";
$tdataGE_MASCOTA[".addFields"][] = "TIPO";

$tdataGE_MASCOTA[".inlineAddFields"] = array();
$tdataGE_MASCOTA[".inlineAddFields"][] = "MASCOTA_ID";
$tdataGE_MASCOTA[".inlineAddFields"][] = "TIPO";
$tdataGE_MASCOTA[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_MASCOTA[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_MASCOTA[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_MASCOTA[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_MASCOTA[".editFields"] = array();
$tdataGE_MASCOTA[".editFields"][] = "MASCOTA_ID";
$tdataGE_MASCOTA[".editFields"][] = "TIPO";

$tdataGE_MASCOTA[".inlineEditFields"] = array();
$tdataGE_MASCOTA[".inlineEditFields"][] = "MASCOTA_ID";
$tdataGE_MASCOTA[".inlineEditFields"][] = "TIPO";
$tdataGE_MASCOTA[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_MASCOTA[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_MASCOTA[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_MASCOTA[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_MASCOTA[".exportFields"] = array();
$tdataGE_MASCOTA[".exportFields"][] = "MASCOTA_ID";
$tdataGE_MASCOTA[".exportFields"][] = "TIPO";
$tdataGE_MASCOTA[".exportFields"][] = "FEC_CREACION";
$tdataGE_MASCOTA[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_MASCOTA[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_MASCOTA[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_MASCOTA[".importFields"] = array();
$tdataGE_MASCOTA[".importFields"][] = "MASCOTA_ID";
$tdataGE_MASCOTA[".importFields"][] = "TIPO";
$tdataGE_MASCOTA[".importFields"][] = "FEC_CREACION";
$tdataGE_MASCOTA[".importFields"][] = "USUARIO_CREACION";
$tdataGE_MASCOTA[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_MASCOTA[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_MASCOTA[".printFields"] = array();
$tdataGE_MASCOTA[".printFields"][] = "MASCOTA_ID";
$tdataGE_MASCOTA[".printFields"][] = "TIPO";
$tdataGE_MASCOTA[".printFields"][] = "FEC_CREACION";
$tdataGE_MASCOTA[".printFields"][] = "USUARIO_CREACION";
$tdataGE_MASCOTA[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_MASCOTA[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	MASCOTA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MASCOTA_ID";
	$fdata["GoodName"] = "MASCOTA_ID";
	$fdata["ownerTable"] = "GE.MASCOTA";
	$fdata["Label"] = GetFieldLabel("GE_MASCOTA","MASCOTA_ID"); 
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
	
		$fdata["strField"] = "MASCOTA_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MASCOTA_ID";
	
		
		
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

	

	
	$tdataGE_MASCOTA["MASCOTA_ID"] = $fdata;
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "GE.MASCOTA";
	$fdata["Label"] = GetFieldLabel("GE_MASCOTA","TIPO"); 
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

	

	
	$tdataGE_MASCOTA["TIPO"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.MASCOTA";
	$fdata["Label"] = GetFieldLabel("GE_MASCOTA","FEC_CREACION"); 
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

	

	
	$tdataGE_MASCOTA["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.MASCOTA";
	$fdata["Label"] = GetFieldLabel("GE_MASCOTA","USUARIO_CREACION"); 
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

	

	
	$tdataGE_MASCOTA["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.MASCOTA";
	$fdata["Label"] = GetFieldLabel("GE_MASCOTA","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_MASCOTA["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.MASCOTA";
	$fdata["Label"] = GetFieldLabel("GE_MASCOTA","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_MASCOTA["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.MASCOTA"]=&$tdataGE_MASCOTA;
$field_labels["GE_MASCOTA"] = &$fieldLabelsGE_MASCOTA;
$fieldToolTips["GE.MASCOTA"] = &$fieldToolTipsGE_MASCOTA;
$page_titles["GE_MASCOTA"] = &$pageTitlesGE_MASCOTA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.MASCOTA"] = array();
//	GE.PERSONA_DISPONIBLEXMASCOTA
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.PERSONA_DISPONIBLEXMASCOTA";
		$detailsParam["dOriginalTable"] = "GE.PERSONA_DISPONIBLEXMASCOTA";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_PERSONA_DISPONIBLEXMASCOTA";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.MASCOTA"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.MASCOTA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.MASCOTA"][$dIndex]["masterKeys"][]="MASCOTA_ID";

				$detailsTablesData["GE.MASCOTA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.MASCOTA"][$dIndex]["detailKeys"][]="MASCOTA_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.MASCOTA"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_MASCOTA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MASCOTA_ID,   TIPO,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.MASCOTA";
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
	"m_strName" => "MASCOTA_ID",
	"m_strTable" => "GE.MASCOTA",
	"m_srcTableName" => "GE.MASCOTA"
));

$proto5["m_sql"] = "MASCOTA_ID";
$proto5["m_srcTableName"] = "GE.MASCOTA";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "GE.MASCOTA",
	"m_srcTableName" => "GE.MASCOTA"
));

$proto7["m_sql"] = "TIPO";
$proto7["m_srcTableName"] = "GE.MASCOTA";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.MASCOTA",
	"m_srcTableName" => "GE.MASCOTA"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.MASCOTA";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.MASCOTA",
	"m_srcTableName" => "GE.MASCOTA"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.MASCOTA";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.MASCOTA",
	"m_srcTableName" => "GE.MASCOTA"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.MASCOTA";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.MASCOTA",
	"m_srcTableName" => "GE.MASCOTA"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.MASCOTA";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.MASCOTA";
$proto18["m_srcTableName"] = "GE.MASCOTA";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "MASCOTA_ID";
$proto18["m_columns"][] = "TIPO";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.MASCOTA";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.MASCOTA";
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
$proto0["m_srcTableName"]="GE.MASCOTA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_MASCOTA = createSqlQuery_GE_MASCOTA();


	
						
	
$tdataGE_MASCOTA[".sqlquery"] = $queryData_GE_MASCOTA;

$tableEvents["GE.MASCOTA"] = new eventsBase;
$tdataGE_MASCOTA[".hasEvents"] = false;

?>
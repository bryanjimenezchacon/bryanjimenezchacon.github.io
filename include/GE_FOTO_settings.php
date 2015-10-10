<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_FOTO = array();	
	$tdataGE_FOTO[".truncateText"] = true;
	$tdataGE_FOTO[".NumberOfChars"] = 80; 
	$tdataGE_FOTO[".ShortName"] = "GE_FOTO";
	$tdataGE_FOTO[".OwnerID"] = "";
	$tdataGE_FOTO[".OriginalTable"] = "GE.FOTO";

//	field labels
$fieldLabelsGE_FOTO = array();
$fieldToolTipsGE_FOTO = array();
$pageTitlesGE_FOTO = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_FOTO["Spanish"] = array();
	$fieldToolTipsGE_FOTO["Spanish"] = array();
	$pageTitlesGE_FOTO["Spanish"] = array();
	$fieldLabelsGE_FOTO["Spanish"]["FOTO_ID"] = "FOTO ID";
	$fieldToolTipsGE_FOTO["Spanish"]["FOTO_ID"] = "";
	$fieldLabelsGE_FOTO["Spanish"]["RUTA"] = "RUTA";
	$fieldToolTipsGE_FOTO["Spanish"]["RUTA"] = "";
	$fieldLabelsGE_FOTO["Spanish"]["USERNAME"] = "USERNAME";
	$fieldToolTipsGE_FOTO["Spanish"]["USERNAME"] = "";
	$fieldLabelsGE_FOTO["Spanish"]["TITULO"] = "TITULO";
	$fieldToolTipsGE_FOTO["Spanish"]["TITULO"] = "";
	$fieldLabelsGE_FOTO["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_FOTO["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_FOTO["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_FOTO["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_FOTO["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_FOTO["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_FOTO["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_FOTO["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_FOTO["Spanish"]))
		$tdataGE_FOTO[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_FOTO[""] = array();
	$fieldToolTipsGE_FOTO[""] = array();
	$pageTitlesGE_FOTO[""] = array();
	$fieldLabelsGE_FOTO[""]["FOTO_ID"] = "FOTO ID";
	$fieldToolTipsGE_FOTO[""]["FOTO_ID"] = "";
	$fieldLabelsGE_FOTO[""]["RUTA"] = "RUTA";
	$fieldToolTipsGE_FOTO[""]["RUTA"] = "";
	$fieldLabelsGE_FOTO[""]["USERNAME"] = "USERNAME";
	$fieldToolTipsGE_FOTO[""]["USERNAME"] = "";
	$fieldLabelsGE_FOTO[""]["TITULO"] = "TITULO";
	$fieldToolTipsGE_FOTO[""]["TITULO"] = "";
	$fieldLabelsGE_FOTO[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_FOTO[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_FOTO[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_FOTO[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_FOTO[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_FOTO[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_FOTO[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_FOTO[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_FOTO[""]))
		$tdataGE_FOTO[".isUseToolTips"] = true;
}
	
	
	$tdataGE_FOTO[".NCSearch"] = true;



$tdataGE_FOTO[".shortTableName"] = "GE_FOTO";
$tdataGE_FOTO[".nSecOptions"] = 0;
$tdataGE_FOTO[".recsPerRowList"] = 1;
$tdataGE_FOTO[".mainTableOwnerID"] = "";
$tdataGE_FOTO[".moveNext"] = 1;
$tdataGE_FOTO[".nType"] = 0;

$tdataGE_FOTO[".strOriginalTableName"] = "GE.FOTO";




$tdataGE_FOTO[".showAddInPopup"] = false;

$tdataGE_FOTO[".showEditInPopup"] = false;

$tdataGE_FOTO[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_FOTO[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_FOTO[".fieldsForRegister"] = array();

$tdataGE_FOTO[".listAjax"] = false;

	$tdataGE_FOTO[".audit"] = false;

	$tdataGE_FOTO[".locking"] = false;

$tdataGE_FOTO[".edit"] = true;

$tdataGE_FOTO[".list"] = true;

$tdataGE_FOTO[".inlineEdit"] = true;
$tdataGE_FOTO[".inlineAdd"] = true;
$tdataGE_FOTO[".view"] = true;

$tdataGE_FOTO[".import"] = true;

$tdataGE_FOTO[".exportTo"] = true;

$tdataGE_FOTO[".printFriendly"] = true;

$tdataGE_FOTO[".delete"] = true;

$tdataGE_FOTO[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_FOTO[".searchSaving"] = false;
//

$tdataGE_FOTO[".showSearchPanel"] = true;
		$tdataGE_FOTO[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_FOTO[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_FOTO[".isUseAjaxSuggest"] = true;

$tdataGE_FOTO[".rowHighlite"] = true;



$tdataGE_FOTO[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_FOTO[".isUseTimeForSearch"] = false;





$tdataGE_FOTO[".allSearchFields"] = array();
$tdataGE_FOTO[".filterFields"] = array();
$tdataGE_FOTO[".requiredSearchFields"] = array();

$tdataGE_FOTO[".allSearchFields"][] = "FOTO_ID";
	$tdataGE_FOTO[".allSearchFields"][] = "USERNAME";
	$tdataGE_FOTO[".allSearchFields"][] = "TITULO";
	$tdataGE_FOTO[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_FOTO[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_FOTO[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_FOTO[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_FOTO[".googleLikeFields"] = array();
$tdataGE_FOTO[".googleLikeFields"][] = "FOTO_ID";
$tdataGE_FOTO[".googleLikeFields"][] = "USERNAME";
$tdataGE_FOTO[".googleLikeFields"][] = "TITULO";
$tdataGE_FOTO[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_FOTO[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_FOTO[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FOTO[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_FOTO[".advSearchFields"] = array();
$tdataGE_FOTO[".advSearchFields"][] = "FOTO_ID";
$tdataGE_FOTO[".advSearchFields"][] = "USERNAME";
$tdataGE_FOTO[".advSearchFields"][] = "TITULO";
$tdataGE_FOTO[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_FOTO[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_FOTO[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FOTO[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_FOTO[".tableType"] = "list";

$tdataGE_FOTO[".printerPageOrientation"] = 0;
$tdataGE_FOTO[".nPrinterPageScale"] = 100;

$tdataGE_FOTO[".nPrinterSplitRecords"] = 40;

$tdataGE_FOTO[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_FOTO[".pageSize"] = 20;

$tdataGE_FOTO[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_FOTO[".strOrderBy"] = $tstrOrderBy;

$tdataGE_FOTO[".orderindexes"] = array();

$tdataGE_FOTO[".sqlHead"] = "SELECT FOTO_ID,  RUTA,  USERNAME,  TITULO,  FEC_CREACION,  USUARIO_CREACION,  FEC_ULTIMA_MOD,  USUARIO_ULTIMA_MOD";
$tdataGE_FOTO[".sqlFrom"] = "FROM GE.FOTO";
$tdataGE_FOTO[".sqlWhereExpr"] = "";
$tdataGE_FOTO[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_FOTO[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_FOTO[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_FOTO[".highlightSearchResults"] = true;

$tableKeysGE_FOTO = array();
$tableKeysGE_FOTO[] = "FOTO_ID";
$tdataGE_FOTO[".Keys"] = $tableKeysGE_FOTO;

$tdataGE_FOTO[".listFields"] = array();
$tdataGE_FOTO[".listFields"][] = "FOTO_ID";
$tdataGE_FOTO[".listFields"][] = "RUTA";
$tdataGE_FOTO[".listFields"][] = "USERNAME";
$tdataGE_FOTO[".listFields"][] = "TITULO";
$tdataGE_FOTO[".listFields"][] = "FEC_CREACION";
$tdataGE_FOTO[".listFields"][] = "USUARIO_CREACION";
$tdataGE_FOTO[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FOTO[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_FOTO[".hideMobileList"] = array();


$tdataGE_FOTO[".viewFields"] = array();
$tdataGE_FOTO[".viewFields"][] = "FOTO_ID";
$tdataGE_FOTO[".viewFields"][] = "RUTA";
$tdataGE_FOTO[".viewFields"][] = "USERNAME";
$tdataGE_FOTO[".viewFields"][] = "TITULO";
$tdataGE_FOTO[".viewFields"][] = "FEC_CREACION";
$tdataGE_FOTO[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_FOTO[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FOTO[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_FOTO[".addFields"] = array();
$tdataGE_FOTO[".addFields"][] = "FOTO_ID";
$tdataGE_FOTO[".addFields"][] = "RUTA";
$tdataGE_FOTO[".addFields"][] = "USERNAME";
$tdataGE_FOTO[".addFields"][] = "TITULO";

$tdataGE_FOTO[".inlineAddFields"] = array();
$tdataGE_FOTO[".inlineAddFields"][] = "FOTO_ID";
$tdataGE_FOTO[".inlineAddFields"][] = "RUTA";
$tdataGE_FOTO[".inlineAddFields"][] = "USERNAME";
$tdataGE_FOTO[".inlineAddFields"][] = "TITULO";
$tdataGE_FOTO[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_FOTO[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_FOTO[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FOTO[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_FOTO[".editFields"] = array();
$tdataGE_FOTO[".editFields"][] = "FOTO_ID";
$tdataGE_FOTO[".editFields"][] = "RUTA";
$tdataGE_FOTO[".editFields"][] = "USERNAME";
$tdataGE_FOTO[".editFields"][] = "TITULO";

$tdataGE_FOTO[".inlineEditFields"] = array();
$tdataGE_FOTO[".inlineEditFields"][] = "FOTO_ID";
$tdataGE_FOTO[".inlineEditFields"][] = "RUTA";
$tdataGE_FOTO[".inlineEditFields"][] = "USERNAME";
$tdataGE_FOTO[".inlineEditFields"][] = "TITULO";
$tdataGE_FOTO[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_FOTO[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_FOTO[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FOTO[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_FOTO[".exportFields"] = array();
$tdataGE_FOTO[".exportFields"][] = "FOTO_ID";
$tdataGE_FOTO[".exportFields"][] = "USERNAME";
$tdataGE_FOTO[".exportFields"][] = "TITULO";
$tdataGE_FOTO[".exportFields"][] = "FEC_CREACION";
$tdataGE_FOTO[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_FOTO[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FOTO[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_FOTO[".importFields"] = array();
$tdataGE_FOTO[".importFields"][] = "FOTO_ID";
$tdataGE_FOTO[".importFields"][] = "USERNAME";
$tdataGE_FOTO[".importFields"][] = "TITULO";
$tdataGE_FOTO[".importFields"][] = "FEC_CREACION";
$tdataGE_FOTO[".importFields"][] = "USUARIO_CREACION";
$tdataGE_FOTO[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FOTO[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_FOTO[".printFields"] = array();
$tdataGE_FOTO[".printFields"][] = "FOTO_ID";
$tdataGE_FOTO[".printFields"][] = "RUTA";
$tdataGE_FOTO[".printFields"][] = "USERNAME";
$tdataGE_FOTO[".printFields"][] = "TITULO";
$tdataGE_FOTO[".printFields"][] = "FEC_CREACION";
$tdataGE_FOTO[".printFields"][] = "USUARIO_CREACION";
$tdataGE_FOTO[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_FOTO[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	FOTO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "FOTO_ID";
	$fdata["GoodName"] = "FOTO_ID";
	$fdata["ownerTable"] = "GE.FOTO";
	$fdata["Label"] = GetFieldLabel("GE_FOTO","FOTO_ID"); 
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
	
		$fdata["strField"] = "FOTO_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FOTO_ID";
	
		
		
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

	

	
	$tdataGE_FOTO["FOTO_ID"] = $fdata;
//	RUTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RUTA";
	$fdata["GoodName"] = "RUTA";
	$fdata["ownerTable"] = "GE.FOTO";
	$fdata["Label"] = GetFieldLabel("GE_FOTO","RUTA"); 
	$fdata["FieldType"] = 128;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "RUTA"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RUTA";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Database Image");
	
		
		
						$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Database image");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataGE_FOTO["RUTA"] = $fdata;
//	USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "USERNAME";
	$fdata["GoodName"] = "USERNAME";
	$fdata["ownerTable"] = "GE.FOTO";
	$fdata["Label"] = GetFieldLabel("GE_FOTO","USERNAME"); 
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
	
		$fdata["strField"] = "USERNAME"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USERNAME";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "GE.PERSONA";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "USERNAME";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "USERNAME";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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

	

	
	$tdataGE_FOTO["USERNAME"] = $fdata;
//	TITULO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TITULO";
	$fdata["GoodName"] = "TITULO";
	$fdata["ownerTable"] = "GE.FOTO";
	$fdata["Label"] = GetFieldLabel("GE_FOTO","TITULO"); 
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
	
		$fdata["strField"] = "TITULO"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TITULO";
	
		
		
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

	

	
	$tdataGE_FOTO["TITULO"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.FOTO";
	$fdata["Label"] = GetFieldLabel("GE_FOTO","FEC_CREACION"); 
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

	

	
	$tdataGE_FOTO["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.FOTO";
	$fdata["Label"] = GetFieldLabel("GE_FOTO","USUARIO_CREACION"); 
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

	

	
	$tdataGE_FOTO["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.FOTO";
	$fdata["Label"] = GetFieldLabel("GE_FOTO","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_FOTO["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.FOTO";
	$fdata["Label"] = GetFieldLabel("GE_FOTO","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_FOTO["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.FOTO"]=&$tdataGE_FOTO;
$field_labels["GE_FOTO"] = &$fieldLabelsGE_FOTO;
$fieldToolTips["GE.FOTO"] = &$fieldToolTipsGE_FOTO;
$page_titles["GE_FOTO"] = &$pageTitlesGE_FOTO;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.FOTO"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.FOTO"] = array();


	
				$strOriginalDetailsTable="GE.PERSONA";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="GE.PERSONA";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "GE_PERSONA";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["GE.FOTO"][0] = $masterParams;	
				$masterTablesData["GE.FOTO"][0]["masterKeys"] = array();
	$masterTablesData["GE.FOTO"][0]["masterKeys"][]="USERNAME";
				$masterTablesData["GE.FOTO"][0]["detailKeys"] = array();
	$masterTablesData["GE.FOTO"][0]["detailKeys"][]="USERNAME";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_FOTO()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "FOTO_ID,  RUTA,  USERNAME,  TITULO,  FEC_CREACION,  USUARIO_CREACION,  FEC_ULTIMA_MOD,  USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.FOTO";
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
	"m_strName" => "FOTO_ID",
	"m_strTable" => "GE.FOTO",
	"m_srcTableName" => "GE.FOTO"
));

$proto5["m_sql"] = "FOTO_ID";
$proto5["m_srcTableName"] = "GE.FOTO";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "RUTA",
	"m_strTable" => "GE.FOTO",
	"m_srcTableName" => "GE.FOTO"
));

$proto7["m_sql"] = "RUTA";
$proto7["m_srcTableName"] = "GE.FOTO";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "USERNAME",
	"m_strTable" => "GE.FOTO",
	"m_srcTableName" => "GE.FOTO"
));

$proto9["m_sql"] = "USERNAME";
$proto9["m_srcTableName"] = "GE.FOTO";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "TITULO",
	"m_strTable" => "GE.FOTO",
	"m_srcTableName" => "GE.FOTO"
));

$proto11["m_sql"] = "TITULO";
$proto11["m_srcTableName"] = "GE.FOTO";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.FOTO",
	"m_srcTableName" => "GE.FOTO"
));

$proto13["m_sql"] = "FEC_CREACION";
$proto13["m_srcTableName"] = "GE.FOTO";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.FOTO",
	"m_srcTableName" => "GE.FOTO"
));

$proto15["m_sql"] = "USUARIO_CREACION";
$proto15["m_srcTableName"] = "GE.FOTO";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.FOTO",
	"m_srcTableName" => "GE.FOTO"
));

$proto17["m_sql"] = "FEC_ULTIMA_MOD";
$proto17["m_srcTableName"] = "GE.FOTO";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.FOTO",
	"m_srcTableName" => "GE.FOTO"
));

$proto19["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto19["m_srcTableName"] = "GE.FOTO";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "GE.FOTO";
$proto22["m_srcTableName"] = "GE.FOTO";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "FOTO_ID";
$proto22["m_columns"][] = "RUTA";
$proto22["m_columns"][] = "USERNAME";
$proto22["m_columns"][] = "TITULO";
$proto22["m_columns"][] = "FEC_CREACION";
$proto22["m_columns"][] = "USUARIO_CREACION";
$proto22["m_columns"][] = "FEC_ULTIMA_MOD";
$proto22["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "GE.FOTO";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "GE.FOTO";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="GE.FOTO";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_FOTO = createSqlQuery_GE_FOTO();


	
								
	
$tdataGE_FOTO[".sqlquery"] = $queryData_GE_FOTO;

$tableEvents["GE.FOTO"] = new eventsBase;
$tdataGE_FOTO[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_CIUDAD = array();	
	$tdataGE_CIUDAD[".truncateText"] = true;
	$tdataGE_CIUDAD[".NumberOfChars"] = 80; 
	$tdataGE_CIUDAD[".ShortName"] = "GE_CIUDAD";
	$tdataGE_CIUDAD[".OwnerID"] = "";
	$tdataGE_CIUDAD[".OriginalTable"] = "GE.CIUDAD";

//	field labels
$fieldLabelsGE_CIUDAD = array();
$fieldToolTipsGE_CIUDAD = array();
$pageTitlesGE_CIUDAD = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_CIUDAD["Spanish"] = array();
	$fieldToolTipsGE_CIUDAD["Spanish"] = array();
	$pageTitlesGE_CIUDAD["Spanish"] = array();
	$fieldLabelsGE_CIUDAD["Spanish"]["CIUDAD_ID"] = "CIUDAD ID";
	$fieldToolTipsGE_CIUDAD["Spanish"]["CIUDAD_ID"] = "";
	$fieldLabelsGE_CIUDAD["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_CIUDAD["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGE_CIUDAD["Spanish"]["PAIS_ID"] = "PAIS ID";
	$fieldToolTipsGE_CIUDAD["Spanish"]["PAIS_ID"] = "";
	$fieldLabelsGE_CIUDAD["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_CIUDAD["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_CIUDAD["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_CIUDAD["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_CIUDAD["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_CIUDAD["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_CIUDAD["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_CIUDAD["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_CIUDAD["Spanish"]))
		$tdataGE_CIUDAD[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_CIUDAD[""] = array();
	$fieldToolTipsGE_CIUDAD[""] = array();
	$pageTitlesGE_CIUDAD[""] = array();
	$fieldLabelsGE_CIUDAD[""]["CIUDAD_ID"] = "CIUDAD ID";
	$fieldToolTipsGE_CIUDAD[""]["CIUDAD_ID"] = "";
	$fieldLabelsGE_CIUDAD[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_CIUDAD[""]["NOMBRE"] = "";
	$fieldLabelsGE_CIUDAD[""]["PAIS_ID"] = "PAIS ID";
	$fieldToolTipsGE_CIUDAD[""]["PAIS_ID"] = "";
	$fieldLabelsGE_CIUDAD[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_CIUDAD[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_CIUDAD[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_CIUDAD[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_CIUDAD[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_CIUDAD[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_CIUDAD[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_CIUDAD[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_CIUDAD[""]))
		$tdataGE_CIUDAD[".isUseToolTips"] = true;
}
	
	
	$tdataGE_CIUDAD[".NCSearch"] = true;



$tdataGE_CIUDAD[".shortTableName"] = "GE_CIUDAD";
$tdataGE_CIUDAD[".nSecOptions"] = 0;
$tdataGE_CIUDAD[".recsPerRowList"] = 1;
$tdataGE_CIUDAD[".mainTableOwnerID"] = "";
$tdataGE_CIUDAD[".moveNext"] = 1;
$tdataGE_CIUDAD[".nType"] = 0;

$tdataGE_CIUDAD[".strOriginalTableName"] = "GE.CIUDAD";




$tdataGE_CIUDAD[".showAddInPopup"] = false;

$tdataGE_CIUDAD[".showEditInPopup"] = false;

$tdataGE_CIUDAD[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_CIUDAD[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_CIUDAD[".fieldsForRegister"] = array();

$tdataGE_CIUDAD[".listAjax"] = false;

	$tdataGE_CIUDAD[".audit"] = false;

	$tdataGE_CIUDAD[".locking"] = false;

$tdataGE_CIUDAD[".edit"] = true;

$tdataGE_CIUDAD[".list"] = true;

$tdataGE_CIUDAD[".inlineEdit"] = true;
$tdataGE_CIUDAD[".inlineAdd"] = true;
$tdataGE_CIUDAD[".view"] = true;

$tdataGE_CIUDAD[".import"] = true;

$tdataGE_CIUDAD[".exportTo"] = true;

$tdataGE_CIUDAD[".printFriendly"] = true;

$tdataGE_CIUDAD[".delete"] = true;

$tdataGE_CIUDAD[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_CIUDAD[".searchSaving"] = false;
//

$tdataGE_CIUDAD[".showSearchPanel"] = true;
		$tdataGE_CIUDAD[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_CIUDAD[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_CIUDAD[".isUseAjaxSuggest"] = true;

$tdataGE_CIUDAD[".rowHighlite"] = true;



$tdataGE_CIUDAD[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_CIUDAD[".isUseTimeForSearch"] = false;



$tdataGE_CIUDAD[".useDetailsPreview"] = true;


$tdataGE_CIUDAD[".allSearchFields"] = array();
$tdataGE_CIUDAD[".filterFields"] = array();
$tdataGE_CIUDAD[".requiredSearchFields"] = array();

$tdataGE_CIUDAD[".allSearchFields"][] = "CIUDAD_ID";
	$tdataGE_CIUDAD[".allSearchFields"][] = "NOMBRE";
	$tdataGE_CIUDAD[".allSearchFields"][] = "PAIS_ID";
	$tdataGE_CIUDAD[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_CIUDAD[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_CIUDAD[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_CIUDAD[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_CIUDAD[".googleLikeFields"] = array();
$tdataGE_CIUDAD[".googleLikeFields"][] = "CIUDAD_ID";
$tdataGE_CIUDAD[".googleLikeFields"][] = "NOMBRE";
$tdataGE_CIUDAD[".googleLikeFields"][] = "PAIS_ID";
$tdataGE_CIUDAD[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_CIUDAD[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_CIUDAD[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CIUDAD[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_CIUDAD[".advSearchFields"] = array();
$tdataGE_CIUDAD[".advSearchFields"][] = "CIUDAD_ID";
$tdataGE_CIUDAD[".advSearchFields"][] = "NOMBRE";
$tdataGE_CIUDAD[".advSearchFields"][] = "PAIS_ID";
$tdataGE_CIUDAD[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_CIUDAD[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_CIUDAD[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CIUDAD[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_CIUDAD[".tableType"] = "list";

$tdataGE_CIUDAD[".printerPageOrientation"] = 0;
$tdataGE_CIUDAD[".nPrinterPageScale"] = 100;

$tdataGE_CIUDAD[".nPrinterSplitRecords"] = 40;

$tdataGE_CIUDAD[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_CIUDAD[".pageSize"] = 20;

$tdataGE_CIUDAD[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_CIUDAD[".strOrderBy"] = $tstrOrderBy;

$tdataGE_CIUDAD[".orderindexes"] = array();

$tdataGE_CIUDAD[".sqlHead"] = "SELECT CIUDAD_ID,   NOMBRE,   PAIS_ID,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$tdataGE_CIUDAD[".sqlFrom"] = "FROM GE.CIUDAD";
$tdataGE_CIUDAD[".sqlWhereExpr"] = "";
$tdataGE_CIUDAD[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_CIUDAD[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_CIUDAD[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_CIUDAD[".highlightSearchResults"] = true;

$tableKeysGE_CIUDAD = array();
$tableKeysGE_CIUDAD[] = "CIUDAD_ID";
$tdataGE_CIUDAD[".Keys"] = $tableKeysGE_CIUDAD;

$tdataGE_CIUDAD[".listFields"] = array();
$tdataGE_CIUDAD[".listFields"][] = "CIUDAD_ID";
$tdataGE_CIUDAD[".listFields"][] = "NOMBRE";
$tdataGE_CIUDAD[".listFields"][] = "PAIS_ID";
$tdataGE_CIUDAD[".listFields"][] = "FEC_CREACION";
$tdataGE_CIUDAD[".listFields"][] = "USUARIO_CREACION";
$tdataGE_CIUDAD[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CIUDAD[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_CIUDAD[".hideMobileList"] = array();


$tdataGE_CIUDAD[".viewFields"] = array();
$tdataGE_CIUDAD[".viewFields"][] = "CIUDAD_ID";
$tdataGE_CIUDAD[".viewFields"][] = "NOMBRE";
$tdataGE_CIUDAD[".viewFields"][] = "PAIS_ID";
$tdataGE_CIUDAD[".viewFields"][] = "FEC_CREACION";
$tdataGE_CIUDAD[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_CIUDAD[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CIUDAD[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_CIUDAD[".addFields"] = array();
$tdataGE_CIUDAD[".addFields"][] = "CIUDAD_ID";
$tdataGE_CIUDAD[".addFields"][] = "NOMBRE";
$tdataGE_CIUDAD[".addFields"][] = "PAIS_ID";

$tdataGE_CIUDAD[".inlineAddFields"] = array();
$tdataGE_CIUDAD[".inlineAddFields"][] = "CIUDAD_ID";
$tdataGE_CIUDAD[".inlineAddFields"][] = "NOMBRE";
$tdataGE_CIUDAD[".inlineAddFields"][] = "PAIS_ID";
$tdataGE_CIUDAD[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_CIUDAD[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_CIUDAD[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CIUDAD[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_CIUDAD[".editFields"] = array();
$tdataGE_CIUDAD[".editFields"][] = "CIUDAD_ID";
$tdataGE_CIUDAD[".editFields"][] = "NOMBRE";
$tdataGE_CIUDAD[".editFields"][] = "PAIS_ID";

$tdataGE_CIUDAD[".inlineEditFields"] = array();
$tdataGE_CIUDAD[".inlineEditFields"][] = "CIUDAD_ID";
$tdataGE_CIUDAD[".inlineEditFields"][] = "NOMBRE";
$tdataGE_CIUDAD[".inlineEditFields"][] = "PAIS_ID";
$tdataGE_CIUDAD[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_CIUDAD[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_CIUDAD[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CIUDAD[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_CIUDAD[".exportFields"] = array();
$tdataGE_CIUDAD[".exportFields"][] = "CIUDAD_ID";
$tdataGE_CIUDAD[".exportFields"][] = "NOMBRE";
$tdataGE_CIUDAD[".exportFields"][] = "PAIS_ID";
$tdataGE_CIUDAD[".exportFields"][] = "FEC_CREACION";
$tdataGE_CIUDAD[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_CIUDAD[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CIUDAD[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_CIUDAD[".importFields"] = array();
$tdataGE_CIUDAD[".importFields"][] = "CIUDAD_ID";
$tdataGE_CIUDAD[".importFields"][] = "NOMBRE";
$tdataGE_CIUDAD[".importFields"][] = "PAIS_ID";
$tdataGE_CIUDAD[".importFields"][] = "FEC_CREACION";
$tdataGE_CIUDAD[".importFields"][] = "USUARIO_CREACION";
$tdataGE_CIUDAD[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CIUDAD[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_CIUDAD[".printFields"] = array();
$tdataGE_CIUDAD[".printFields"][] = "CIUDAD_ID";
$tdataGE_CIUDAD[".printFields"][] = "NOMBRE";
$tdataGE_CIUDAD[".printFields"][] = "PAIS_ID";
$tdataGE_CIUDAD[".printFields"][] = "FEC_CREACION";
$tdataGE_CIUDAD[".printFields"][] = "USUARIO_CREACION";
$tdataGE_CIUDAD[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_CIUDAD[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	CIUDAD_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CIUDAD_ID";
	$fdata["GoodName"] = "CIUDAD_ID";
	$fdata["ownerTable"] = "GE.CIUDAD";
	$fdata["Label"] = GetFieldLabel("GE_CIUDAD","CIUDAD_ID"); 
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
	
		$fdata["strField"] = "CIUDAD_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIUDAD_ID";
	
		
		
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

	

	
	$tdataGE_CIUDAD["CIUDAD_ID"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "GE.CIUDAD";
	$fdata["Label"] = GetFieldLabel("GE_CIUDAD","NOMBRE"); 
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

	

	
	$tdataGE_CIUDAD["NOMBRE"] = $fdata;
//	PAIS_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PAIS_ID";
	$fdata["GoodName"] = "PAIS_ID";
	$fdata["ownerTable"] = "GE.CIUDAD";
	$fdata["Label"] = GetFieldLabel("GE_CIUDAD","PAIS_ID"); 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "GE.PAIS";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "PAIS_ID";
	$edata["LinkFieldType"] = 14;
	$edata["DisplayField"] = "PAIS_ID";
	
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataGE_CIUDAD["PAIS_ID"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.CIUDAD";
	$fdata["Label"] = GetFieldLabel("GE_CIUDAD","FEC_CREACION"); 
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

	

	
	$tdataGE_CIUDAD["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.CIUDAD";
	$fdata["Label"] = GetFieldLabel("GE_CIUDAD","USUARIO_CREACION"); 
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

	

	
	$tdataGE_CIUDAD["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.CIUDAD";
	$fdata["Label"] = GetFieldLabel("GE_CIUDAD","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_CIUDAD["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.CIUDAD";
	$fdata["Label"] = GetFieldLabel("GE_CIUDAD","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_CIUDAD["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.CIUDAD"]=&$tdataGE_CIUDAD;
$field_labels["GE_CIUDAD"] = &$fieldLabelsGE_CIUDAD;
$fieldToolTips["GE.CIUDAD"] = &$fieldToolTipsGE_CIUDAD;
$page_titles["GE_CIUDAD"] = &$pageTitlesGE_CIUDAD;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.CIUDAD"] = array();
//	GE.EVENTO
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.EVENTO";
		$detailsParam["dOriginalTable"] = "GE.EVENTO";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_EVENTO";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.CIUDAD"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.CIUDAD"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.CIUDAD"][$dIndex]["masterKeys"][]="CIUDAD_ID";

				$detailsTablesData["GE.CIUDAD"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.CIUDAD"][$dIndex]["detailKeys"][]="CIUDAD";
//	GE.PERSONA
	
	

		$dIndex = 1;
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
			
	$detailsTablesData["GE.CIUDAD"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.CIUDAD"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.CIUDAD"][$dIndex]["masterKeys"][]="CIUDAD_ID";

				$detailsTablesData["GE.CIUDAD"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.CIUDAD"][$dIndex]["detailKeys"][]="CIUDAD_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.CIUDAD"] = array();


	
				$strOriginalDetailsTable="GE.PAIS";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="GE.PAIS";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "GE_PAIS";
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
					$masterTablesData["GE.CIUDAD"][0] = $masterParams;	
				$masterTablesData["GE.CIUDAD"][0]["masterKeys"] = array();
	$masterTablesData["GE.CIUDAD"][0]["masterKeys"][]="PAIS_ID";
				$masterTablesData["GE.CIUDAD"][0]["detailKeys"] = array();
	$masterTablesData["GE.CIUDAD"][0]["detailKeys"][]="PAIS_ID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_CIUDAD()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CIUDAD_ID,   NOMBRE,   PAIS_ID,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.CIUDAD";
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
	"m_strName" => "CIUDAD_ID",
	"m_strTable" => "GE.CIUDAD",
	"m_srcTableName" => "GE.CIUDAD"
));

$proto5["m_sql"] = "CIUDAD_ID";
$proto5["m_srcTableName"] = "GE.CIUDAD";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "GE.CIUDAD",
	"m_srcTableName" => "GE.CIUDAD"
));

$proto7["m_sql"] = "NOMBRE";
$proto7["m_srcTableName"] = "GE.CIUDAD";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "PAIS_ID",
	"m_strTable" => "GE.CIUDAD",
	"m_srcTableName" => "GE.CIUDAD"
));

$proto9["m_sql"] = "PAIS_ID";
$proto9["m_srcTableName"] = "GE.CIUDAD";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.CIUDAD",
	"m_srcTableName" => "GE.CIUDAD"
));

$proto11["m_sql"] = "FEC_CREACION";
$proto11["m_srcTableName"] = "GE.CIUDAD";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.CIUDAD",
	"m_srcTableName" => "GE.CIUDAD"
));

$proto13["m_sql"] = "USUARIO_CREACION";
$proto13["m_srcTableName"] = "GE.CIUDAD";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.CIUDAD",
	"m_srcTableName" => "GE.CIUDAD"
));

$proto15["m_sql"] = "FEC_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.CIUDAD";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.CIUDAD",
	"m_srcTableName" => "GE.CIUDAD"
));

$proto17["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto17["m_srcTableName"] = "GE.CIUDAD";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "GE.CIUDAD";
$proto20["m_srcTableName"] = "GE.CIUDAD";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "CIUDAD_ID";
$proto20["m_columns"][] = "NOMBRE";
$proto20["m_columns"][] = "PAIS_ID";
$proto20["m_columns"][] = "FEC_CREACION";
$proto20["m_columns"][] = "USUARIO_CREACION";
$proto20["m_columns"][] = "FEC_ULTIMA_MOD";
$proto20["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "GE.CIUDAD";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "GE.CIUDAD";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="GE.CIUDAD";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_CIUDAD = createSqlQuery_GE_CIUDAD();


	
							
	
$tdataGE_CIUDAD[".sqlquery"] = $queryData_GE_CIUDAD;

$tableEvents["GE.CIUDAD"] = new eventsBase;
$tdataGE_CIUDAD[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_VISITA = array();	
	$tdataGE_VISITA[".truncateText"] = true;
	$tdataGE_VISITA[".NumberOfChars"] = 80; 
	$tdataGE_VISITA[".ShortName"] = "GE_VISITA";
	$tdataGE_VISITA[".OwnerID"] = "";
	$tdataGE_VISITA[".OriginalTable"] = "GE.VISITA";

//	field labels
$fieldLabelsGE_VISITA = array();
$fieldToolTipsGE_VISITA = array();
$pageTitlesGE_VISITA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_VISITA["Spanish"] = array();
	$fieldToolTipsGE_VISITA["Spanish"] = array();
	$pageTitlesGE_VISITA["Spanish"] = array();
	$fieldLabelsGE_VISITA["Spanish"]["FEC_VISITA"] = "FEC VISITA";
	$fieldToolTipsGE_VISITA["Spanish"]["FEC_VISITA"] = "";
	$fieldLabelsGE_VISITA["Spanish"]["USERNAME_VISITANTE"] = "USERNAME VISITANTE";
	$fieldToolTipsGE_VISITA["Spanish"]["USERNAME_VISITANTE"] = "";
	$fieldLabelsGE_VISITA["Spanish"]["USERNAME_VISITADA"] = "USERNAME VISITADA";
	$fieldToolTipsGE_VISITA["Spanish"]["USERNAME_VISITADA"] = "";
	$fieldLabelsGE_VISITA["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_VISITA["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_VISITA["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_VISITA["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_VISITA["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_VISITA["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_VISITA["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_VISITA["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_VISITA["Spanish"]))
		$tdataGE_VISITA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_VISITA[""] = array();
	$fieldToolTipsGE_VISITA[""] = array();
	$pageTitlesGE_VISITA[""] = array();
	$fieldLabelsGE_VISITA[""]["FEC_VISITA"] = "FEC VISITA";
	$fieldToolTipsGE_VISITA[""]["FEC_VISITA"] = "";
	$fieldLabelsGE_VISITA[""]["USERNAME_VISITANTE"] = "USERNAME VISITANTE";
	$fieldToolTipsGE_VISITA[""]["USERNAME_VISITANTE"] = "";
	$fieldLabelsGE_VISITA[""]["USERNAME_VISITADA"] = "USERNAME VISITADA";
	$fieldToolTipsGE_VISITA[""]["USERNAME_VISITADA"] = "";
	$fieldLabelsGE_VISITA[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_VISITA[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_VISITA[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_VISITA[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_VISITA[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_VISITA[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_VISITA[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_VISITA[""]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_VISITA[""]))
		$tdataGE_VISITA[".isUseToolTips"] = true;
}
	
	
	$tdataGE_VISITA[".NCSearch"] = true;



$tdataGE_VISITA[".shortTableName"] = "GE_VISITA";
$tdataGE_VISITA[".nSecOptions"] = 0;
$tdataGE_VISITA[".recsPerRowList"] = 1;
$tdataGE_VISITA[".mainTableOwnerID"] = "";
$tdataGE_VISITA[".moveNext"] = 1;
$tdataGE_VISITA[".nType"] = 0;

$tdataGE_VISITA[".strOriginalTableName"] = "GE.VISITA";




$tdataGE_VISITA[".showAddInPopup"] = false;

$tdataGE_VISITA[".showEditInPopup"] = false;

$tdataGE_VISITA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_VISITA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_VISITA[".fieldsForRegister"] = array();

$tdataGE_VISITA[".listAjax"] = false;

	$tdataGE_VISITA[".audit"] = false;

	$tdataGE_VISITA[".locking"] = false;

$tdataGE_VISITA[".edit"] = true;

$tdataGE_VISITA[".list"] = true;

$tdataGE_VISITA[".inlineEdit"] = true;
$tdataGE_VISITA[".inlineAdd"] = true;
$tdataGE_VISITA[".view"] = true;

$tdataGE_VISITA[".import"] = true;

$tdataGE_VISITA[".exportTo"] = true;

$tdataGE_VISITA[".printFriendly"] = true;

$tdataGE_VISITA[".delete"] = true;

$tdataGE_VISITA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_VISITA[".searchSaving"] = false;
//

$tdataGE_VISITA[".showSearchPanel"] = true;
		$tdataGE_VISITA[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_VISITA[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_VISITA[".isUseAjaxSuggest"] = true;

$tdataGE_VISITA[".rowHighlite"] = true;



$tdataGE_VISITA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_VISITA[".isUseTimeForSearch"] = false;





$tdataGE_VISITA[".allSearchFields"] = array();
$tdataGE_VISITA[".filterFields"] = array();
$tdataGE_VISITA[".requiredSearchFields"] = array();

$tdataGE_VISITA[".allSearchFields"][] = "FEC_VISITA";
	$tdataGE_VISITA[".allSearchFields"][] = "USERNAME_VISITANTE";
	$tdataGE_VISITA[".allSearchFields"][] = "USERNAME_VISITADA";
	$tdataGE_VISITA[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_VISITA[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_VISITA[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_VISITA[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_VISITA[".googleLikeFields"] = array();
$tdataGE_VISITA[".googleLikeFields"][] = "FEC_VISITA";
$tdataGE_VISITA[".googleLikeFields"][] = "USERNAME_VISITANTE";
$tdataGE_VISITA[".googleLikeFields"][] = "USERNAME_VISITADA";
$tdataGE_VISITA[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_VISITA[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_VISITA[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_VISITA[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_VISITA[".advSearchFields"] = array();
$tdataGE_VISITA[".advSearchFields"][] = "FEC_VISITA";
$tdataGE_VISITA[".advSearchFields"][] = "USERNAME_VISITANTE";
$tdataGE_VISITA[".advSearchFields"][] = "USERNAME_VISITADA";
$tdataGE_VISITA[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_VISITA[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_VISITA[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_VISITA[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_VISITA[".tableType"] = "list";

$tdataGE_VISITA[".printerPageOrientation"] = 0;
$tdataGE_VISITA[".nPrinterPageScale"] = 100;

$tdataGE_VISITA[".nPrinterSplitRecords"] = 40;

$tdataGE_VISITA[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_VISITA[".pageSize"] = 20;

$tdataGE_VISITA[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_VISITA[".strOrderBy"] = $tstrOrderBy;

$tdataGE_VISITA[".orderindexes"] = array();

$tdataGE_VISITA[".sqlHead"] = "SELECT FEC_VISITA,   USERNAME_VISITANTE,   USERNAME_VISITADA,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$tdataGE_VISITA[".sqlFrom"] = "FROM GE.VISITA";
$tdataGE_VISITA[".sqlWhereExpr"] = "";
$tdataGE_VISITA[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_VISITA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_VISITA[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_VISITA[".highlightSearchResults"] = true;

$tableKeysGE_VISITA = array();
$tableKeysGE_VISITA[] = "FEC_VISITA";
$tableKeysGE_VISITA[] = "USERNAME_VISITANTE";
$tableKeysGE_VISITA[] = "USERNAME_VISITADA";
$tdataGE_VISITA[".Keys"] = $tableKeysGE_VISITA;

$tdataGE_VISITA[".listFields"] = array();
$tdataGE_VISITA[".listFields"][] = "FEC_VISITA";
$tdataGE_VISITA[".listFields"][] = "USERNAME_VISITANTE";
$tdataGE_VISITA[".listFields"][] = "USERNAME_VISITADA";
$tdataGE_VISITA[".listFields"][] = "FEC_CREACION";
$tdataGE_VISITA[".listFields"][] = "USUARIO_CREACION";
$tdataGE_VISITA[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_VISITA[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_VISITA[".hideMobileList"] = array();


$tdataGE_VISITA[".viewFields"] = array();
$tdataGE_VISITA[".viewFields"][] = "FEC_VISITA";
$tdataGE_VISITA[".viewFields"][] = "USERNAME_VISITANTE";
$tdataGE_VISITA[".viewFields"][] = "USERNAME_VISITADA";
$tdataGE_VISITA[".viewFields"][] = "FEC_CREACION";
$tdataGE_VISITA[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_VISITA[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_VISITA[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_VISITA[".addFields"] = array();
$tdataGE_VISITA[".addFields"][] = "FEC_VISITA";
$tdataGE_VISITA[".addFields"][] = "USERNAME_VISITANTE";
$tdataGE_VISITA[".addFields"][] = "USERNAME_VISITADA";

$tdataGE_VISITA[".inlineAddFields"] = array();
$tdataGE_VISITA[".inlineAddFields"][] = "FEC_VISITA";
$tdataGE_VISITA[".inlineAddFields"][] = "USERNAME_VISITANTE";
$tdataGE_VISITA[".inlineAddFields"][] = "USERNAME_VISITADA";
$tdataGE_VISITA[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_VISITA[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_VISITA[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_VISITA[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_VISITA[".editFields"] = array();
$tdataGE_VISITA[".editFields"][] = "FEC_VISITA";
$tdataGE_VISITA[".editFields"][] = "USERNAME_VISITANTE";
$tdataGE_VISITA[".editFields"][] = "USERNAME_VISITADA";

$tdataGE_VISITA[".inlineEditFields"] = array();
$tdataGE_VISITA[".inlineEditFields"][] = "FEC_VISITA";
$tdataGE_VISITA[".inlineEditFields"][] = "USERNAME_VISITANTE";
$tdataGE_VISITA[".inlineEditFields"][] = "USERNAME_VISITADA";
$tdataGE_VISITA[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_VISITA[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_VISITA[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_VISITA[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_VISITA[".exportFields"] = array();
$tdataGE_VISITA[".exportFields"][] = "FEC_VISITA";
$tdataGE_VISITA[".exportFields"][] = "USERNAME_VISITANTE";
$tdataGE_VISITA[".exportFields"][] = "USERNAME_VISITADA";
$tdataGE_VISITA[".exportFields"][] = "FEC_CREACION";
$tdataGE_VISITA[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_VISITA[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_VISITA[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_VISITA[".importFields"] = array();
$tdataGE_VISITA[".importFields"][] = "FEC_VISITA";
$tdataGE_VISITA[".importFields"][] = "USERNAME_VISITANTE";
$tdataGE_VISITA[".importFields"][] = "USERNAME_VISITADA";
$tdataGE_VISITA[".importFields"][] = "FEC_CREACION";
$tdataGE_VISITA[".importFields"][] = "USUARIO_CREACION";
$tdataGE_VISITA[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_VISITA[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_VISITA[".printFields"] = array();
$tdataGE_VISITA[".printFields"][] = "FEC_VISITA";
$tdataGE_VISITA[".printFields"][] = "USERNAME_VISITANTE";
$tdataGE_VISITA[".printFields"][] = "USERNAME_VISITADA";
$tdataGE_VISITA[".printFields"][] = "FEC_CREACION";
$tdataGE_VISITA[".printFields"][] = "USUARIO_CREACION";
$tdataGE_VISITA[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_VISITA[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	FEC_VISITA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "FEC_VISITA";
	$fdata["GoodName"] = "FEC_VISITA";
	$fdata["ownerTable"] = "GE.VISITA";
	$fdata["Label"] = GetFieldLabel("GE_VISITA","FEC_VISITA"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FEC_VISITA"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FEC_VISITA";
	
		
		
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
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataGE_VISITA["FEC_VISITA"] = $fdata;
//	USERNAME_VISITANTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USERNAME_VISITANTE";
	$fdata["GoodName"] = "USERNAME_VISITANTE";
	$fdata["ownerTable"] = "GE.VISITA";
	$fdata["Label"] = GetFieldLabel("GE_VISITA","USERNAME_VISITANTE"); 
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
	
		$fdata["strField"] = "USERNAME_VISITANTE"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USERNAME_VISITANTE";
	
		
		
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

	

	
	$tdataGE_VISITA["USERNAME_VISITANTE"] = $fdata;
//	USERNAME_VISITADA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "USERNAME_VISITADA";
	$fdata["GoodName"] = "USERNAME_VISITADA";
	$fdata["ownerTable"] = "GE.VISITA";
	$fdata["Label"] = GetFieldLabel("GE_VISITA","USERNAME_VISITADA"); 
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
	
		$fdata["strField"] = "USERNAME_VISITADA"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USERNAME_VISITADA";
	
		
		
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

	

	
	$tdataGE_VISITA["USERNAME_VISITADA"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.VISITA";
	$fdata["Label"] = GetFieldLabel("GE_VISITA","FEC_CREACION"); 
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

	

	
	$tdataGE_VISITA["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.VISITA";
	$fdata["Label"] = GetFieldLabel("GE_VISITA","USUARIO_CREACION"); 
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

	

	
	$tdataGE_VISITA["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.VISITA";
	$fdata["Label"] = GetFieldLabel("GE_VISITA","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_VISITA["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.VISITA";
	$fdata["Label"] = GetFieldLabel("GE_VISITA","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_VISITA["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.VISITA"]=&$tdataGE_VISITA;
$field_labels["GE_VISITA"] = &$fieldLabelsGE_VISITA;
$fieldToolTips["GE.VISITA"] = &$fieldToolTipsGE_VISITA;
$page_titles["GE_VISITA"] = &$pageTitlesGE_VISITA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.VISITA"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.VISITA"] = array();


	
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
					$masterTablesData["GE.VISITA"][0] = $masterParams;	
				$masterTablesData["GE.VISITA"][0]["masterKeys"] = array();
	$masterTablesData["GE.VISITA"][0]["masterKeys"][]="USERNAME";
				$masterTablesData["GE.VISITA"][0]["masterKeys"][]="USERNAME";
				$masterTablesData["GE.VISITA"][0]["detailKeys"] = array();
	$masterTablesData["GE.VISITA"][0]["detailKeys"][]="USERNAME_VISITANTE";
				$masterTablesData["GE.VISITA"][0]["detailKeys"][]="USERNAME_VISITADA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_VISITA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "FEC_VISITA,   USERNAME_VISITANTE,   USERNAME_VISITADA,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.VISITA";
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
	"m_strName" => "FEC_VISITA",
	"m_strTable" => "GE.VISITA",
	"m_srcTableName" => "GE.VISITA"
));

$proto5["m_sql"] = "FEC_VISITA";
$proto5["m_srcTableName"] = "GE.VISITA";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "USERNAME_VISITANTE",
	"m_strTable" => "GE.VISITA",
	"m_srcTableName" => "GE.VISITA"
));

$proto7["m_sql"] = "USERNAME_VISITANTE";
$proto7["m_srcTableName"] = "GE.VISITA";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "USERNAME_VISITADA",
	"m_strTable" => "GE.VISITA",
	"m_srcTableName" => "GE.VISITA"
));

$proto9["m_sql"] = "USERNAME_VISITADA";
$proto9["m_srcTableName"] = "GE.VISITA";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.VISITA",
	"m_srcTableName" => "GE.VISITA"
));

$proto11["m_sql"] = "FEC_CREACION";
$proto11["m_srcTableName"] = "GE.VISITA";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.VISITA",
	"m_srcTableName" => "GE.VISITA"
));

$proto13["m_sql"] = "USUARIO_CREACION";
$proto13["m_srcTableName"] = "GE.VISITA";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.VISITA",
	"m_srcTableName" => "GE.VISITA"
));

$proto15["m_sql"] = "FEC_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.VISITA";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.VISITA",
	"m_srcTableName" => "GE.VISITA"
));

$proto17["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto17["m_srcTableName"] = "GE.VISITA";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "GE.VISITA";
$proto20["m_srcTableName"] = "GE.VISITA";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "FEC_VISITA";
$proto20["m_columns"][] = "USERNAME_VISITANTE";
$proto20["m_columns"][] = "USERNAME_VISITADA";
$proto20["m_columns"][] = "FEC_CREACION";
$proto20["m_columns"][] = "USUARIO_CREACION";
$proto20["m_columns"][] = "FEC_ULTIMA_MOD";
$proto20["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "GE.VISITA";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "GE.VISITA";
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
$proto0["m_srcTableName"]="GE.VISITA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_VISITA = createSqlQuery_GE_VISITA();


	
							
	
$tdataGE_VISITA[".sqlquery"] = $queryData_GE_VISITA;

$tableEvents["GE.VISITA"] = new eventsBase;
$tdataGE_VISITA[".hasEvents"] = false;

?>
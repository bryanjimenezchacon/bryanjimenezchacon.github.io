<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_BEBEDOR = array();	
	$tdataGE_BEBEDOR[".truncateText"] = true;
	$tdataGE_BEBEDOR[".NumberOfChars"] = 80; 
	$tdataGE_BEBEDOR[".ShortName"] = "GE_BEBEDOR";
	$tdataGE_BEBEDOR[".OwnerID"] = "";
	$tdataGE_BEBEDOR[".OriginalTable"] = "GE.BEBEDOR";

//	field labels
$fieldLabelsGE_BEBEDOR = array();
$fieldToolTipsGE_BEBEDOR = array();
$pageTitlesGE_BEBEDOR = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_BEBEDOR["Spanish"] = array();
	$fieldToolTipsGE_BEBEDOR["Spanish"] = array();
	$pageTitlesGE_BEBEDOR["Spanish"] = array();
	$fieldLabelsGE_BEBEDOR["Spanish"]["BEBEDOR_ID"] = "BEBEDOR ID";
	$fieldToolTipsGE_BEBEDOR["Spanish"]["BEBEDOR_ID"] = "";
	$fieldLabelsGE_BEBEDOR["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsGE_BEBEDOR["Spanish"]["TIPO"] = "";
	$fieldLabelsGE_BEBEDOR["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_BEBEDOR["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_BEBEDOR["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_BEBEDOR["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_BEBEDOR["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_BEBEDOR["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_BEBEDOR["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_BEBEDOR["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	if (count($fieldToolTipsGE_BEBEDOR["Spanish"]))
		$tdataGE_BEBEDOR[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_BEBEDOR[""] = array();
	$fieldToolTipsGE_BEBEDOR[""] = array();
	$pageTitlesGE_BEBEDOR[""] = array();
	$fieldLabelsGE_BEBEDOR[""]["BEBEDOR_ID"] = "BEBEDOR ID";
	$fieldToolTipsGE_BEBEDOR[""]["BEBEDOR_ID"] = "";
	if (count($fieldToolTipsGE_BEBEDOR[""]))
		$tdataGE_BEBEDOR[".isUseToolTips"] = true;
}
	
	
	$tdataGE_BEBEDOR[".NCSearch"] = true;



$tdataGE_BEBEDOR[".shortTableName"] = "GE_BEBEDOR";
$tdataGE_BEBEDOR[".nSecOptions"] = 0;
$tdataGE_BEBEDOR[".recsPerRowList"] = 1;
$tdataGE_BEBEDOR[".mainTableOwnerID"] = "";
$tdataGE_BEBEDOR[".moveNext"] = 1;
$tdataGE_BEBEDOR[".nType"] = 0;

$tdataGE_BEBEDOR[".strOriginalTableName"] = "GE.BEBEDOR";




$tdataGE_BEBEDOR[".showAddInPopup"] = false;

$tdataGE_BEBEDOR[".showEditInPopup"] = false;

$tdataGE_BEBEDOR[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_BEBEDOR[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_BEBEDOR[".fieldsForRegister"] = array();

$tdataGE_BEBEDOR[".listAjax"] = false;

	$tdataGE_BEBEDOR[".audit"] = false;

	$tdataGE_BEBEDOR[".locking"] = false;

$tdataGE_BEBEDOR[".edit"] = true;

$tdataGE_BEBEDOR[".list"] = true;

$tdataGE_BEBEDOR[".inlineEdit"] = true;
$tdataGE_BEBEDOR[".inlineAdd"] = true;
$tdataGE_BEBEDOR[".view"] = true;

$tdataGE_BEBEDOR[".import"] = true;

$tdataGE_BEBEDOR[".exportTo"] = true;

$tdataGE_BEBEDOR[".printFriendly"] = true;

$tdataGE_BEBEDOR[".delete"] = true;

$tdataGE_BEBEDOR[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_BEBEDOR[".searchSaving"] = false;
//

$tdataGE_BEBEDOR[".showSearchPanel"] = true;
		$tdataGE_BEBEDOR[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_BEBEDOR[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_BEBEDOR[".isUseAjaxSuggest"] = true;

$tdataGE_BEBEDOR[".rowHighlite"] = true;



$tdataGE_BEBEDOR[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_BEBEDOR[".isUseTimeForSearch"] = false;



$tdataGE_BEBEDOR[".useDetailsPreview"] = true;


$tdataGE_BEBEDOR[".allSearchFields"] = array();
$tdataGE_BEBEDOR[".filterFields"] = array();
$tdataGE_BEBEDOR[".requiredSearchFields"] = array();

$tdataGE_BEBEDOR[".allSearchFields"][] = "BEBEDOR_ID";
	$tdataGE_BEBEDOR[".allSearchFields"][] = "TIPO";
	$tdataGE_BEBEDOR[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_BEBEDOR[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_BEBEDOR[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_BEBEDOR[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	

$tdataGE_BEBEDOR[".googleLikeFields"] = array();
$tdataGE_BEBEDOR[".googleLikeFields"][] = "BEBEDOR_ID";
$tdataGE_BEBEDOR[".googleLikeFields"][] = "TIPO";
$tdataGE_BEBEDOR[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_BEBEDOR[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_BEBEDOR[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_BEBEDOR[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";


$tdataGE_BEBEDOR[".advSearchFields"] = array();
$tdataGE_BEBEDOR[".advSearchFields"][] = "BEBEDOR_ID";
$tdataGE_BEBEDOR[".advSearchFields"][] = "TIPO";
$tdataGE_BEBEDOR[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_BEBEDOR[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_BEBEDOR[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_BEBEDOR[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_BEBEDOR[".tableType"] = "list";

$tdataGE_BEBEDOR[".printerPageOrientation"] = 0;
$tdataGE_BEBEDOR[".nPrinterPageScale"] = 100;

$tdataGE_BEBEDOR[".nPrinterSplitRecords"] = 40;

$tdataGE_BEBEDOR[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_BEBEDOR[".pageSize"] = 20;

$tdataGE_BEBEDOR[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_BEBEDOR[".strOrderBy"] = $tstrOrderBy;

$tdataGE_BEBEDOR[".orderindexes"] = array();

$tdataGE_BEBEDOR[".sqlHead"] = "SELECT BEBEDOR_ID,  TIPO,  FEC_CREACION,  USUARIO_CREACION,  FEC_ULTIMA_MOD,  USUARIO_ULTIMA_MOD";
$tdataGE_BEBEDOR[".sqlFrom"] = "FROM GE.BEBEDOR";
$tdataGE_BEBEDOR[".sqlWhereExpr"] = "";
$tdataGE_BEBEDOR[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_BEBEDOR[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_BEBEDOR[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_BEBEDOR[".highlightSearchResults"] = true;

$tableKeysGE_BEBEDOR = array();
$tableKeysGE_BEBEDOR[] = "BEBEDOR_ID";
$tdataGE_BEBEDOR[".Keys"] = $tableKeysGE_BEBEDOR;

$tdataGE_BEBEDOR[".listFields"] = array();
$tdataGE_BEBEDOR[".listFields"][] = "BEBEDOR_ID";
$tdataGE_BEBEDOR[".listFields"][] = "TIPO";
$tdataGE_BEBEDOR[".listFields"][] = "FEC_CREACION";
$tdataGE_BEBEDOR[".listFields"][] = "USUARIO_CREACION";
$tdataGE_BEBEDOR[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_BEBEDOR[".listFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_BEBEDOR[".hideMobileList"] = array();


$tdataGE_BEBEDOR[".viewFields"] = array();
$tdataGE_BEBEDOR[".viewFields"][] = "BEBEDOR_ID";
$tdataGE_BEBEDOR[".viewFields"][] = "TIPO";
$tdataGE_BEBEDOR[".viewFields"][] = "FEC_CREACION";
$tdataGE_BEBEDOR[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_BEBEDOR[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_BEBEDOR[".viewFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_BEBEDOR[".addFields"] = array();
$tdataGE_BEBEDOR[".addFields"][] = "BEBEDOR_ID";
$tdataGE_BEBEDOR[".addFields"][] = "TIPO";

$tdataGE_BEBEDOR[".inlineAddFields"] = array();
$tdataGE_BEBEDOR[".inlineAddFields"][] = "BEBEDOR_ID";
$tdataGE_BEBEDOR[".inlineAddFields"][] = "TIPO";
$tdataGE_BEBEDOR[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_BEBEDOR[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_BEBEDOR[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_BEBEDOR[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_BEBEDOR[".editFields"] = array();
$tdataGE_BEBEDOR[".editFields"][] = "BEBEDOR_ID";
$tdataGE_BEBEDOR[".editFields"][] = "TIPO";

$tdataGE_BEBEDOR[".inlineEditFields"] = array();
$tdataGE_BEBEDOR[".inlineEditFields"][] = "BEBEDOR_ID";
$tdataGE_BEBEDOR[".inlineEditFields"][] = "TIPO";
$tdataGE_BEBEDOR[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_BEBEDOR[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_BEBEDOR[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_BEBEDOR[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_BEBEDOR[".exportFields"] = array();
$tdataGE_BEBEDOR[".exportFields"][] = "BEBEDOR_ID";
$tdataGE_BEBEDOR[".exportFields"][] = "TIPO";
$tdataGE_BEBEDOR[".exportFields"][] = "FEC_CREACION";
$tdataGE_BEBEDOR[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_BEBEDOR[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_BEBEDOR[".exportFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_BEBEDOR[".importFields"] = array();
$tdataGE_BEBEDOR[".importFields"][] = "BEBEDOR_ID";
$tdataGE_BEBEDOR[".importFields"][] = "TIPO";
$tdataGE_BEBEDOR[".importFields"][] = "FEC_CREACION";
$tdataGE_BEBEDOR[".importFields"][] = "USUARIO_CREACION";
$tdataGE_BEBEDOR[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_BEBEDOR[".importFields"][] = "USUARIO_ULTIMA_MOD";

$tdataGE_BEBEDOR[".printFields"] = array();
$tdataGE_BEBEDOR[".printFields"][] = "BEBEDOR_ID";
$tdataGE_BEBEDOR[".printFields"][] = "TIPO";
$tdataGE_BEBEDOR[".printFields"][] = "FEC_CREACION";
$tdataGE_BEBEDOR[".printFields"][] = "USUARIO_CREACION";
$tdataGE_BEBEDOR[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_BEBEDOR[".printFields"][] = "USUARIO_ULTIMA_MOD";

//	BEBEDOR_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "BEBEDOR_ID";
	$fdata["GoodName"] = "BEBEDOR_ID";
	$fdata["ownerTable"] = "GE.BEBEDOR";
	$fdata["Label"] = GetFieldLabel("GE_BEBEDOR","BEBEDOR_ID"); 
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
	
		$fdata["strField"] = "BEBEDOR_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BEBEDOR_ID";
	
		
		
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

	

	
	$tdataGE_BEBEDOR["BEBEDOR_ID"] = $fdata;
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "GE.BEBEDOR";
	$fdata["Label"] = GetFieldLabel("GE_BEBEDOR","TIPO"); 
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

	

	
	$tdataGE_BEBEDOR["TIPO"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.BEBEDOR";
	$fdata["Label"] = GetFieldLabel("GE_BEBEDOR","FEC_CREACION"); 
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

	

	
	$tdataGE_BEBEDOR["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.BEBEDOR";
	$fdata["Label"] = GetFieldLabel("GE_BEBEDOR","USUARIO_CREACION"); 
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

	

	
	$tdataGE_BEBEDOR["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.BEBEDOR";
	$fdata["Label"] = GetFieldLabel("GE_BEBEDOR","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_BEBEDOR["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.BEBEDOR";
	$fdata["Label"] = GetFieldLabel("GE_BEBEDOR","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_BEBEDOR["USUARIO_ULTIMA_MOD"] = $fdata;

	
$tables_data["GE.BEBEDOR"]=&$tdataGE_BEBEDOR;
$field_labels["GE_BEBEDOR"] = &$fieldLabelsGE_BEBEDOR;
$fieldToolTips["GE.BEBEDOR"] = &$fieldToolTipsGE_BEBEDOR;
$page_titles["GE_BEBEDOR"] = &$pageTitlesGE_BEBEDOR;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.BEBEDOR"] = array();
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
			
	$detailsTablesData["GE.BEBEDOR"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.BEBEDOR"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.BEBEDOR"][$dIndex]["masterKeys"][]="BEBEDOR_ID";

				$detailsTablesData["GE.BEBEDOR"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.BEBEDOR"][$dIndex]["detailKeys"][]="BEBEDOR_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.BEBEDOR"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_BEBEDOR()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "BEBEDOR_ID,  TIPO,  FEC_CREACION,  USUARIO_CREACION,  FEC_ULTIMA_MOD,  USUARIO_ULTIMA_MOD";
$proto0["m_strFrom"] = "FROM GE.BEBEDOR";
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
	"m_strName" => "BEBEDOR_ID",
	"m_strTable" => "GE.BEBEDOR",
	"m_srcTableName" => "GE.BEBEDOR"
));

$proto5["m_sql"] = "BEBEDOR_ID";
$proto5["m_srcTableName"] = "GE.BEBEDOR";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "GE.BEBEDOR",
	"m_srcTableName" => "GE.BEBEDOR"
));

$proto7["m_sql"] = "TIPO";
$proto7["m_srcTableName"] = "GE.BEBEDOR";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.BEBEDOR",
	"m_srcTableName" => "GE.BEBEDOR"
));

$proto9["m_sql"] = "FEC_CREACION";
$proto9["m_srcTableName"] = "GE.BEBEDOR";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.BEBEDOR",
	"m_srcTableName" => "GE.BEBEDOR"
));

$proto11["m_sql"] = "USUARIO_CREACION";
$proto11["m_srcTableName"] = "GE.BEBEDOR";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.BEBEDOR",
	"m_srcTableName" => "GE.BEBEDOR"
));

$proto13["m_sql"] = "FEC_ULTIMA_MOD";
$proto13["m_srcTableName"] = "GE.BEBEDOR";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.BEBEDOR",
	"m_srcTableName" => "GE.BEBEDOR"
));

$proto15["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto15["m_srcTableName"] = "GE.BEBEDOR";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.BEBEDOR";
$proto18["m_srcTableName"] = "GE.BEBEDOR";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "BEBEDOR_ID";
$proto18["m_columns"][] = "TIPO";
$proto18["m_columns"][] = "FEC_CREACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "FEC_ULTIMA_MOD";
$proto18["m_columns"][] = "USUARIO_ULTIMA_MOD";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.BEBEDOR";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.BEBEDOR";
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
$proto0["m_srcTableName"]="GE.BEBEDOR";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_BEBEDOR = createSqlQuery_GE_BEBEDOR();


	
						
	
$tdataGE_BEBEDOR[".sqlquery"] = $queryData_GE_BEBEDOR;

$tableEvents["GE.BEBEDOR"] = new eventsBase;
$tdataGE_BEBEDOR[".hasEvents"] = false;

?>
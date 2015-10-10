<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_TIPO_RELACION = array();	
	$tdataGE_TIPO_RELACION[".truncateText"] = true;
	$tdataGE_TIPO_RELACION[".NumberOfChars"] = 80; 
	$tdataGE_TIPO_RELACION[".ShortName"] = "GE_TIPO_RELACION";
	$tdataGE_TIPO_RELACION[".OwnerID"] = "";
	$tdataGE_TIPO_RELACION[".OriginalTable"] = "GE.TIPO_RELACION";

//	field labels
$fieldLabelsGE_TIPO_RELACION = array();
$fieldToolTipsGE_TIPO_RELACION = array();
$pageTitlesGE_TIPO_RELACION = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_TIPO_RELACION["Spanish"] = array();
	$fieldToolTipsGE_TIPO_RELACION["Spanish"] = array();
	$pageTitlesGE_TIPO_RELACION["Spanish"] = array();
	$fieldLabelsGE_TIPO_RELACION["Spanish"]["TIPO_RELACION_ID"] = "TIPO RELACION ID";
	$fieldToolTipsGE_TIPO_RELACION["Spanish"]["TIPO_RELACION_ID"] = "";
	$fieldLabelsGE_TIPO_RELACION["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_TIPO_RELACION["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGE_TIPO_RELACION["Spanish"]["FECHA_CREACION"] = "FECHA CREACION";
	$fieldToolTipsGE_TIPO_RELACION["Spanish"]["FECHA_CREACION"] = "";
	$fieldLabelsGE_TIPO_RELACION["Spanish"]["FECHA_MODIFICACION"] = "FECHA MODIFICACION";
	$fieldToolTipsGE_TIPO_RELACION["Spanish"]["FECHA_MODIFICACION"] = "";
	$fieldLabelsGE_TIPO_RELACION["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_TIPO_RELACION["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_TIPO_RELACION["Spanish"]["USUARIO_MODIFICACION"] = "USUARIO MODIFICACION";
	$fieldToolTipsGE_TIPO_RELACION["Spanish"]["USUARIO_MODIFICACION"] = "";
	if (count($fieldToolTipsGE_TIPO_RELACION["Spanish"]))
		$tdataGE_TIPO_RELACION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_TIPO_RELACION[""] = array();
	$fieldToolTipsGE_TIPO_RELACION[""] = array();
	$pageTitlesGE_TIPO_RELACION[""] = array();
	$fieldLabelsGE_TIPO_RELACION[""]["TIPO_RELACION_ID"] = "TIPO RELACION ID";
	$fieldToolTipsGE_TIPO_RELACION[""]["TIPO_RELACION_ID"] = "";
	$fieldLabelsGE_TIPO_RELACION[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_TIPO_RELACION[""]["NOMBRE"] = "";
	$fieldLabelsGE_TIPO_RELACION[""]["FECHA_CREACION"] = "FECHA CREACION";
	$fieldToolTipsGE_TIPO_RELACION[""]["FECHA_CREACION"] = "";
	$fieldLabelsGE_TIPO_RELACION[""]["FECHA_MODIFICACION"] = "FECHA MODIFICACION";
	$fieldToolTipsGE_TIPO_RELACION[""]["FECHA_MODIFICACION"] = "";
	$fieldLabelsGE_TIPO_RELACION[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_TIPO_RELACION[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_TIPO_RELACION[""]["USUARIO_MODIFICACION"] = "USUARIO MODIFICACION";
	$fieldToolTipsGE_TIPO_RELACION[""]["USUARIO_MODIFICACION"] = "";
	if (count($fieldToolTipsGE_TIPO_RELACION[""]))
		$tdataGE_TIPO_RELACION[".isUseToolTips"] = true;
}
	
	
	$tdataGE_TIPO_RELACION[".NCSearch"] = true;



$tdataGE_TIPO_RELACION[".shortTableName"] = "GE_TIPO_RELACION";
$tdataGE_TIPO_RELACION[".nSecOptions"] = 0;
$tdataGE_TIPO_RELACION[".recsPerRowList"] = 1;
$tdataGE_TIPO_RELACION[".mainTableOwnerID"] = "";
$tdataGE_TIPO_RELACION[".moveNext"] = 1;
$tdataGE_TIPO_RELACION[".nType"] = 0;

$tdataGE_TIPO_RELACION[".strOriginalTableName"] = "GE.TIPO_RELACION";




$tdataGE_TIPO_RELACION[".showAddInPopup"] = false;

$tdataGE_TIPO_RELACION[".showEditInPopup"] = false;

$tdataGE_TIPO_RELACION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_TIPO_RELACION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_TIPO_RELACION[".fieldsForRegister"] = array();

$tdataGE_TIPO_RELACION[".listAjax"] = false;

	$tdataGE_TIPO_RELACION[".audit"] = false;

	$tdataGE_TIPO_RELACION[".locking"] = false;

$tdataGE_TIPO_RELACION[".edit"] = true;

$tdataGE_TIPO_RELACION[".list"] = true;

$tdataGE_TIPO_RELACION[".inlineEdit"] = true;
$tdataGE_TIPO_RELACION[".inlineAdd"] = true;
$tdataGE_TIPO_RELACION[".view"] = true;

$tdataGE_TIPO_RELACION[".import"] = true;

$tdataGE_TIPO_RELACION[".exportTo"] = true;

$tdataGE_TIPO_RELACION[".printFriendly"] = true;

$tdataGE_TIPO_RELACION[".delete"] = true;

$tdataGE_TIPO_RELACION[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_TIPO_RELACION[".searchSaving"] = false;
//

$tdataGE_TIPO_RELACION[".showSearchPanel"] = true;
		$tdataGE_TIPO_RELACION[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_TIPO_RELACION[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_TIPO_RELACION[".isUseAjaxSuggest"] = true;

$tdataGE_TIPO_RELACION[".rowHighlite"] = true;



$tdataGE_TIPO_RELACION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_TIPO_RELACION[".isUseTimeForSearch"] = false;



$tdataGE_TIPO_RELACION[".useDetailsPreview"] = true;


$tdataGE_TIPO_RELACION[".allSearchFields"] = array();
$tdataGE_TIPO_RELACION[".filterFields"] = array();
$tdataGE_TIPO_RELACION[".requiredSearchFields"] = array();

$tdataGE_TIPO_RELACION[".allSearchFields"][] = "TIPO_RELACION_ID";
	$tdataGE_TIPO_RELACION[".allSearchFields"][] = "NOMBRE";
	$tdataGE_TIPO_RELACION[".allSearchFields"][] = "FECHA_CREACION";
	$tdataGE_TIPO_RELACION[".allSearchFields"][] = "FECHA_MODIFICACION";
	$tdataGE_TIPO_RELACION[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_TIPO_RELACION[".allSearchFields"][] = "USUARIO_MODIFICACION";
	

$tdataGE_TIPO_RELACION[".googleLikeFields"] = array();
$tdataGE_TIPO_RELACION[".googleLikeFields"][] = "TIPO_RELACION_ID";
$tdataGE_TIPO_RELACION[".googleLikeFields"][] = "NOMBRE";
$tdataGE_TIPO_RELACION[".googleLikeFields"][] = "FECHA_CREACION";
$tdataGE_TIPO_RELACION[".googleLikeFields"][] = "FECHA_MODIFICACION";
$tdataGE_TIPO_RELACION[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_TIPO_RELACION[".googleLikeFields"][] = "USUARIO_MODIFICACION";


$tdataGE_TIPO_RELACION[".advSearchFields"] = array();
$tdataGE_TIPO_RELACION[".advSearchFields"][] = "TIPO_RELACION_ID";
$tdataGE_TIPO_RELACION[".advSearchFields"][] = "NOMBRE";
$tdataGE_TIPO_RELACION[".advSearchFields"][] = "FECHA_CREACION";
$tdataGE_TIPO_RELACION[".advSearchFields"][] = "FECHA_MODIFICACION";
$tdataGE_TIPO_RELACION[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_TIPO_RELACION[".advSearchFields"][] = "USUARIO_MODIFICACION";

$tdataGE_TIPO_RELACION[".tableType"] = "list";

$tdataGE_TIPO_RELACION[".printerPageOrientation"] = 0;
$tdataGE_TIPO_RELACION[".nPrinterPageScale"] = 100;

$tdataGE_TIPO_RELACION[".nPrinterSplitRecords"] = 40;

$tdataGE_TIPO_RELACION[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_TIPO_RELACION[".pageSize"] = 20;

$tdataGE_TIPO_RELACION[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_TIPO_RELACION[".strOrderBy"] = $tstrOrderBy;

$tdataGE_TIPO_RELACION[".orderindexes"] = array();

$tdataGE_TIPO_RELACION[".sqlHead"] = "SELECT TIPO_RELACION_ID,   NOMBRE,   FECHA_CREACION,   FECHA_MODIFICACION,   USUARIO_CREACION,   USUARIO_MODIFICACION";
$tdataGE_TIPO_RELACION[".sqlFrom"] = "FROM GE.TIPO_RELACION";
$tdataGE_TIPO_RELACION[".sqlWhereExpr"] = "";
$tdataGE_TIPO_RELACION[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_TIPO_RELACION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_TIPO_RELACION[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_TIPO_RELACION[".highlightSearchResults"] = true;

$tableKeysGE_TIPO_RELACION = array();
$tableKeysGE_TIPO_RELACION[] = "TIPO_RELACION_ID";
$tdataGE_TIPO_RELACION[".Keys"] = $tableKeysGE_TIPO_RELACION;

$tdataGE_TIPO_RELACION[".listFields"] = array();
$tdataGE_TIPO_RELACION[".listFields"][] = "TIPO_RELACION_ID";
$tdataGE_TIPO_RELACION[".listFields"][] = "NOMBRE";
$tdataGE_TIPO_RELACION[".listFields"][] = "FECHA_CREACION";
$tdataGE_TIPO_RELACION[".listFields"][] = "FECHA_MODIFICACION";
$tdataGE_TIPO_RELACION[".listFields"][] = "USUARIO_CREACION";
$tdataGE_TIPO_RELACION[".listFields"][] = "USUARIO_MODIFICACION";

$tdataGE_TIPO_RELACION[".hideMobileList"] = array();


$tdataGE_TIPO_RELACION[".viewFields"] = array();
$tdataGE_TIPO_RELACION[".viewFields"][] = "TIPO_RELACION_ID";
$tdataGE_TIPO_RELACION[".viewFields"][] = "NOMBRE";
$tdataGE_TIPO_RELACION[".viewFields"][] = "FECHA_CREACION";
$tdataGE_TIPO_RELACION[".viewFields"][] = "FECHA_MODIFICACION";
$tdataGE_TIPO_RELACION[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_TIPO_RELACION[".viewFields"][] = "USUARIO_MODIFICACION";

$tdataGE_TIPO_RELACION[".addFields"] = array();
$tdataGE_TIPO_RELACION[".addFields"][] = "TIPO_RELACION_ID";
$tdataGE_TIPO_RELACION[".addFields"][] = "NOMBRE";

$tdataGE_TIPO_RELACION[".inlineAddFields"] = array();
$tdataGE_TIPO_RELACION[".inlineAddFields"][] = "TIPO_RELACION_ID";
$tdataGE_TIPO_RELACION[".inlineAddFields"][] = "NOMBRE";
$tdataGE_TIPO_RELACION[".inlineAddFields"][] = "FECHA_CREACION";
$tdataGE_TIPO_RELACION[".inlineAddFields"][] = "FECHA_MODIFICACION";
$tdataGE_TIPO_RELACION[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_TIPO_RELACION[".inlineAddFields"][] = "USUARIO_MODIFICACION";

$tdataGE_TIPO_RELACION[".editFields"] = array();
$tdataGE_TIPO_RELACION[".editFields"][] = "TIPO_RELACION_ID";
$tdataGE_TIPO_RELACION[".editFields"][] = "NOMBRE";

$tdataGE_TIPO_RELACION[".inlineEditFields"] = array();
$tdataGE_TIPO_RELACION[".inlineEditFields"][] = "TIPO_RELACION_ID";
$tdataGE_TIPO_RELACION[".inlineEditFields"][] = "NOMBRE";
$tdataGE_TIPO_RELACION[".inlineEditFields"][] = "FECHA_CREACION";
$tdataGE_TIPO_RELACION[".inlineEditFields"][] = "FECHA_MODIFICACION";
$tdataGE_TIPO_RELACION[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_TIPO_RELACION[".inlineEditFields"][] = "USUARIO_MODIFICACION";

$tdataGE_TIPO_RELACION[".exportFields"] = array();
$tdataGE_TIPO_RELACION[".exportFields"][] = "TIPO_RELACION_ID";
$tdataGE_TIPO_RELACION[".exportFields"][] = "NOMBRE";
$tdataGE_TIPO_RELACION[".exportFields"][] = "FECHA_CREACION";
$tdataGE_TIPO_RELACION[".exportFields"][] = "FECHA_MODIFICACION";
$tdataGE_TIPO_RELACION[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_TIPO_RELACION[".exportFields"][] = "USUARIO_MODIFICACION";

$tdataGE_TIPO_RELACION[".importFields"] = array();
$tdataGE_TIPO_RELACION[".importFields"][] = "TIPO_RELACION_ID";
$tdataGE_TIPO_RELACION[".importFields"][] = "NOMBRE";
$tdataGE_TIPO_RELACION[".importFields"][] = "FECHA_CREACION";
$tdataGE_TIPO_RELACION[".importFields"][] = "FECHA_MODIFICACION";
$tdataGE_TIPO_RELACION[".importFields"][] = "USUARIO_CREACION";
$tdataGE_TIPO_RELACION[".importFields"][] = "USUARIO_MODIFICACION";

$tdataGE_TIPO_RELACION[".printFields"] = array();
$tdataGE_TIPO_RELACION[".printFields"][] = "TIPO_RELACION_ID";
$tdataGE_TIPO_RELACION[".printFields"][] = "NOMBRE";
$tdataGE_TIPO_RELACION[".printFields"][] = "FECHA_CREACION";
$tdataGE_TIPO_RELACION[".printFields"][] = "FECHA_MODIFICACION";
$tdataGE_TIPO_RELACION[".printFields"][] = "USUARIO_CREACION";
$tdataGE_TIPO_RELACION[".printFields"][] = "USUARIO_MODIFICACION";

//	TIPO_RELACION_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TIPO_RELACION_ID";
	$fdata["GoodName"] = "TIPO_RELACION_ID";
	$fdata["ownerTable"] = "GE.TIPO_RELACION";
	$fdata["Label"] = GetFieldLabel("GE_TIPO_RELACION","TIPO_RELACION_ID"); 
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
	
		$fdata["strField"] = "TIPO_RELACION_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPO_RELACION_ID";
	
		
		
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

	

	
	$tdataGE_TIPO_RELACION["TIPO_RELACION_ID"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "GE.TIPO_RELACION";
	$fdata["Label"] = GetFieldLabel("GE_TIPO_RELACION","NOMBRE"); 
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

	

	
	$tdataGE_TIPO_RELACION["NOMBRE"] = $fdata;
//	FECHA_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FECHA_CREACION";
	$fdata["GoodName"] = "FECHA_CREACION";
	$fdata["ownerTable"] = "GE.TIPO_RELACION";
	$fdata["Label"] = GetFieldLabel("GE_TIPO_RELACION","FECHA_CREACION"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FECHA_CREACION"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_CREACION";
	
		
		
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

	

	
	$tdataGE_TIPO_RELACION["FECHA_CREACION"] = $fdata;
//	FECHA_MODIFICACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FECHA_MODIFICACION";
	$fdata["GoodName"] = "FECHA_MODIFICACION";
	$fdata["ownerTable"] = "GE.TIPO_RELACION";
	$fdata["Label"] = GetFieldLabel("GE_TIPO_RELACION","FECHA_MODIFICACION"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FECHA_MODIFICACION"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_MODIFICACION";
	
		
		
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

	

	
	$tdataGE_TIPO_RELACION["FECHA_MODIFICACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.TIPO_RELACION";
	$fdata["Label"] = GetFieldLabel("GE_TIPO_RELACION","USUARIO_CREACION"); 
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

	

	
	$tdataGE_TIPO_RELACION["USUARIO_CREACION"] = $fdata;
//	USUARIO_MODIFICACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USUARIO_MODIFICACION";
	$fdata["GoodName"] = "USUARIO_MODIFICACION";
	$fdata["ownerTable"] = "GE.TIPO_RELACION";
	$fdata["Label"] = GetFieldLabel("GE_TIPO_RELACION","USUARIO_MODIFICACION"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "USUARIO_MODIFICACION"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USUARIO_MODIFICACION";
	
		
		
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

	

	
	$tdataGE_TIPO_RELACION["USUARIO_MODIFICACION"] = $fdata;

	
$tables_data["GE.TIPO_RELACION"]=&$tdataGE_TIPO_RELACION;
$field_labels["GE_TIPO_RELACION"] = &$fieldLabelsGE_TIPO_RELACION;
$fieldToolTips["GE.TIPO_RELACION"] = &$fieldToolTipsGE_TIPO_RELACION;
$page_titles["GE_TIPO_RELACION"] = &$pageTitlesGE_TIPO_RELACION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.TIPO_RELACION"] = array();
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
			
	$detailsTablesData["GE.TIPO_RELACION"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.TIPO_RELACION"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.TIPO_RELACION"][$dIndex]["masterKeys"][]="TIPO_RELACION_ID";

				$detailsTablesData["GE.TIPO_RELACION"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.TIPO_RELACION"][$dIndex]["detailKeys"][]="TIPO_RELACION_ID";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.TIPO_RELACION"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_TIPO_RELACION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TIPO_RELACION_ID,   NOMBRE,   FECHA_CREACION,   FECHA_MODIFICACION,   USUARIO_CREACION,   USUARIO_MODIFICACION";
$proto0["m_strFrom"] = "FROM GE.TIPO_RELACION";
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
	"m_strName" => "TIPO_RELACION_ID",
	"m_strTable" => "GE.TIPO_RELACION",
	"m_srcTableName" => "GE.TIPO_RELACION"
));

$proto5["m_sql"] = "TIPO_RELACION_ID";
$proto5["m_srcTableName"] = "GE.TIPO_RELACION";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "GE.TIPO_RELACION",
	"m_srcTableName" => "GE.TIPO_RELACION"
));

$proto7["m_sql"] = "NOMBRE";
$proto7["m_srcTableName"] = "GE.TIPO_RELACION";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_CREACION",
	"m_strTable" => "GE.TIPO_RELACION",
	"m_srcTableName" => "GE.TIPO_RELACION"
));

$proto9["m_sql"] = "FECHA_CREACION";
$proto9["m_srcTableName"] = "GE.TIPO_RELACION";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_MODIFICACION",
	"m_strTable" => "GE.TIPO_RELACION",
	"m_srcTableName" => "GE.TIPO_RELACION"
));

$proto11["m_sql"] = "FECHA_MODIFICACION";
$proto11["m_srcTableName"] = "GE.TIPO_RELACION";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.TIPO_RELACION",
	"m_srcTableName" => "GE.TIPO_RELACION"
));

$proto13["m_sql"] = "USUARIO_CREACION";
$proto13["m_srcTableName"] = "GE.TIPO_RELACION";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_MODIFICACION",
	"m_strTable" => "GE.TIPO_RELACION",
	"m_srcTableName" => "GE.TIPO_RELACION"
));

$proto15["m_sql"] = "USUARIO_MODIFICACION";
$proto15["m_srcTableName"] = "GE.TIPO_RELACION";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "GE.TIPO_RELACION";
$proto18["m_srcTableName"] = "GE.TIPO_RELACION";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "TIPO_RELACION_ID";
$proto18["m_columns"][] = "NOMBRE";
$proto18["m_columns"][] = "FECHA_CREACION";
$proto18["m_columns"][] = "FECHA_MODIFICACION";
$proto18["m_columns"][] = "USUARIO_CREACION";
$proto18["m_columns"][] = "USUARIO_MODIFICACION";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "GE.TIPO_RELACION";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GE.TIPO_RELACION";
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
$proto0["m_srcTableName"]="GE.TIPO_RELACION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_TIPO_RELACION = createSqlQuery_GE_TIPO_RELACION();


	
						
	
$tdataGE_TIPO_RELACION[".sqlquery"] = $queryData_GE_TIPO_RELACION;

$tableEvents["GE.TIPO_RELACION"] = new eventsBase;
$tdataGE_TIPO_RELACION[".hasEvents"] = false;

?>
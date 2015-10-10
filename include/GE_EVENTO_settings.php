<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_EVENTO = array();	
	$tdataGE_EVENTO[".truncateText"] = true;
	$tdataGE_EVENTO[".NumberOfChars"] = 80; 
	$tdataGE_EVENTO[".ShortName"] = "GE_EVENTO";
	$tdataGE_EVENTO[".OwnerID"] = "";
	$tdataGE_EVENTO[".OriginalTable"] = "GE.EVENTO";

//	field labels
$fieldLabelsGE_EVENTO = array();
$fieldToolTipsGE_EVENTO = array();
$pageTitlesGE_EVENTO = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_EVENTO["Spanish"] = array();
	$fieldToolTipsGE_EVENTO["Spanish"] = array();
	$pageTitlesGE_EVENTO["Spanish"] = array();
	$fieldLabelsGE_EVENTO["Spanish"]["EVENTO_ID"] = "EVENTO ID";
	$fieldToolTipsGE_EVENTO["Spanish"]["EVENTO_ID"] = "";
	$fieldLabelsGE_EVENTO["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_EVENTO["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGE_EVENTO["Spanish"]["FECHA_HORA"] = "FECHA HORA";
	$fieldToolTipsGE_EVENTO["Spanish"]["FECHA_HORA"] = "";
	$fieldLabelsGE_EVENTO["Spanish"]["LUGAR"] = "LUGAR";
	$fieldToolTipsGE_EVENTO["Spanish"]["LUGAR"] = "";
	$fieldLabelsGE_EVENTO["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsGE_EVENTO["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelsGE_EVENTO["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_EVENTO["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_EVENTO["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_EVENTO["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_EVENTO["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_EVENTO["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_EVENTO["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_EVENTO["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	$fieldLabelsGE_EVENTO["Spanish"]["CIUDAD"] = "CIUDAD";
	$fieldToolTipsGE_EVENTO["Spanish"]["CIUDAD"] = "";
	if (count($fieldToolTipsGE_EVENTO["Spanish"]))
		$tdataGE_EVENTO[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_EVENTO[""] = array();
	$fieldToolTipsGE_EVENTO[""] = array();
	$pageTitlesGE_EVENTO[""] = array();
	$fieldLabelsGE_EVENTO[""]["EVENTO_ID"] = "EVENTO ID";
	$fieldToolTipsGE_EVENTO[""]["EVENTO_ID"] = "";
	$fieldLabelsGE_EVENTO[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_EVENTO[""]["NOMBRE"] = "";
	$fieldLabelsGE_EVENTO[""]["FECHA_HORA"] = "FECHA HORA";
	$fieldToolTipsGE_EVENTO[""]["FECHA_HORA"] = "";
	$fieldLabelsGE_EVENTO[""]["LUGAR"] = "LUGAR";
	$fieldToolTipsGE_EVENTO[""]["LUGAR"] = "";
	$fieldLabelsGE_EVENTO[""]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsGE_EVENTO[""]["DESCRIPCION"] = "";
	$fieldLabelsGE_EVENTO[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_EVENTO[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_EVENTO[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_EVENTO[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_EVENTO[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_EVENTO[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_EVENTO[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_EVENTO[""]["USUARIO_ULTIMA_MOD"] = "";
	$fieldLabelsGE_EVENTO[""]["CIUDAD"] = "CIUDAD";
	$fieldToolTipsGE_EVENTO[""]["CIUDAD"] = "";
	if (count($fieldToolTipsGE_EVENTO[""]))
		$tdataGE_EVENTO[".isUseToolTips"] = true;
}
	
	
	$tdataGE_EVENTO[".NCSearch"] = true;



$tdataGE_EVENTO[".shortTableName"] = "GE_EVENTO";
$tdataGE_EVENTO[".nSecOptions"] = 0;
$tdataGE_EVENTO[".recsPerRowList"] = 1;
$tdataGE_EVENTO[".mainTableOwnerID"] = "";
$tdataGE_EVENTO[".moveNext"] = 1;
$tdataGE_EVENTO[".nType"] = 0;

$tdataGE_EVENTO[".strOriginalTableName"] = "GE.EVENTO";




$tdataGE_EVENTO[".showAddInPopup"] = false;

$tdataGE_EVENTO[".showEditInPopup"] = false;

$tdataGE_EVENTO[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_EVENTO[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_EVENTO[".fieldsForRegister"] = array();

$tdataGE_EVENTO[".listAjax"] = false;

	$tdataGE_EVENTO[".audit"] = false;

	$tdataGE_EVENTO[".locking"] = false;

$tdataGE_EVENTO[".edit"] = true;

$tdataGE_EVENTO[".list"] = true;

$tdataGE_EVENTO[".inlineEdit"] = true;
$tdataGE_EVENTO[".inlineAdd"] = true;
$tdataGE_EVENTO[".view"] = true;

$tdataGE_EVENTO[".import"] = true;

$tdataGE_EVENTO[".exportTo"] = true;

$tdataGE_EVENTO[".printFriendly"] = true;

$tdataGE_EVENTO[".delete"] = true;

$tdataGE_EVENTO[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_EVENTO[".searchSaving"] = false;
//

$tdataGE_EVENTO[".showSearchPanel"] = true;
		$tdataGE_EVENTO[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_EVENTO[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_EVENTO[".isUseAjaxSuggest"] = true;

$tdataGE_EVENTO[".rowHighlite"] = true;



$tdataGE_EVENTO[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_EVENTO[".isUseTimeForSearch"] = false;





$tdataGE_EVENTO[".allSearchFields"] = array();
$tdataGE_EVENTO[".filterFields"] = array();
$tdataGE_EVENTO[".requiredSearchFields"] = array();

$tdataGE_EVENTO[".allSearchFields"][] = "EVENTO_ID";
	$tdataGE_EVENTO[".allSearchFields"][] = "NOMBRE";
	$tdataGE_EVENTO[".allSearchFields"][] = "FECHA_HORA";
	$tdataGE_EVENTO[".allSearchFields"][] = "LUGAR";
	$tdataGE_EVENTO[".allSearchFields"][] = "DESCRIPCION";
	$tdataGE_EVENTO[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_EVENTO[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_EVENTO[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_EVENTO[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	$tdataGE_EVENTO[".allSearchFields"][] = "CIUDAD";
	

$tdataGE_EVENTO[".googleLikeFields"] = array();
$tdataGE_EVENTO[".googleLikeFields"][] = "EVENTO_ID";
$tdataGE_EVENTO[".googleLikeFields"][] = "NOMBRE";
$tdataGE_EVENTO[".googleLikeFields"][] = "FECHA_HORA";
$tdataGE_EVENTO[".googleLikeFields"][] = "LUGAR";
$tdataGE_EVENTO[".googleLikeFields"][] = "DESCRIPCION";
$tdataGE_EVENTO[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_EVENTO[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_EVENTO[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EVENTO[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_EVENTO[".googleLikeFields"][] = "CIUDAD";


$tdataGE_EVENTO[".advSearchFields"] = array();
$tdataGE_EVENTO[".advSearchFields"][] = "EVENTO_ID";
$tdataGE_EVENTO[".advSearchFields"][] = "NOMBRE";
$tdataGE_EVENTO[".advSearchFields"][] = "FECHA_HORA";
$tdataGE_EVENTO[".advSearchFields"][] = "LUGAR";
$tdataGE_EVENTO[".advSearchFields"][] = "DESCRIPCION";
$tdataGE_EVENTO[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_EVENTO[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_EVENTO[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EVENTO[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_EVENTO[".advSearchFields"][] = "CIUDAD";

$tdataGE_EVENTO[".tableType"] = "list";

$tdataGE_EVENTO[".printerPageOrientation"] = 0;
$tdataGE_EVENTO[".nPrinterPageScale"] = 100;

$tdataGE_EVENTO[".nPrinterSplitRecords"] = 40;

$tdataGE_EVENTO[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_EVENTO[".pageSize"] = 20;

$tdataGE_EVENTO[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_EVENTO[".strOrderBy"] = $tstrOrderBy;

$tdataGE_EVENTO[".orderindexes"] = array();

$tdataGE_EVENTO[".sqlHead"] = "SELECT EVENTO_ID,  NOMBRE,  FECHA_HORA,  LUGAR,  DESCRIPCION,  FEC_CREACION,  USUARIO_CREACION,  FEC_ULTIMA_MOD,  USUARIO_ULTIMA_MOD,  CIUDAD";
$tdataGE_EVENTO[".sqlFrom"] = "FROM GE.EVENTO";
$tdataGE_EVENTO[".sqlWhereExpr"] = "";
$tdataGE_EVENTO[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_EVENTO[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_EVENTO[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_EVENTO[".highlightSearchResults"] = true;

$tableKeysGE_EVENTO = array();
$tableKeysGE_EVENTO[] = "EVENTO_ID";
$tdataGE_EVENTO[".Keys"] = $tableKeysGE_EVENTO;

$tdataGE_EVENTO[".listFields"] = array();
$tdataGE_EVENTO[".listFields"][] = "EVENTO_ID";
$tdataGE_EVENTO[".listFields"][] = "NOMBRE";
$tdataGE_EVENTO[".listFields"][] = "FECHA_HORA";
$tdataGE_EVENTO[".listFields"][] = "LUGAR";
$tdataGE_EVENTO[".listFields"][] = "DESCRIPCION";
$tdataGE_EVENTO[".listFields"][] = "FEC_CREACION";
$tdataGE_EVENTO[".listFields"][] = "USUARIO_CREACION";
$tdataGE_EVENTO[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EVENTO[".listFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_EVENTO[".listFields"][] = "CIUDAD";

$tdataGE_EVENTO[".hideMobileList"] = array();


$tdataGE_EVENTO[".viewFields"] = array();
$tdataGE_EVENTO[".viewFields"][] = "EVENTO_ID";
$tdataGE_EVENTO[".viewFields"][] = "NOMBRE";
$tdataGE_EVENTO[".viewFields"][] = "FECHA_HORA";
$tdataGE_EVENTO[".viewFields"][] = "LUGAR";
$tdataGE_EVENTO[".viewFields"][] = "DESCRIPCION";
$tdataGE_EVENTO[".viewFields"][] = "FEC_CREACION";
$tdataGE_EVENTO[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_EVENTO[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EVENTO[".viewFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_EVENTO[".viewFields"][] = "CIUDAD";

$tdataGE_EVENTO[".addFields"] = array();
$tdataGE_EVENTO[".addFields"][] = "EVENTO_ID";
$tdataGE_EVENTO[".addFields"][] = "NOMBRE";
$tdataGE_EVENTO[".addFields"][] = "FECHA_HORA";
$tdataGE_EVENTO[".addFields"][] = "LUGAR";
$tdataGE_EVENTO[".addFields"][] = "DESCRIPCION";
$tdataGE_EVENTO[".addFields"][] = "CIUDAD";

$tdataGE_EVENTO[".inlineAddFields"] = array();
$tdataGE_EVENTO[".inlineAddFields"][] = "EVENTO_ID";
$tdataGE_EVENTO[".inlineAddFields"][] = "NOMBRE";
$tdataGE_EVENTO[".inlineAddFields"][] = "FECHA_HORA";
$tdataGE_EVENTO[".inlineAddFields"][] = "LUGAR";
$tdataGE_EVENTO[".inlineAddFields"][] = "DESCRIPCION";
$tdataGE_EVENTO[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_EVENTO[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_EVENTO[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EVENTO[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_EVENTO[".inlineAddFields"][] = "CIUDAD";

$tdataGE_EVENTO[".editFields"] = array();
$tdataGE_EVENTO[".editFields"][] = "EVENTO_ID";
$tdataGE_EVENTO[".editFields"][] = "NOMBRE";
$tdataGE_EVENTO[".editFields"][] = "FECHA_HORA";
$tdataGE_EVENTO[".editFields"][] = "LUGAR";
$tdataGE_EVENTO[".editFields"][] = "DESCRIPCION";
$tdataGE_EVENTO[".editFields"][] = "CIUDAD";

$tdataGE_EVENTO[".inlineEditFields"] = array();
$tdataGE_EVENTO[".inlineEditFields"][] = "EVENTO_ID";
$tdataGE_EVENTO[".inlineEditFields"][] = "NOMBRE";
$tdataGE_EVENTO[".inlineEditFields"][] = "FECHA_HORA";
$tdataGE_EVENTO[".inlineEditFields"][] = "LUGAR";
$tdataGE_EVENTO[".inlineEditFields"][] = "DESCRIPCION";
$tdataGE_EVENTO[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_EVENTO[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_EVENTO[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EVENTO[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_EVENTO[".inlineEditFields"][] = "CIUDAD";

$tdataGE_EVENTO[".exportFields"] = array();
$tdataGE_EVENTO[".exportFields"][] = "EVENTO_ID";
$tdataGE_EVENTO[".exportFields"][] = "NOMBRE";
$tdataGE_EVENTO[".exportFields"][] = "FECHA_HORA";
$tdataGE_EVENTO[".exportFields"][] = "LUGAR";
$tdataGE_EVENTO[".exportFields"][] = "DESCRIPCION";
$tdataGE_EVENTO[".exportFields"][] = "FEC_CREACION";
$tdataGE_EVENTO[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_EVENTO[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EVENTO[".exportFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_EVENTO[".exportFields"][] = "CIUDAD";

$tdataGE_EVENTO[".importFields"] = array();
$tdataGE_EVENTO[".importFields"][] = "EVENTO_ID";
$tdataGE_EVENTO[".importFields"][] = "NOMBRE";
$tdataGE_EVENTO[".importFields"][] = "FECHA_HORA";
$tdataGE_EVENTO[".importFields"][] = "LUGAR";
$tdataGE_EVENTO[".importFields"][] = "DESCRIPCION";
$tdataGE_EVENTO[".importFields"][] = "FEC_CREACION";
$tdataGE_EVENTO[".importFields"][] = "USUARIO_CREACION";
$tdataGE_EVENTO[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EVENTO[".importFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_EVENTO[".importFields"][] = "CIUDAD";

$tdataGE_EVENTO[".printFields"] = array();
$tdataGE_EVENTO[".printFields"][] = "EVENTO_ID";
$tdataGE_EVENTO[".printFields"][] = "NOMBRE";
$tdataGE_EVENTO[".printFields"][] = "FECHA_HORA";
$tdataGE_EVENTO[".printFields"][] = "LUGAR";
$tdataGE_EVENTO[".printFields"][] = "DESCRIPCION";
$tdataGE_EVENTO[".printFields"][] = "FEC_CREACION";
$tdataGE_EVENTO[".printFields"][] = "USUARIO_CREACION";
$tdataGE_EVENTO[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_EVENTO[".printFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_EVENTO[".printFields"][] = "CIUDAD";

//	EVENTO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EVENTO_ID";
	$fdata["GoodName"] = "EVENTO_ID";
	$fdata["ownerTable"] = "GE.EVENTO";
	$fdata["Label"] = GetFieldLabel("GE_EVENTO","EVENTO_ID"); 
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
	
		$fdata["strField"] = "EVENTO_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EVENTO_ID";
	
		
		
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

	

	
	$tdataGE_EVENTO["EVENTO_ID"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "GE.EVENTO";
	$fdata["Label"] = GetFieldLabel("GE_EVENTO","NOMBRE"); 
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

	

	
	$tdataGE_EVENTO["NOMBRE"] = $fdata;
//	FECHA_HORA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FECHA_HORA";
	$fdata["GoodName"] = "FECHA_HORA";
	$fdata["ownerTable"] = "GE.EVENTO";
	$fdata["Label"] = GetFieldLabel("GE_EVENTO","FECHA_HORA"); 
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
	
		$fdata["strField"] = "FECHA_HORA"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_HORA";
	
		
		
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

	

	
	$tdataGE_EVENTO["FECHA_HORA"] = $fdata;
//	LUGAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LUGAR";
	$fdata["GoodName"] = "LUGAR";
	$fdata["ownerTable"] = "GE.EVENTO";
	$fdata["Label"] = GetFieldLabel("GE_EVENTO","LUGAR"); 
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
	
		$fdata["strField"] = "LUGAR"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LUGAR";
	
		
		
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

	

	
	$tdataGE_EVENTO["LUGAR"] = $fdata;
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "GE.EVENTO";
	$fdata["Label"] = GetFieldLabel("GE_EVENTO","DESCRIPCION"); 
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
	
		$fdata["strField"] = "DESCRIPCION"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION";
	
		
		
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
			$edata["EditParams"].= " maxlength=300";
	
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

	

	
	$tdataGE_EVENTO["DESCRIPCION"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.EVENTO";
	$fdata["Label"] = GetFieldLabel("GE_EVENTO","FEC_CREACION"); 
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

	

	
	$tdataGE_EVENTO["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.EVENTO";
	$fdata["Label"] = GetFieldLabel("GE_EVENTO","USUARIO_CREACION"); 
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

	

	
	$tdataGE_EVENTO["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.EVENTO";
	$fdata["Label"] = GetFieldLabel("GE_EVENTO","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_EVENTO["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.EVENTO";
	$fdata["Label"] = GetFieldLabel("GE_EVENTO","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_EVENTO["USUARIO_ULTIMA_MOD"] = $fdata;
//	CIUDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CIUDAD";
	$fdata["GoodName"] = "CIUDAD";
	$fdata["ownerTable"] = "GE.EVENTO";
	$fdata["Label"] = GetFieldLabel("GE_EVENTO","CIUDAD"); 
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
	
		$fdata["strField"] = "CIUDAD"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIUDAD";
	
		
		
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
	$edata["LookupTable"] = "GE.CIUDAD";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "CIUDAD_ID";
	$edata["LinkFieldType"] = 14;
	$edata["DisplayField"] = "CIUDAD_ID";
	
		
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

	

	
	$tdataGE_EVENTO["CIUDAD"] = $fdata;

	
$tables_data["GE.EVENTO"]=&$tdataGE_EVENTO;
$field_labels["GE_EVENTO"] = &$fieldLabelsGE_EVENTO;
$fieldToolTips["GE.EVENTO"] = &$fieldToolTipsGE_EVENTO;
$page_titles["GE_EVENTO"] = &$pageTitlesGE_EVENTO;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.EVENTO"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.EVENTO"] = array();


	
				$strOriginalDetailsTable="GE.CIUDAD";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="GE.CIUDAD";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "GE_CIUDAD";
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
					$masterTablesData["GE.EVENTO"][0] = $masterParams;	
				$masterTablesData["GE.EVENTO"][0]["masterKeys"] = array();
	$masterTablesData["GE.EVENTO"][0]["masterKeys"][]="CIUDAD_ID";
				$masterTablesData["GE.EVENTO"][0]["detailKeys"] = array();
	$masterTablesData["GE.EVENTO"][0]["detailKeys"][]="CIUDAD";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_EVENTO()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EVENTO_ID,  NOMBRE,  FECHA_HORA,  LUGAR,  DESCRIPCION,  FEC_CREACION,  USUARIO_CREACION,  FEC_ULTIMA_MOD,  USUARIO_ULTIMA_MOD,  CIUDAD";
$proto0["m_strFrom"] = "FROM GE.EVENTO";
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
	"m_strName" => "EVENTO_ID",
	"m_strTable" => "GE.EVENTO",
	"m_srcTableName" => "GE.EVENTO"
));

$proto5["m_sql"] = "EVENTO_ID";
$proto5["m_srcTableName"] = "GE.EVENTO";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "GE.EVENTO",
	"m_srcTableName" => "GE.EVENTO"
));

$proto7["m_sql"] = "NOMBRE";
$proto7["m_srcTableName"] = "GE.EVENTO";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_HORA",
	"m_strTable" => "GE.EVENTO",
	"m_srcTableName" => "GE.EVENTO"
));

$proto9["m_sql"] = "FECHA_HORA";
$proto9["m_srcTableName"] = "GE.EVENTO";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "LUGAR",
	"m_strTable" => "GE.EVENTO",
	"m_srcTableName" => "GE.EVENTO"
));

$proto11["m_sql"] = "LUGAR";
$proto11["m_srcTableName"] = "GE.EVENTO";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "GE.EVENTO",
	"m_srcTableName" => "GE.EVENTO"
));

$proto13["m_sql"] = "DESCRIPCION";
$proto13["m_srcTableName"] = "GE.EVENTO";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.EVENTO",
	"m_srcTableName" => "GE.EVENTO"
));

$proto15["m_sql"] = "FEC_CREACION";
$proto15["m_srcTableName"] = "GE.EVENTO";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.EVENTO",
	"m_srcTableName" => "GE.EVENTO"
));

$proto17["m_sql"] = "USUARIO_CREACION";
$proto17["m_srcTableName"] = "GE.EVENTO";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.EVENTO",
	"m_srcTableName" => "GE.EVENTO"
));

$proto19["m_sql"] = "FEC_ULTIMA_MOD";
$proto19["m_srcTableName"] = "GE.EVENTO";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.EVENTO",
	"m_srcTableName" => "GE.EVENTO"
));

$proto21["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto21["m_srcTableName"] = "GE.EVENTO";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "CIUDAD",
	"m_strTable" => "GE.EVENTO",
	"m_srcTableName" => "GE.EVENTO"
));

$proto23["m_sql"] = "CIUDAD";
$proto23["m_srcTableName"] = "GE.EVENTO";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "GE.EVENTO";
$proto26["m_srcTableName"] = "GE.EVENTO";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "EVENTO_ID";
$proto26["m_columns"][] = "NOMBRE";
$proto26["m_columns"][] = "FECHA_HORA";
$proto26["m_columns"][] = "LUGAR";
$proto26["m_columns"][] = "DESCRIPCION";
$proto26["m_columns"][] = "FEC_CREACION";
$proto26["m_columns"][] = "USUARIO_CREACION";
$proto26["m_columns"][] = "FEC_ULTIMA_MOD";
$proto26["m_columns"][] = "USUARIO_ULTIMA_MOD";
$proto26["m_columns"][] = "CIUDAD";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "GE.EVENTO";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "GE.EVENTO";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="GE.EVENTO";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_EVENTO = createSqlQuery_GE_EVENTO();


	
										
	
$tdataGE_EVENTO[".sqlquery"] = $queryData_GE_EVENTO;

$tableEvents["GE.EVENTO"] = new eventsBase;
$tdataGE_EVENTO[".hasEvents"] = false;

?>
<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_PERSONA = array();	
	$tdataGE_PERSONA[".truncateText"] = true;
	$tdataGE_PERSONA[".NumberOfChars"] = 80; 
	$tdataGE_PERSONA[".ShortName"] = "GE_PERSONA";
	$tdataGE_PERSONA[".OwnerID"] = "";
	$tdataGE_PERSONA[".OriginalTable"] = "GE.PERSONA";

//	field labels
$fieldLabelsGE_PERSONA = array();
$fieldToolTipsGE_PERSONA = array();
$pageTitlesGE_PERSONA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_PERSONA["Spanish"] = array();
	$fieldToolTipsGE_PERSONA["Spanish"] = array();
	$pageTitlesGE_PERSONA["Spanish"] = array();
	$fieldLabelsGE_PERSONA["Spanish"]["USERNAME"] = "USERNAME";
	$fieldToolTipsGE_PERSONA["Spanish"]["USERNAME"] = "";
	$fieldLabelsGE_PERSONA["Spanish"]["ES_ADMIN"] = "ES ADMIN";
	$fieldToolTipsGE_PERSONA["Spanish"]["ES_ADMIN"] = "";
	$fieldLabelsGE_PERSONA["Spanish"]["NACIMIENTO"] = "NACIMIENTO";
	$fieldToolTipsGE_PERSONA["Spanish"]["NACIMIENTO"] = "";
	$fieldLabelsGE_PERSONA["Spanish"]["PRIMER_APELLIDO"] = "PRIMER APELLIDO";
	$fieldToolTipsGE_PERSONA["Spanish"]["PRIMER_APELLIDO"] = "";
	$fieldLabelsGE_PERSONA["Spanish"]["SEGUNDO_APELLIDO"] = "SEGUNDO APELLIDO";
	$fieldToolTipsGE_PERSONA["Spanish"]["SEGUNDO_APELLIDO"] = "";
	$fieldLabelsGE_PERSONA["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_PERSONA["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGE_PERSONA["Spanish"]["GENERO_ID"] = "GENERO ID";
	$fieldToolTipsGE_PERSONA["Spanish"]["GENERO_ID"] = "";
	$fieldLabelsGE_PERSONA["Spanish"]["CIUDAD_ID"] = "CIUDAD ID";
	$fieldToolTipsGE_PERSONA["Spanish"]["CIUDAD_ID"] = "";
	$fieldLabelsGE_PERSONA["Spanish"]["SLOGAN"] = "SLOGAN";
	$fieldToolTipsGE_PERSONA["Spanish"]["SLOGAN"] = "";
	$fieldLabelsGE_PERSONA["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_PERSONA["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_PERSONA["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_PERSONA["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_PERSONA["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_PERSONA["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_PERSONA["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_PERSONA["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	$fieldLabelsGE_PERSONA["Spanish"]["EMAIL"] = "EMAIL";
	$fieldToolTipsGE_PERSONA["Spanish"]["EMAIL"] = "";
	$fieldLabelsGE_PERSONA["Spanish"]["CLAVE"] = "CLAVE";
	$fieldToolTipsGE_PERSONA["Spanish"]["CLAVE"] = "";
	if (count($fieldToolTipsGE_PERSONA["Spanish"]))
		$tdataGE_PERSONA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_PERSONA[""] = array();
	$fieldToolTipsGE_PERSONA[""] = array();
	$pageTitlesGE_PERSONA[""] = array();
	$fieldLabelsGE_PERSONA[""]["USERNAME"] = "USERNAME";
	$fieldToolTipsGE_PERSONA[""]["USERNAME"] = "";
	$fieldLabelsGE_PERSONA[""]["ES_ADMIN"] = "ES ADMIN";
	$fieldToolTipsGE_PERSONA[""]["ES_ADMIN"] = "";
	$fieldLabelsGE_PERSONA[""]["NACIMIENTO"] = "NACIMIENTO";
	$fieldToolTipsGE_PERSONA[""]["NACIMIENTO"] = "";
	$fieldLabelsGE_PERSONA[""]["PRIMER_APELLIDO"] = "PRIMER APELLIDO";
	$fieldToolTipsGE_PERSONA[""]["PRIMER_APELLIDO"] = "";
	$fieldLabelsGE_PERSONA[""]["SEGUNDO_APELLIDO"] = "SEGUNDO APELLIDO";
	$fieldToolTipsGE_PERSONA[""]["SEGUNDO_APELLIDO"] = "";
	$fieldLabelsGE_PERSONA[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGE_PERSONA[""]["NOMBRE"] = "";
	$fieldLabelsGE_PERSONA[""]["GENERO_ID"] = "GENERO ID";
	$fieldToolTipsGE_PERSONA[""]["GENERO_ID"] = "";
	$fieldLabelsGE_PERSONA[""]["CIUDAD_ID"] = "CIUDAD ID";
	$fieldToolTipsGE_PERSONA[""]["CIUDAD_ID"] = "";
	$fieldLabelsGE_PERSONA[""]["SLOGAN"] = "SLOGAN";
	$fieldToolTipsGE_PERSONA[""]["SLOGAN"] = "";
	$fieldLabelsGE_PERSONA[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_PERSONA[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_PERSONA[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_PERSONA[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_PERSONA[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_PERSONA[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_PERSONA[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_PERSONA[""]["USUARIO_ULTIMA_MOD"] = "";
	$fieldLabelsGE_PERSONA[""]["EMAIL"] = "EMAIL";
	$fieldToolTipsGE_PERSONA[""]["EMAIL"] = "";
	$fieldLabelsGE_PERSONA[""]["CLAVE"] = "CLAVE";
	$fieldToolTipsGE_PERSONA[""]["CLAVE"] = "";
	if (count($fieldToolTipsGE_PERSONA[""]))
		$tdataGE_PERSONA[".isUseToolTips"] = true;
}
	
	
	$tdataGE_PERSONA[".NCSearch"] = true;



$tdataGE_PERSONA[".shortTableName"] = "GE_PERSONA";
$tdataGE_PERSONA[".nSecOptions"] = 0;
$tdataGE_PERSONA[".recsPerRowList"] = 1;
$tdataGE_PERSONA[".mainTableOwnerID"] = "";
$tdataGE_PERSONA[".moveNext"] = 1;
$tdataGE_PERSONA[".nType"] = 0;

$tdataGE_PERSONA[".strOriginalTableName"] = "GE.PERSONA";




$tdataGE_PERSONA[".showAddInPopup"] = false;

$tdataGE_PERSONA[".showEditInPopup"] = false;

$tdataGE_PERSONA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_PERSONA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_PERSONA[".fieldsForRegister"] = array();

$tdataGE_PERSONA[".listAjax"] = false;

	$tdataGE_PERSONA[".audit"] = false;

	$tdataGE_PERSONA[".locking"] = false;

$tdataGE_PERSONA[".edit"] = true;

$tdataGE_PERSONA[".list"] = true;

$tdataGE_PERSONA[".inlineEdit"] = true;
$tdataGE_PERSONA[".inlineAdd"] = true;
$tdataGE_PERSONA[".view"] = true;

$tdataGE_PERSONA[".import"] = true;

$tdataGE_PERSONA[".exportTo"] = true;

$tdataGE_PERSONA[".printFriendly"] = true;

$tdataGE_PERSONA[".delete"] = true;

$tdataGE_PERSONA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_PERSONA[".searchSaving"] = false;
//

$tdataGE_PERSONA[".showSearchPanel"] = true;
		$tdataGE_PERSONA[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_PERSONA[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_PERSONA[".isUseAjaxSuggest"] = true;

$tdataGE_PERSONA[".rowHighlite"] = true;



$tdataGE_PERSONA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_PERSONA[".isUseTimeForSearch"] = false;



$tdataGE_PERSONA[".useDetailsPreview"] = true;


$tdataGE_PERSONA[".allSearchFields"] = array();
$tdataGE_PERSONA[".filterFields"] = array();
$tdataGE_PERSONA[".requiredSearchFields"] = array();

$tdataGE_PERSONA[".allSearchFields"][] = "USERNAME";
	$tdataGE_PERSONA[".allSearchFields"][] = "ES_ADMIN";
	$tdataGE_PERSONA[".allSearchFields"][] = "NACIMIENTO";
	$tdataGE_PERSONA[".allSearchFields"][] = "PRIMER_APELLIDO";
	$tdataGE_PERSONA[".allSearchFields"][] = "SEGUNDO_APELLIDO";
	$tdataGE_PERSONA[".allSearchFields"][] = "NOMBRE";
	$tdataGE_PERSONA[".allSearchFields"][] = "GENERO_ID";
	$tdataGE_PERSONA[".allSearchFields"][] = "CIUDAD_ID";
	$tdataGE_PERSONA[".allSearchFields"][] = "SLOGAN";
	$tdataGE_PERSONA[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_PERSONA[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_PERSONA[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_PERSONA[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	$tdataGE_PERSONA[".allSearchFields"][] = "EMAIL";
	$tdataGE_PERSONA[".allSearchFields"][] = "CLAVE";
	

$tdataGE_PERSONA[".googleLikeFields"] = array();
$tdataGE_PERSONA[".googleLikeFields"][] = "USERNAME";
$tdataGE_PERSONA[".googleLikeFields"][] = "ES_ADMIN";
$tdataGE_PERSONA[".googleLikeFields"][] = "NACIMIENTO";
$tdataGE_PERSONA[".googleLikeFields"][] = "PRIMER_APELLIDO";
$tdataGE_PERSONA[".googleLikeFields"][] = "SEGUNDO_APELLIDO";
$tdataGE_PERSONA[".googleLikeFields"][] = "NOMBRE";
$tdataGE_PERSONA[".googleLikeFields"][] = "GENERO_ID";
$tdataGE_PERSONA[".googleLikeFields"][] = "CIUDAD_ID";
$tdataGE_PERSONA[".googleLikeFields"][] = "SLOGAN";
$tdataGE_PERSONA[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_PERSONA[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA[".googleLikeFields"][] = "EMAIL";
$tdataGE_PERSONA[".googleLikeFields"][] = "CLAVE";


$tdataGE_PERSONA[".advSearchFields"] = array();
$tdataGE_PERSONA[".advSearchFields"][] = "USERNAME";
$tdataGE_PERSONA[".advSearchFields"][] = "ES_ADMIN";
$tdataGE_PERSONA[".advSearchFields"][] = "NACIMIENTO";
$tdataGE_PERSONA[".advSearchFields"][] = "PRIMER_APELLIDO";
$tdataGE_PERSONA[".advSearchFields"][] = "SEGUNDO_APELLIDO";
$tdataGE_PERSONA[".advSearchFields"][] = "NOMBRE";
$tdataGE_PERSONA[".advSearchFields"][] = "GENERO_ID";
$tdataGE_PERSONA[".advSearchFields"][] = "CIUDAD_ID";
$tdataGE_PERSONA[".advSearchFields"][] = "SLOGAN";
$tdataGE_PERSONA[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_PERSONA[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA[".advSearchFields"][] = "EMAIL";
$tdataGE_PERSONA[".advSearchFields"][] = "CLAVE";

$tdataGE_PERSONA[".tableType"] = "list";

$tdataGE_PERSONA[".printerPageOrientation"] = 0;
$tdataGE_PERSONA[".nPrinterPageScale"] = 100;

$tdataGE_PERSONA[".nPrinterSplitRecords"] = 40;

$tdataGE_PERSONA[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_PERSONA[".pageSize"] = 20;

$tdataGE_PERSONA[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_PERSONA[".strOrderBy"] = $tstrOrderBy;

$tdataGE_PERSONA[".orderindexes"] = array();

$tdataGE_PERSONA[".sqlHead"] = "SELECT USERNAME,   ES_ADMIN,   NACIMIENTO,   PRIMER_APELLIDO,   SEGUNDO_APELLIDO,   NOMBRE,   GENERO_ID,   CIUDAD_ID,   SLOGAN,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD,   EMAIL,   CLAVE";
$tdataGE_PERSONA[".sqlFrom"] = "FROM GE.PERSONA";
$tdataGE_PERSONA[".sqlWhereExpr"] = "";
$tdataGE_PERSONA[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_PERSONA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_PERSONA[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_PERSONA[".highlightSearchResults"] = true;

$tableKeysGE_PERSONA = array();
$tableKeysGE_PERSONA[] = "USERNAME";
$tdataGE_PERSONA[".Keys"] = $tableKeysGE_PERSONA;

$tdataGE_PERSONA[".listFields"] = array();
$tdataGE_PERSONA[".listFields"][] = "USERNAME";
$tdataGE_PERSONA[".listFields"][] = "ES_ADMIN";
$tdataGE_PERSONA[".listFields"][] = "NACIMIENTO";
$tdataGE_PERSONA[".listFields"][] = "PRIMER_APELLIDO";
$tdataGE_PERSONA[".listFields"][] = "SEGUNDO_APELLIDO";
$tdataGE_PERSONA[".listFields"][] = "NOMBRE";
$tdataGE_PERSONA[".listFields"][] = "GENERO_ID";
$tdataGE_PERSONA[".listFields"][] = "CIUDAD_ID";
$tdataGE_PERSONA[".listFields"][] = "SLOGAN";
$tdataGE_PERSONA[".listFields"][] = "FEC_CREACION";
$tdataGE_PERSONA[".listFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA[".listFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA[".listFields"][] = "EMAIL";
$tdataGE_PERSONA[".listFields"][] = "CLAVE";

$tdataGE_PERSONA[".hideMobileList"] = array();


$tdataGE_PERSONA[".viewFields"] = array();
$tdataGE_PERSONA[".viewFields"][] = "USERNAME";
$tdataGE_PERSONA[".viewFields"][] = "ES_ADMIN";
$tdataGE_PERSONA[".viewFields"][] = "NACIMIENTO";
$tdataGE_PERSONA[".viewFields"][] = "PRIMER_APELLIDO";
$tdataGE_PERSONA[".viewFields"][] = "SEGUNDO_APELLIDO";
$tdataGE_PERSONA[".viewFields"][] = "NOMBRE";
$tdataGE_PERSONA[".viewFields"][] = "GENERO_ID";
$tdataGE_PERSONA[".viewFields"][] = "CIUDAD_ID";
$tdataGE_PERSONA[".viewFields"][] = "SLOGAN";
$tdataGE_PERSONA[".viewFields"][] = "FEC_CREACION";
$tdataGE_PERSONA[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA[".viewFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA[".viewFields"][] = "EMAIL";
$tdataGE_PERSONA[".viewFields"][] = "CLAVE";

$tdataGE_PERSONA[".addFields"] = array();
$tdataGE_PERSONA[".addFields"][] = "USERNAME";
$tdataGE_PERSONA[".addFields"][] = "ES_ADMIN";
$tdataGE_PERSONA[".addFields"][] = "NACIMIENTO";
$tdataGE_PERSONA[".addFields"][] = "PRIMER_APELLIDO";
$tdataGE_PERSONA[".addFields"][] = "SEGUNDO_APELLIDO";
$tdataGE_PERSONA[".addFields"][] = "NOMBRE";
$tdataGE_PERSONA[".addFields"][] = "GENERO_ID";
$tdataGE_PERSONA[".addFields"][] = "CIUDAD_ID";
$tdataGE_PERSONA[".addFields"][] = "SLOGAN";
$tdataGE_PERSONA[".addFields"][] = "EMAIL";
$tdataGE_PERSONA[".addFields"][] = "CLAVE";

$tdataGE_PERSONA[".inlineAddFields"] = array();
$tdataGE_PERSONA[".inlineAddFields"][] = "USERNAME";
$tdataGE_PERSONA[".inlineAddFields"][] = "ES_ADMIN";
$tdataGE_PERSONA[".inlineAddFields"][] = "NACIMIENTO";
$tdataGE_PERSONA[".inlineAddFields"][] = "PRIMER_APELLIDO";
$tdataGE_PERSONA[".inlineAddFields"][] = "SEGUNDO_APELLIDO";
$tdataGE_PERSONA[".inlineAddFields"][] = "NOMBRE";
$tdataGE_PERSONA[".inlineAddFields"][] = "GENERO_ID";
$tdataGE_PERSONA[".inlineAddFields"][] = "CIUDAD_ID";
$tdataGE_PERSONA[".inlineAddFields"][] = "SLOGAN";
$tdataGE_PERSONA[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_PERSONA[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA[".inlineAddFields"][] = "EMAIL";
$tdataGE_PERSONA[".inlineAddFields"][] = "CLAVE";

$tdataGE_PERSONA[".editFields"] = array();
$tdataGE_PERSONA[".editFields"][] = "USERNAME";
$tdataGE_PERSONA[".editFields"][] = "ES_ADMIN";
$tdataGE_PERSONA[".editFields"][] = "NACIMIENTO";
$tdataGE_PERSONA[".editFields"][] = "PRIMER_APELLIDO";
$tdataGE_PERSONA[".editFields"][] = "SEGUNDO_APELLIDO";
$tdataGE_PERSONA[".editFields"][] = "NOMBRE";
$tdataGE_PERSONA[".editFields"][] = "GENERO_ID";
$tdataGE_PERSONA[".editFields"][] = "CIUDAD_ID";
$tdataGE_PERSONA[".editFields"][] = "SLOGAN";
$tdataGE_PERSONA[".editFields"][] = "EMAIL";
$tdataGE_PERSONA[".editFields"][] = "CLAVE";

$tdataGE_PERSONA[".inlineEditFields"] = array();
$tdataGE_PERSONA[".inlineEditFields"][] = "USERNAME";
$tdataGE_PERSONA[".inlineEditFields"][] = "ES_ADMIN";
$tdataGE_PERSONA[".inlineEditFields"][] = "NACIMIENTO";
$tdataGE_PERSONA[".inlineEditFields"][] = "PRIMER_APELLIDO";
$tdataGE_PERSONA[".inlineEditFields"][] = "SEGUNDO_APELLIDO";
$tdataGE_PERSONA[".inlineEditFields"][] = "NOMBRE";
$tdataGE_PERSONA[".inlineEditFields"][] = "GENERO_ID";
$tdataGE_PERSONA[".inlineEditFields"][] = "CIUDAD_ID";
$tdataGE_PERSONA[".inlineEditFields"][] = "SLOGAN";
$tdataGE_PERSONA[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_PERSONA[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA[".inlineEditFields"][] = "EMAIL";
$tdataGE_PERSONA[".inlineEditFields"][] = "CLAVE";

$tdataGE_PERSONA[".exportFields"] = array();
$tdataGE_PERSONA[".exportFields"][] = "USERNAME";
$tdataGE_PERSONA[".exportFields"][] = "ES_ADMIN";
$tdataGE_PERSONA[".exportFields"][] = "NACIMIENTO";
$tdataGE_PERSONA[".exportFields"][] = "PRIMER_APELLIDO";
$tdataGE_PERSONA[".exportFields"][] = "SEGUNDO_APELLIDO";
$tdataGE_PERSONA[".exportFields"][] = "NOMBRE";
$tdataGE_PERSONA[".exportFields"][] = "GENERO_ID";
$tdataGE_PERSONA[".exportFields"][] = "CIUDAD_ID";
$tdataGE_PERSONA[".exportFields"][] = "SLOGAN";
$tdataGE_PERSONA[".exportFields"][] = "FEC_CREACION";
$tdataGE_PERSONA[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA[".exportFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA[".exportFields"][] = "EMAIL";
$tdataGE_PERSONA[".exportFields"][] = "CLAVE";

$tdataGE_PERSONA[".importFields"] = array();
$tdataGE_PERSONA[".importFields"][] = "USERNAME";
$tdataGE_PERSONA[".importFields"][] = "ES_ADMIN";
$tdataGE_PERSONA[".importFields"][] = "NACIMIENTO";
$tdataGE_PERSONA[".importFields"][] = "PRIMER_APELLIDO";
$tdataGE_PERSONA[".importFields"][] = "SEGUNDO_APELLIDO";
$tdataGE_PERSONA[".importFields"][] = "NOMBRE";
$tdataGE_PERSONA[".importFields"][] = "GENERO_ID";
$tdataGE_PERSONA[".importFields"][] = "CIUDAD_ID";
$tdataGE_PERSONA[".importFields"][] = "SLOGAN";
$tdataGE_PERSONA[".importFields"][] = "FEC_CREACION";
$tdataGE_PERSONA[".importFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA[".importFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA[".importFields"][] = "EMAIL";
$tdataGE_PERSONA[".importFields"][] = "CLAVE";

$tdataGE_PERSONA[".printFields"] = array();
$tdataGE_PERSONA[".printFields"][] = "USERNAME";
$tdataGE_PERSONA[".printFields"][] = "ES_ADMIN";
$tdataGE_PERSONA[".printFields"][] = "NACIMIENTO";
$tdataGE_PERSONA[".printFields"][] = "PRIMER_APELLIDO";
$tdataGE_PERSONA[".printFields"][] = "SEGUNDO_APELLIDO";
$tdataGE_PERSONA[".printFields"][] = "NOMBRE";
$tdataGE_PERSONA[".printFields"][] = "GENERO_ID";
$tdataGE_PERSONA[".printFields"][] = "CIUDAD_ID";
$tdataGE_PERSONA[".printFields"][] = "SLOGAN";
$tdataGE_PERSONA[".printFields"][] = "FEC_CREACION";
$tdataGE_PERSONA[".printFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA[".printFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA[".printFields"][] = "EMAIL";
$tdataGE_PERSONA[".printFields"][] = "CLAVE";

//	USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "USERNAME";
	$fdata["GoodName"] = "USERNAME";
	$fdata["ownerTable"] = "GE.PERSONA";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA","USERNAME"); 
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

	

	
	$tdataGE_PERSONA["USERNAME"] = $fdata;
//	ES_ADMIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ES_ADMIN";
	$fdata["GoodName"] = "ES_ADMIN";
	$fdata["ownerTable"] = "GE.PERSONA";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA","ES_ADMIN"); 
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
	
		$fdata["strField"] = "ES_ADMIN"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ES_ADMIN";
	
		
		
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
			$edata["EditParams"].= " maxlength=1";
	
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

	

	
	$tdataGE_PERSONA["ES_ADMIN"] = $fdata;
//	NACIMIENTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NACIMIENTO";
	$fdata["GoodName"] = "NACIMIENTO";
	$fdata["ownerTable"] = "GE.PERSONA";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA","NACIMIENTO"); 
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
	
		$fdata["strField"] = "NACIMIENTO"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NACIMIENTO";
	
		
		
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

	

	
	$tdataGE_PERSONA["NACIMIENTO"] = $fdata;
//	PRIMER_APELLIDO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRIMER_APELLIDO";
	$fdata["GoodName"] = "PRIMER_APELLIDO";
	$fdata["ownerTable"] = "GE.PERSONA";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA","PRIMER_APELLIDO"); 
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
	
		$fdata["strField"] = "PRIMER_APELLIDO"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRIMER_APELLIDO";
	
		
		
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

	

	
	$tdataGE_PERSONA["PRIMER_APELLIDO"] = $fdata;
//	SEGUNDO_APELLIDO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SEGUNDO_APELLIDO";
	$fdata["GoodName"] = "SEGUNDO_APELLIDO";
	$fdata["ownerTable"] = "GE.PERSONA";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA","SEGUNDO_APELLIDO"); 
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
	
		$fdata["strField"] = "SEGUNDO_APELLIDO"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEGUNDO_APELLIDO";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
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

	

	
	$tdataGE_PERSONA["SEGUNDO_APELLIDO"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "GE.PERSONA";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA","NOMBRE"); 
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

	

	
	$tdataGE_PERSONA["NOMBRE"] = $fdata;
//	GENERO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "GENERO_ID";
	$fdata["GoodName"] = "GENERO_ID";
	$fdata["ownerTable"] = "GE.PERSONA";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA","GENERO_ID"); 
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
	
		$fdata["strField"] = "GENERO_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GENERO_ID";
	
		
		
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
	$edata["LookupTable"] = "GE.GENERO";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "GENERO_ID";
	$edata["LinkFieldType"] = 14;
	$edata["DisplayField"] = "GENERO_ID";
	
		
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

	

	
	$tdataGE_PERSONA["GENERO_ID"] = $fdata;
//	CIUDAD_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CIUDAD_ID";
	$fdata["GoodName"] = "CIUDAD_ID";
	$fdata["ownerTable"] = "GE.PERSONA";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA","CIUDAD_ID"); 
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

	

	
	$tdataGE_PERSONA["CIUDAD_ID"] = $fdata;
//	SLOGAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SLOGAN";
	$fdata["GoodName"] = "SLOGAN";
	$fdata["ownerTable"] = "GE.PERSONA";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA","SLOGAN"); 
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
	
		$fdata["strField"] = "SLOGAN"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SLOGAN";
	
		
		
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
			$edata["EditParams"].= " maxlength=500";
	
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

	

	
	$tdataGE_PERSONA["SLOGAN"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.PERSONA";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA","FEC_CREACION"); 
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

	

	
	$tdataGE_PERSONA["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.PERSONA";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA","USUARIO_CREACION"); 
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

	

	
	$tdataGE_PERSONA["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.PERSONA";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_PERSONA["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.PERSONA";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_PERSONA["USUARIO_ULTIMA_MOD"] = $fdata;
//	EMAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "EMAIL";
	$fdata["GoodName"] = "EMAIL";
	$fdata["ownerTable"] = "GE.PERSONA";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA","EMAIL"); 
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
	
		$fdata["strField"] = "EMAIL"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EMAIL";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "email";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdataGE_PERSONA["EMAIL"] = $fdata;
//	CLAVE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CLAVE";
	$fdata["GoodName"] = "CLAVE";
	$fdata["ownerTable"] = "GE.PERSONA";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA","CLAVE"); 
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
	
		$fdata["strField"] = "CLAVE"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CLAVE";
	
		
		
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

	

	
	$tdataGE_PERSONA["CLAVE"] = $fdata;

	
$tables_data["GE.PERSONA"]=&$tdataGE_PERSONA;
$field_labels["GE_PERSONA"] = &$fieldLabelsGE_PERSONA;
$fieldToolTips["GE.PERSONA"] = &$fieldToolTipsGE_PERSONA;
$page_titles["GE_PERSONA"] = &$pageTitlesGE_PERSONA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.PERSONA"] = array();
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
			
	$detailsTablesData["GE.PERSONA"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.PERSONA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.PERSONA"][$dIndex]["masterKeys"][]="USERNAME";

				$detailsTablesData["GE.PERSONA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.PERSONA"][$dIndex]["detailKeys"][]="USERNAME";
//	GE.WINK
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.WINK";
		$detailsParam["dOriginalTable"] = "GE.WINK";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_WINK";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.PERSONA"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.PERSONA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.PERSONA"][$dIndex]["masterKeys"][]="USERNAME";

	$detailsTablesData["GE.PERSONA"][$dIndex]["masterKeys"][]="USERNAME";

				$detailsTablesData["GE.PERSONA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.PERSONA"][$dIndex]["detailKeys"][]="USERNAME_EMISOR";

		
	$detailsTablesData["GE.PERSONA"][$dIndex]["detailKeys"][]="USERNAME_RECEPTOR";
//	GE.VISITA
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.VISITA";
		$detailsParam["dOriginalTable"] = "GE.VISITA";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_VISITA";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.PERSONA"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.PERSONA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.PERSONA"][$dIndex]["masterKeys"][]="USERNAME";

	$detailsTablesData["GE.PERSONA"][$dIndex]["masterKeys"][]="USERNAME";

				$detailsTablesData["GE.PERSONA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.PERSONA"][$dIndex]["detailKeys"][]="USERNAME_VISITANTE";

		
	$detailsTablesData["GE.PERSONA"][$dIndex]["detailKeys"][]="USERNAME_VISITADA";
//	GE.FOTO
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.FOTO";
		$detailsParam["dOriginalTable"] = "GE.FOTO";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_FOTO";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.PERSONA"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.PERSONA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.PERSONA"][$dIndex]["masterKeys"][]="USERNAME";

				$detailsTablesData["GE.PERSONA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.PERSONA"][$dIndex]["detailKeys"][]="USERNAME";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.PERSONA"] = array();


	
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
					$masterTablesData["GE.PERSONA"][0] = $masterParams;	
				$masterTablesData["GE.PERSONA"][0]["masterKeys"] = array();
	$masterTablesData["GE.PERSONA"][0]["masterKeys"][]="CIUDAD_ID";
				$masterTablesData["GE.PERSONA"][0]["detailKeys"] = array();
	$masterTablesData["GE.PERSONA"][0]["detailKeys"][]="CIUDAD_ID";
		
	
				$strOriginalDetailsTable="GE.GENERO";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="GE.GENERO";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "GE_GENERO";
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
					$masterTablesData["GE.PERSONA"][1] = $masterParams;	
				$masterTablesData["GE.PERSONA"][1]["masterKeys"] = array();
	$masterTablesData["GE.PERSONA"][1]["masterKeys"][]="GENERO_ID";
				$masterTablesData["GE.PERSONA"][1]["detailKeys"] = array();
	$masterTablesData["GE.PERSONA"][1]["detailKeys"][]="GENERO_ID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_PERSONA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "USERNAME,   ES_ADMIN,   NACIMIENTO,   PRIMER_APELLIDO,   SEGUNDO_APELLIDO,   NOMBRE,   GENERO_ID,   CIUDAD_ID,   SLOGAN,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD,   EMAIL,   CLAVE";
$proto0["m_strFrom"] = "FROM GE.PERSONA";
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
	"m_strName" => "USERNAME",
	"m_strTable" => "GE.PERSONA",
	"m_srcTableName" => "GE.PERSONA"
));

$proto5["m_sql"] = "USERNAME";
$proto5["m_srcTableName"] = "GE.PERSONA";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ES_ADMIN",
	"m_strTable" => "GE.PERSONA",
	"m_srcTableName" => "GE.PERSONA"
));

$proto7["m_sql"] = "ES_ADMIN";
$proto7["m_srcTableName"] = "GE.PERSONA";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "NACIMIENTO",
	"m_strTable" => "GE.PERSONA",
	"m_srcTableName" => "GE.PERSONA"
));

$proto9["m_sql"] = "NACIMIENTO";
$proto9["m_srcTableName"] = "GE.PERSONA";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "PRIMER_APELLIDO",
	"m_strTable" => "GE.PERSONA",
	"m_srcTableName" => "GE.PERSONA"
));

$proto11["m_sql"] = "PRIMER_APELLIDO";
$proto11["m_srcTableName"] = "GE.PERSONA";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "SEGUNDO_APELLIDO",
	"m_strTable" => "GE.PERSONA",
	"m_srcTableName" => "GE.PERSONA"
));

$proto13["m_sql"] = "SEGUNDO_APELLIDO";
$proto13["m_srcTableName"] = "GE.PERSONA";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "GE.PERSONA",
	"m_srcTableName" => "GE.PERSONA"
));

$proto15["m_sql"] = "NOMBRE";
$proto15["m_srcTableName"] = "GE.PERSONA";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "GENERO_ID",
	"m_strTable" => "GE.PERSONA",
	"m_srcTableName" => "GE.PERSONA"
));

$proto17["m_sql"] = "GENERO_ID";
$proto17["m_srcTableName"] = "GE.PERSONA";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "CIUDAD_ID",
	"m_strTable" => "GE.PERSONA",
	"m_srcTableName" => "GE.PERSONA"
));

$proto19["m_sql"] = "CIUDAD_ID";
$proto19["m_srcTableName"] = "GE.PERSONA";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "SLOGAN",
	"m_strTable" => "GE.PERSONA",
	"m_srcTableName" => "GE.PERSONA"
));

$proto21["m_sql"] = "SLOGAN";
$proto21["m_srcTableName"] = "GE.PERSONA";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.PERSONA",
	"m_srcTableName" => "GE.PERSONA"
));

$proto23["m_sql"] = "FEC_CREACION";
$proto23["m_srcTableName"] = "GE.PERSONA";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.PERSONA",
	"m_srcTableName" => "GE.PERSONA"
));

$proto25["m_sql"] = "USUARIO_CREACION";
$proto25["m_srcTableName"] = "GE.PERSONA";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.PERSONA",
	"m_srcTableName" => "GE.PERSONA"
));

$proto27["m_sql"] = "FEC_ULTIMA_MOD";
$proto27["m_srcTableName"] = "GE.PERSONA";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.PERSONA",
	"m_srcTableName" => "GE.PERSONA"
));

$proto29["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto29["m_srcTableName"] = "GE.PERSONA";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "EMAIL",
	"m_strTable" => "GE.PERSONA",
	"m_srcTableName" => "GE.PERSONA"
));

$proto31["m_sql"] = "EMAIL";
$proto31["m_srcTableName"] = "GE.PERSONA";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "CLAVE",
	"m_strTable" => "GE.PERSONA",
	"m_srcTableName" => "GE.PERSONA"
));

$proto33["m_sql"] = "CLAVE";
$proto33["m_srcTableName"] = "GE.PERSONA";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "GE.PERSONA";
$proto36["m_srcTableName"] = "GE.PERSONA";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "USERNAME";
$proto36["m_columns"][] = "ES_ADMIN";
$proto36["m_columns"][] = "NACIMIENTO";
$proto36["m_columns"][] = "PRIMER_APELLIDO";
$proto36["m_columns"][] = "SEGUNDO_APELLIDO";
$proto36["m_columns"][] = "NOMBRE";
$proto36["m_columns"][] = "GENERO_ID";
$proto36["m_columns"][] = "CIUDAD_ID";
$proto36["m_columns"][] = "SLOGAN";
$proto36["m_columns"][] = "FEC_CREACION";
$proto36["m_columns"][] = "USUARIO_CREACION";
$proto36["m_columns"][] = "FEC_ULTIMA_MOD";
$proto36["m_columns"][] = "USUARIO_ULTIMA_MOD";
$proto36["m_columns"][] = "EMAIL";
$proto36["m_columns"][] = "CLAVE";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "GE.PERSONA";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "GE.PERSONA";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="GE.PERSONA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_PERSONA = createSqlQuery_GE_PERSONA();


	
															
	
$tdataGE_PERSONA[".sqlquery"] = $queryData_GE_PERSONA;

$tableEvents["GE.PERSONA"] = new eventsBase;
$tdataGE_PERSONA[".hasEvents"] = false;

?>
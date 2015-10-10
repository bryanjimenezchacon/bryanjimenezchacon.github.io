<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGE_PERSONA_DISPONIBLE = array();	
	$tdataGE_PERSONA_DISPONIBLE[".truncateText"] = true;
	$tdataGE_PERSONA_DISPONIBLE[".NumberOfChars"] = 80; 
	$tdataGE_PERSONA_DISPONIBLE[".ShortName"] = "GE_PERSONA_DISPONIBLE";
	$tdataGE_PERSONA_DISPONIBLE[".OwnerID"] = "";
	$tdataGE_PERSONA_DISPONIBLE[".OriginalTable"] = "GE.PERSONA_DISPONIBLE";

//	field labels
$fieldLabelsGE_PERSONA_DISPONIBLE = array();
$fieldToolTipsGE_PERSONA_DISPONIBLE = array();
$pageTitlesGE_PERSONA_DISPONIBLE = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"] = array();
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"] = array();
	$pageTitlesGE_PERSONA_DISPONIBLE["Spanish"] = array();
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["USERNAME"] = "USERNAME";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["USERNAME"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["ES_REAL"] = "ES REAL";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["ES_REAL"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["COLOR_OJOS_ID"] = "COLOR OJOS ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["COLOR_OJOS_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["COLOR_PIEL_ID"] = "COLOR PIEL ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["COLOR_PIEL_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["CONTEXTURA_ID"] = "CONTEXTURA ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["CONTEXTURA_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["NIVEL_EDUCACION_ID"] = "NIVEL EDUCACION ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["NIVEL_EDUCACION_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["ESTADO_CIVIL_ID"] = "ESTADO CIVIL ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["ESTADO_CIVIL_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["FUMADOR_ID"] = "FUMADOR ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["FUMADOR_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["BEBEDOR_ID"] = "BEBEDOR ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["BEBEDOR_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["FRECUENCIA_EJERCICIO_ID"] = "FRECUENCIA EJERCICIO ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["FRECUENCIA_EJERCICIO_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["SALARIO_ID"] = "SALARIO ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["SALARIO_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["ALTURA"] = "ALTURA";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["ALTURA"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["PESO"] = "PESO";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["PESO"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["NUM_HIJOS"] = "NUM HIJOS";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["NUM_HIJOS"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["QUIERE_HIJOS"] = "QUIERE HIJOS";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["QUIERE_HIJOS"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["FEC_CREACION"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["USUARIO_ULTIMA_MOD"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE["Spanish"]["TIPO_RELACION_ID"] = "TIPO RELACION ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]["TIPO_RELACION_ID"] = "";
	if (count($fieldToolTipsGE_PERSONA_DISPONIBLE["Spanish"]))
		$tdataGE_PERSONA_DISPONIBLE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGE_PERSONA_DISPONIBLE[""] = array();
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""] = array();
	$pageTitlesGE_PERSONA_DISPONIBLE[""] = array();
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["USERNAME"] = "USERNAME";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["USERNAME"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["ES_REAL"] = "ES REAL";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["ES_REAL"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["COLOR_OJOS_ID"] = "COLOR OJOS ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["COLOR_OJOS_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["COLOR_PIEL_ID"] = "COLOR PIEL ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["COLOR_PIEL_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["CONTEXTURA_ID"] = "CONTEXTURA ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["CONTEXTURA_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["NIVEL_EDUCACION_ID"] = "NIVEL EDUCACION ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["NIVEL_EDUCACION_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["ESTADO_CIVIL_ID"] = "ESTADO CIVIL ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["ESTADO_CIVIL_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["FUMADOR_ID"] = "FUMADOR ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["FUMADOR_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["BEBEDOR_ID"] = "BEBEDOR ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["BEBEDOR_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["FRECUENCIA_EJERCICIO_ID"] = "FRECUENCIA EJERCICIO ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["FRECUENCIA_EJERCICIO_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["SALARIO_ID"] = "SALARIO ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["SALARIO_ID"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["ALTURA"] = "ALTURA";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["ALTURA"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["PESO"] = "PESO";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["PESO"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["NUM_HIJOS"] = "NUM HIJOS";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["NUM_HIJOS"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["QUIERE_HIJOS"] = "QUIERE HIJOS";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["QUIERE_HIJOS"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["FEC_CREACION"] = "FEC CREACION";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["FEC_CREACION"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["USUARIO_CREACION"] = "USUARIO CREACION";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["USUARIO_CREACION"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["FEC_ULTIMA_MOD"] = "FEC ULTIMA MOD";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["FEC_ULTIMA_MOD"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["USUARIO_ULTIMA_MOD"] = "USUARIO ULTIMA MOD";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["USUARIO_ULTIMA_MOD"] = "";
	$fieldLabelsGE_PERSONA_DISPONIBLE[""]["TIPO_RELACION_ID"] = "TIPO RELACION ID";
	$fieldToolTipsGE_PERSONA_DISPONIBLE[""]["TIPO_RELACION_ID"] = "";
	if (count($fieldToolTipsGE_PERSONA_DISPONIBLE[""]))
		$tdataGE_PERSONA_DISPONIBLE[".isUseToolTips"] = true;
}
	
	
	$tdataGE_PERSONA_DISPONIBLE[".NCSearch"] = true;



$tdataGE_PERSONA_DISPONIBLE[".shortTableName"] = "GE_PERSONA_DISPONIBLE";
$tdataGE_PERSONA_DISPONIBLE[".nSecOptions"] = 0;
$tdataGE_PERSONA_DISPONIBLE[".recsPerRowList"] = 1;
$tdataGE_PERSONA_DISPONIBLE[".mainTableOwnerID"] = "";
$tdataGE_PERSONA_DISPONIBLE[".moveNext"] = 1;
$tdataGE_PERSONA_DISPONIBLE[".nType"] = 0;

$tdataGE_PERSONA_DISPONIBLE[".strOriginalTableName"] = "GE.PERSONA_DISPONIBLE";




$tdataGE_PERSONA_DISPONIBLE[".showAddInPopup"] = false;

$tdataGE_PERSONA_DISPONIBLE[".showEditInPopup"] = false;

$tdataGE_PERSONA_DISPONIBLE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGE_PERSONA_DISPONIBLE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGE_PERSONA_DISPONIBLE[".fieldsForRegister"] = array();

$tdataGE_PERSONA_DISPONIBLE[".listAjax"] = false;

	$tdataGE_PERSONA_DISPONIBLE[".audit"] = false;

	$tdataGE_PERSONA_DISPONIBLE[".locking"] = false;

$tdataGE_PERSONA_DISPONIBLE[".edit"] = true;

$tdataGE_PERSONA_DISPONIBLE[".list"] = true;

$tdataGE_PERSONA_DISPONIBLE[".inlineEdit"] = true;
$tdataGE_PERSONA_DISPONIBLE[".inlineAdd"] = true;
$tdataGE_PERSONA_DISPONIBLE[".view"] = true;

$tdataGE_PERSONA_DISPONIBLE[".import"] = true;

$tdataGE_PERSONA_DISPONIBLE[".exportTo"] = true;

$tdataGE_PERSONA_DISPONIBLE[".printFriendly"] = true;

$tdataGE_PERSONA_DISPONIBLE[".delete"] = true;

$tdataGE_PERSONA_DISPONIBLE[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGE_PERSONA_DISPONIBLE[".searchSaving"] = false;
//

$tdataGE_PERSONA_DISPONIBLE[".showSearchPanel"] = true;
		$tdataGE_PERSONA_DISPONIBLE[".flexibleSearch"] = true;		

if (isMobile())
	$tdataGE_PERSONA_DISPONIBLE[".isUseAjaxSuggest"] = false;
else 
	$tdataGE_PERSONA_DISPONIBLE[".isUseAjaxSuggest"] = true;

$tdataGE_PERSONA_DISPONIBLE[".rowHighlite"] = true;



$tdataGE_PERSONA_DISPONIBLE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGE_PERSONA_DISPONIBLE[".isUseTimeForSearch"] = false;



$tdataGE_PERSONA_DISPONIBLE[".useDetailsPreview"] = true;


$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"] = array();
$tdataGE_PERSONA_DISPONIBLE[".filterFields"] = array();
$tdataGE_PERSONA_DISPONIBLE[".requiredSearchFields"] = array();

$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "USERNAME";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "ES_REAL";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "COLOR_OJOS_ID";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "COLOR_PIEL_ID";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "CONTEXTURA_ID";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "NIVEL_EDUCACION_ID";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "ESTADO_CIVIL_ID";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "FUMADOR_ID";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "BEBEDOR_ID";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "FRECUENCIA_EJERCICIO_ID";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "SALARIO_ID";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "ALTURA";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "PESO";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "NUM_HIJOS";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "QUIERE_HIJOS";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "FEC_CREACION";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "USUARIO_CREACION";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "FEC_ULTIMA_MOD";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "USUARIO_ULTIMA_MOD";
	$tdataGE_PERSONA_DISPONIBLE[".allSearchFields"][] = "TIPO_RELACION_ID";
	

$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"] = array();
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "USERNAME";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "ES_REAL";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "COLOR_OJOS_ID";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "COLOR_PIEL_ID";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "CONTEXTURA_ID";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "FUMADOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "BEBEDOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "SALARIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "ALTURA";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "PESO";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "NUM_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "QUIERE_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "FEC_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".googleLikeFields"][] = "TIPO_RELACION_ID";


$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"] = array();
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "USERNAME";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "ES_REAL";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "COLOR_OJOS_ID";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "COLOR_PIEL_ID";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "CONTEXTURA_ID";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "FUMADOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "BEBEDOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "SALARIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "ALTURA";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "PESO";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "NUM_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "QUIERE_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "FEC_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".advSearchFields"][] = "TIPO_RELACION_ID";

$tdataGE_PERSONA_DISPONIBLE[".tableType"] = "list";

$tdataGE_PERSONA_DISPONIBLE[".printerPageOrientation"] = 0;
$tdataGE_PERSONA_DISPONIBLE[".nPrinterPageScale"] = 100;

$tdataGE_PERSONA_DISPONIBLE[".nPrinterSplitRecords"] = 40;

$tdataGE_PERSONA_DISPONIBLE[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataGE_PERSONA_DISPONIBLE[".pageSize"] = 20;

$tdataGE_PERSONA_DISPONIBLE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGE_PERSONA_DISPONIBLE[".strOrderBy"] = $tstrOrderBy;

$tdataGE_PERSONA_DISPONIBLE[".orderindexes"] = array();

$tdataGE_PERSONA_DISPONIBLE[".sqlHead"] = "SELECT USERNAME,   ES_REAL,   COLOR_OJOS_ID,   COLOR_PIEL_ID,   CONTEXTURA_ID,   NIVEL_EDUCACION_ID,   ESTADO_CIVIL_ID,   FUMADOR_ID,   BEBEDOR_ID,   FRECUENCIA_EJERCICIO_ID,   SALARIO_ID,   ALTURA,   PESO,   NUM_HIJOS,   QUIERE_HIJOS,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD,   TIPO_RELACION_ID";
$tdataGE_PERSONA_DISPONIBLE[".sqlFrom"] = "FROM GE.PERSONA_DISPONIBLE";
$tdataGE_PERSONA_DISPONIBLE[".sqlWhereExpr"] = "";
$tdataGE_PERSONA_DISPONIBLE[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGE_PERSONA_DISPONIBLE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGE_PERSONA_DISPONIBLE[".arrGroupsPerPage"] = $arrGPP;

$tdataGE_PERSONA_DISPONIBLE[".highlightSearchResults"] = true;

$tableKeysGE_PERSONA_DISPONIBLE = array();
$tableKeysGE_PERSONA_DISPONIBLE[] = "USERNAME";
$tableKeysGE_PERSONA_DISPONIBLE[] = "ES_REAL";
$tdataGE_PERSONA_DISPONIBLE[".Keys"] = $tableKeysGE_PERSONA_DISPONIBLE;

$tdataGE_PERSONA_DISPONIBLE[".listFields"] = array();
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "USERNAME";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "ES_REAL";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "COLOR_OJOS_ID";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "COLOR_PIEL_ID";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "CONTEXTURA_ID";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "FUMADOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "BEBEDOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "SALARIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "ALTURA";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "PESO";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "NUM_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "QUIERE_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "FEC_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".listFields"][] = "TIPO_RELACION_ID";

$tdataGE_PERSONA_DISPONIBLE[".hideMobileList"] = array();


$tdataGE_PERSONA_DISPONIBLE[".viewFields"] = array();
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "USERNAME";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "ES_REAL";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "COLOR_OJOS_ID";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "COLOR_PIEL_ID";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "CONTEXTURA_ID";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "FUMADOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "BEBEDOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "SALARIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "ALTURA";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "PESO";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "NUM_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "QUIERE_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "FEC_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".viewFields"][] = "TIPO_RELACION_ID";

$tdataGE_PERSONA_DISPONIBLE[".addFields"] = array();
$tdataGE_PERSONA_DISPONIBLE[".addFields"][] = "USERNAME";
$tdataGE_PERSONA_DISPONIBLE[".addFields"][] = "ES_REAL";
$tdataGE_PERSONA_DISPONIBLE[".addFields"][] = "COLOR_OJOS_ID";
$tdataGE_PERSONA_DISPONIBLE[".addFields"][] = "COLOR_PIEL_ID";
$tdataGE_PERSONA_DISPONIBLE[".addFields"][] = "CONTEXTURA_ID";
$tdataGE_PERSONA_DISPONIBLE[".addFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_PERSONA_DISPONIBLE[".addFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_PERSONA_DISPONIBLE[".addFields"][] = "FUMADOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".addFields"][] = "BEBEDOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".addFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".addFields"][] = "SALARIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".addFields"][] = "ALTURA";
$tdataGE_PERSONA_DISPONIBLE[".addFields"][] = "PESO";
$tdataGE_PERSONA_DISPONIBLE[".addFields"][] = "NUM_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".addFields"][] = "QUIERE_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".addFields"][] = "TIPO_RELACION_ID";

$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"] = array();
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "USERNAME";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "ES_REAL";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "COLOR_OJOS_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "COLOR_PIEL_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "CONTEXTURA_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "FUMADOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "BEBEDOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "SALARIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "ALTURA";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "PESO";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "NUM_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "QUIERE_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "FEC_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".inlineAddFields"][] = "TIPO_RELACION_ID";

$tdataGE_PERSONA_DISPONIBLE[".editFields"] = array();
$tdataGE_PERSONA_DISPONIBLE[".editFields"][] = "USERNAME";
$tdataGE_PERSONA_DISPONIBLE[".editFields"][] = "ES_REAL";
$tdataGE_PERSONA_DISPONIBLE[".editFields"][] = "COLOR_OJOS_ID";
$tdataGE_PERSONA_DISPONIBLE[".editFields"][] = "COLOR_PIEL_ID";
$tdataGE_PERSONA_DISPONIBLE[".editFields"][] = "CONTEXTURA_ID";
$tdataGE_PERSONA_DISPONIBLE[".editFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_PERSONA_DISPONIBLE[".editFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_PERSONA_DISPONIBLE[".editFields"][] = "FUMADOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".editFields"][] = "BEBEDOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".editFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".editFields"][] = "SALARIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".editFields"][] = "ALTURA";
$tdataGE_PERSONA_DISPONIBLE[".editFields"][] = "PESO";
$tdataGE_PERSONA_DISPONIBLE[".editFields"][] = "NUM_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".editFields"][] = "QUIERE_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".editFields"][] = "TIPO_RELACION_ID";

$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"] = array();
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "USERNAME";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "ES_REAL";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "COLOR_OJOS_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "COLOR_PIEL_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "CONTEXTURA_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "FUMADOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "BEBEDOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "SALARIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "ALTURA";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "PESO";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "NUM_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "QUIERE_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "FEC_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".inlineEditFields"][] = "TIPO_RELACION_ID";

$tdataGE_PERSONA_DISPONIBLE[".exportFields"] = array();
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "USERNAME";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "ES_REAL";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "COLOR_OJOS_ID";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "COLOR_PIEL_ID";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "CONTEXTURA_ID";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "FUMADOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "BEBEDOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "SALARIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "ALTURA";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "PESO";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "NUM_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "QUIERE_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "FEC_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".exportFields"][] = "TIPO_RELACION_ID";

$tdataGE_PERSONA_DISPONIBLE[".importFields"] = array();
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "USERNAME";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "ES_REAL";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "COLOR_OJOS_ID";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "COLOR_PIEL_ID";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "CONTEXTURA_ID";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "FUMADOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "BEBEDOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "SALARIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "ALTURA";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "PESO";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "NUM_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "QUIERE_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "FEC_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".importFields"][] = "TIPO_RELACION_ID";

$tdataGE_PERSONA_DISPONIBLE[".printFields"] = array();
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "USERNAME";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "ES_REAL";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "COLOR_OJOS_ID";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "COLOR_PIEL_ID";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "CONTEXTURA_ID";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "NIVEL_EDUCACION_ID";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "ESTADO_CIVIL_ID";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "FUMADOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "BEBEDOR_ID";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "FRECUENCIA_EJERCICIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "SALARIO_ID";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "ALTURA";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "PESO";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "NUM_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "QUIERE_HIJOS";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "FEC_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "USUARIO_CREACION";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "FEC_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "USUARIO_ULTIMA_MOD";
$tdataGE_PERSONA_DISPONIBLE[".printFields"][] = "TIPO_RELACION_ID";

//	USERNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "USERNAME";
	$fdata["GoodName"] = "USERNAME";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","USERNAME"); 
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

	

	
	$tdataGE_PERSONA_DISPONIBLE["USERNAME"] = $fdata;
//	ES_REAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ES_REAL";
	$fdata["GoodName"] = "ES_REAL";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","ES_REAL"); 
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
	
		$fdata["strField"] = "ES_REAL"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ES_REAL";
	
		
		
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

	

	
	$tdataGE_PERSONA_DISPONIBLE["ES_REAL"] = $fdata;
//	COLOR_OJOS_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "COLOR_OJOS_ID";
	$fdata["GoodName"] = "COLOR_OJOS_ID";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","COLOR_OJOS_ID"); 
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
	
		$fdata["strField"] = "COLOR_OJOS_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COLOR_OJOS_ID";
	
		
		
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
	$edata["LookupTable"] = "GE.COLOR_OJOS";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "COLOR_OJOS_ID";
	$edata["LinkFieldType"] = 14;
	$edata["DisplayField"] = "COLOR_OJOS_ID";
	
		
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

	

	
	$tdataGE_PERSONA_DISPONIBLE["COLOR_OJOS_ID"] = $fdata;
//	COLOR_PIEL_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "COLOR_PIEL_ID";
	$fdata["GoodName"] = "COLOR_PIEL_ID";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","COLOR_PIEL_ID"); 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "GE.COLOR_PIEL";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "COLOR_PIEL_ID";
	$edata["LinkFieldType"] = 14;
	$edata["DisplayField"] = "COLOR_PIEL_ID";
	
		
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

	

	
	$tdataGE_PERSONA_DISPONIBLE["COLOR_PIEL_ID"] = $fdata;
//	CONTEXTURA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CONTEXTURA_ID";
	$fdata["GoodName"] = "CONTEXTURA_ID";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","CONTEXTURA_ID"); 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "GE.CONTEXTURA";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "CONTEXTURA_ID";
	$edata["LinkFieldType"] = 14;
	$edata["DisplayField"] = "CONTEXTURA_ID";
	
		
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

	

	
	$tdataGE_PERSONA_DISPONIBLE["CONTEXTURA_ID"] = $fdata;
//	NIVEL_EDUCACION_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NIVEL_EDUCACION_ID";
	$fdata["GoodName"] = "NIVEL_EDUCACION_ID";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","NIVEL_EDUCACION_ID"); 
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
	
		$fdata["strField"] = "NIVEL_EDUCACION_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NIVEL_EDUCACION_ID";
	
		
		
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
	$edata["LookupTable"] = "GE.NIVEL_EDUCACION";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "NIVEL_EDUCACION_ID";
	$edata["LinkFieldType"] = 14;
	$edata["DisplayField"] = "NIVEL_EDUCACION_ID";
	
		
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

	

	
	$tdataGE_PERSONA_DISPONIBLE["NIVEL_EDUCACION_ID"] = $fdata;
//	ESTADO_CIVIL_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ESTADO_CIVIL_ID";
	$fdata["GoodName"] = "ESTADO_CIVIL_ID";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","ESTADO_CIVIL_ID"); 
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
	
		$fdata["strField"] = "ESTADO_CIVIL_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ESTADO_CIVIL_ID";
	
		
		
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
	$edata["LookupTable"] = "GE.ESTADO_CIVIL";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "ESTADO_CIVIL_ID";
	$edata["LinkFieldType"] = 14;
	$edata["DisplayField"] = "ESTADO_CIVIL_ID";
	
		
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

	

	
	$tdataGE_PERSONA_DISPONIBLE["ESTADO_CIVIL_ID"] = $fdata;
//	FUMADOR_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "FUMADOR_ID";
	$fdata["GoodName"] = "FUMADOR_ID";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","FUMADOR_ID"); 
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
	
		$fdata["strField"] = "FUMADOR_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FUMADOR_ID";
	
		
		
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
	$edata["LookupTable"] = "GE.FUMADOR";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "FUMADOR_ID";
	$edata["LinkFieldType"] = 14;
	$edata["DisplayField"] = "FUMADOR_ID";
	
		
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

	

	
	$tdataGE_PERSONA_DISPONIBLE["FUMADOR_ID"] = $fdata;
//	BEBEDOR_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "BEBEDOR_ID";
	$fdata["GoodName"] = "BEBEDOR_ID";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","BEBEDOR_ID"); 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "GE.BEBEDOR";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "BEBEDOR_ID";
	$edata["LinkFieldType"] = 14;
	$edata["DisplayField"] = "BEBEDOR_ID";
	
		
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

	

	
	$tdataGE_PERSONA_DISPONIBLE["BEBEDOR_ID"] = $fdata;
//	FRECUENCIA_EJERCICIO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FRECUENCIA_EJERCICIO_ID";
	$fdata["GoodName"] = "FRECUENCIA_EJERCICIO_ID";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","FRECUENCIA_EJERCICIO_ID"); 
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
	
		$fdata["strField"] = "FRECUENCIA_EJERCICIO_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FRECUENCIA_EJERCICIO_ID";
	
		
		
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
	$edata["LookupTable"] = "GE.FRECUENCIA_EJERCICIO";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "FRECUENCIA_EJERCICIO_ID";
	$edata["LinkFieldType"] = 14;
	$edata["DisplayField"] = "FRECUENCIA_EJERCICIO_ID";
	
		
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

	

	
	$tdataGE_PERSONA_DISPONIBLE["FRECUENCIA_EJERCICIO_ID"] = $fdata;
//	SALARIO_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "SALARIO_ID";
	$fdata["GoodName"] = "SALARIO_ID";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","SALARIO_ID"); 
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
	
		$fdata["strField"] = "SALARIO_ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SALARIO_ID";
	
		
		
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
	$edata["LookupTable"] = "GE.SALARIO";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "SALARIO_ID";
	$edata["LinkFieldType"] = 14;
	$edata["DisplayField"] = "SALARIO_ID";
	
		
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

	

	
	$tdataGE_PERSONA_DISPONIBLE["SALARIO_ID"] = $fdata;
//	ALTURA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ALTURA";
	$fdata["GoodName"] = "ALTURA";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","ALTURA"); 
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
	
		$fdata["strField"] = "ALTURA"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ALTURA";
	
		
		
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
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataGE_PERSONA_DISPONIBLE["ALTURA"] = $fdata;
//	PESO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PESO";
	$fdata["GoodName"] = "PESO";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","PESO"); 
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
	
		$fdata["strField"] = "PESO"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PESO";
	
		
		
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
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataGE_PERSONA_DISPONIBLE["PESO"] = $fdata;
//	NUM_HIJOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "NUM_HIJOS";
	$fdata["GoodName"] = "NUM_HIJOS";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","NUM_HIJOS"); 
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
	
		$fdata["strField"] = "NUM_HIJOS"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NUM_HIJOS";
	
		
		
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
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataGE_PERSONA_DISPONIBLE["NUM_HIJOS"] = $fdata;
//	QUIERE_HIJOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "QUIERE_HIJOS";
	$fdata["GoodName"] = "QUIERE_HIJOS";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","QUIERE_HIJOS"); 
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
	
		$fdata["strField"] = "QUIERE_HIJOS"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QUIERE_HIJOS";
	
		
		
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

	

	
	$tdataGE_PERSONA_DISPONIBLE["QUIERE_HIJOS"] = $fdata;
//	FEC_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "FEC_CREACION";
	$fdata["GoodName"] = "FEC_CREACION";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","FEC_CREACION"); 
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

	

	
	$tdataGE_PERSONA_DISPONIBLE["FEC_CREACION"] = $fdata;
//	USUARIO_CREACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "USUARIO_CREACION";
	$fdata["GoodName"] = "USUARIO_CREACION";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","USUARIO_CREACION"); 
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

	

	
	$tdataGE_PERSONA_DISPONIBLE["USUARIO_CREACION"] = $fdata;
//	FEC_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "FEC_ULTIMA_MOD";
	$fdata["GoodName"] = "FEC_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","FEC_ULTIMA_MOD"); 
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

	

	
	$tdataGE_PERSONA_DISPONIBLE["FEC_ULTIMA_MOD"] = $fdata;
//	USUARIO_ULTIMA_MOD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "USUARIO_ULTIMA_MOD";
	$fdata["GoodName"] = "USUARIO_ULTIMA_MOD";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","USUARIO_ULTIMA_MOD"); 
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

	

	
	$tdataGE_PERSONA_DISPONIBLE["USUARIO_ULTIMA_MOD"] = $fdata;
//	TIPO_RELACION_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "TIPO_RELACION_ID";
	$fdata["GoodName"] = "TIPO_RELACION_ID";
	$fdata["ownerTable"] = "GE.PERSONA_DISPONIBLE";
	$fdata["Label"] = GetFieldLabel("GE_PERSONA_DISPONIBLE","TIPO_RELACION_ID"); 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "GE.TIPO_RELACION";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "TIPO_RELACION_ID";
	$edata["LinkFieldType"] = 14;
	$edata["DisplayField"] = "TIPO_RELACION_ID";
	
		
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

	

	
	$tdataGE_PERSONA_DISPONIBLE["TIPO_RELACION_ID"] = $fdata;

	
$tables_data["GE.PERSONA_DISPONIBLE"]=&$tdataGE_PERSONA_DISPONIBLE;
$field_labels["GE_PERSONA_DISPONIBLE"] = &$fieldLabelsGE_PERSONA_DISPONIBLE;
$fieldToolTips["GE.PERSONA_DISPONIBLE"] = &$fieldToolTipsGE_PERSONA_DISPONIBLE;
$page_titles["GE_PERSONA_DISPONIBLE"] = &$pageTitlesGE_PERSONA_DISPONIBLE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GE.PERSONA_DISPONIBLE"] = array();
//	GE.PERSONA_DISPONIBLEXEJERCICIO
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.PERSONA_DISPONIBLEXEJERCICIO";
		$detailsParam["dOriginalTable"] = "GE.PERSONA_DISPONIBLEXEJERCICIO";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_PERSONA_DISPONIBLEXEJERCICIO";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"][]="USERNAME";

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"][]="ES_REAL";

				$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"][]="USERNAME";

		
	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"][]="ES_REAL";
//	GE.PERSONA_DISPONIBLEXCOLOR_PELO
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.PERSONA_DISPONIBLEXCOLOR_PELO";
		$detailsParam["dOriginalTable"] = "GE.PERSONA_DISPONIBLEXCOLOR_PELO";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_PERSONA_DISPONIBLEXCOLOR_PELO";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"][]="ES_REAL";

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"][]="USERNAME";

				$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"][]="ES_REAL";

		
	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"][]="USERNAME";
//	GE.PERSONA_DISPONIBLEXIDIOMA
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.PERSONA_DISPONIBLEXIDIOMA";
		$detailsParam["dOriginalTable"] = "GE.PERSONA_DISPONIBLEXIDIOMA";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_PERSONA_DISPONIBLEXIDIOMA";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"][]="USERNAME";

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"][]="ES_REAL";

				$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"][]="USERNAME";

		
	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"][]="ES_REAL";
//	GE.PERSONA_DISPONIBLEXOCUPACION
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.PERSONA_DISPONIBLEXOCUPACION";
		$detailsParam["dOriginalTable"] = "GE.PERSONA_DISPONIBLEXOCUPACION";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_PERSONA_DISPONIBLEXOCUPACION";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"][]="ES_REAL";

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"][]="USERNAME";

				$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"][]="ES_REAL";

		
	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"][]="USERNAME";
//	GE.PERSONA_DISPONIBLEXRELIGION
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.PERSONA_DISPONIBLEXRELIGION";
		$detailsParam["dOriginalTable"] = "GE.PERSONA_DISPONIBLEXRELIGION";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_PERSONA_DISPONIBLEXRELIGION";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"][]="USERNAME";

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"][]="ES_REAL";

				$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"][]="USERNAME";

		
	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"][]="ES_REAL";
//	GE.PERSONA_DISPONIBLEXINTERES
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="GE.PERSONA_DISPONIBLEXINTERES";
		$detailsParam["dOriginalTable"] = "GE.PERSONA_DISPONIBLEXINTERES";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "GE_PERSONA_DISPONIBLEXINTERES";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"][]="ES_REAL";

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"][]="USERNAME";

				$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"][]="ES_REAL";

		
	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"][]="USERNAME";
//	GE.PERSONA_DISPONIBLEXMASCOTA
	
	

		$dIndex = 6;
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
			
	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"][]="USERNAME";

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["masterKeys"][]="ES_REAL";

				$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"][]="USERNAME";

		
	$detailsTablesData["GE.PERSONA_DISPONIBLE"][$dIndex]["detailKeys"][]="ES_REAL";
	
// tables which are master tables for current table (detail)
$masterTablesData["GE.PERSONA_DISPONIBLE"] = array();


	
				$strOriginalDetailsTable="GE.BEBEDOR";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="GE.BEBEDOR";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "GE_BEBEDOR";
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
					$masterTablesData["GE.PERSONA_DISPONIBLE"][0] = $masterParams;	
				$masterTablesData["GE.PERSONA_DISPONIBLE"][0]["masterKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][0]["masterKeys"][]="BEBEDOR_ID";
				$masterTablesData["GE.PERSONA_DISPONIBLE"][0]["detailKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][0]["detailKeys"][]="BEBEDOR_ID";
		
	
				$strOriginalDetailsTable="GE.FRECUENCIA_EJERCICIO";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="GE.FRECUENCIA_EJERCICIO";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "GE_FRECUENCIA_EJERCICIO";
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
					$masterTablesData["GE.PERSONA_DISPONIBLE"][1] = $masterParams;	
				$masterTablesData["GE.PERSONA_DISPONIBLE"][1]["masterKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][1]["masterKeys"][]="FRECUENCIA_EJERCICIO_ID";
				$masterTablesData["GE.PERSONA_DISPONIBLE"][1]["detailKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][1]["detailKeys"][]="FRECUENCIA_EJERCICIO_ID";
		
	
				$strOriginalDetailsTable="GE.SALARIO";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="GE.SALARIO";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "GE_SALARIO";
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
					$masterTablesData["GE.PERSONA_DISPONIBLE"][2] = $masterParams;	
				$masterTablesData["GE.PERSONA_DISPONIBLE"][2]["masterKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][2]["masterKeys"][]="SALARIO_ID";
				$masterTablesData["GE.PERSONA_DISPONIBLE"][2]["detailKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][2]["detailKeys"][]="SALARIO_ID";
		
	
				$strOriginalDetailsTable="GE.COLOR_OJOS";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="GE.COLOR_OJOS";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "GE_COLOR_OJOS";
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
					$masterTablesData["GE.PERSONA_DISPONIBLE"][3] = $masterParams;	
				$masterTablesData["GE.PERSONA_DISPONIBLE"][3]["masterKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][3]["masterKeys"][]="COLOR_OJOS_ID";
				$masterTablesData["GE.PERSONA_DISPONIBLE"][3]["detailKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][3]["detailKeys"][]="COLOR_OJOS_ID";
		
	
				$strOriginalDetailsTable="GE.NIVEL_EDUCACION";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="GE.NIVEL_EDUCACION";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "GE_NIVEL_EDUCACION";
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
					$masterTablesData["GE.PERSONA_DISPONIBLE"][4] = $masterParams;	
				$masterTablesData["GE.PERSONA_DISPONIBLE"][4]["masterKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][4]["masterKeys"][]="NIVEL_EDUCACION_ID";
				$masterTablesData["GE.PERSONA_DISPONIBLE"][4]["detailKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][4]["detailKeys"][]="NIVEL_EDUCACION_ID";
		
	
				$strOriginalDetailsTable="GE.FUMADOR";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="GE.FUMADOR";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "GE_FUMADOR";
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
					$masterTablesData["GE.PERSONA_DISPONIBLE"][5] = $masterParams;	
				$masterTablesData["GE.PERSONA_DISPONIBLE"][5]["masterKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][5]["masterKeys"][]="FUMADOR_ID";
				$masterTablesData["GE.PERSONA_DISPONIBLE"][5]["detailKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][5]["detailKeys"][]="FUMADOR_ID";
		
	
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
					$masterTablesData["GE.PERSONA_DISPONIBLE"][6] = $masterParams;	
				$masterTablesData["GE.PERSONA_DISPONIBLE"][6]["masterKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][6]["masterKeys"][]="USERNAME";
				$masterTablesData["GE.PERSONA_DISPONIBLE"][6]["detailKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][6]["detailKeys"][]="USERNAME";
		
	
				$strOriginalDetailsTable="GE.ESTADO_CIVIL";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="GE.ESTADO_CIVIL";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "GE_ESTADO_CIVIL";
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
					$masterTablesData["GE.PERSONA_DISPONIBLE"][7] = $masterParams;	
				$masterTablesData["GE.PERSONA_DISPONIBLE"][7]["masterKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][7]["masterKeys"][]="ESTADO_CIVIL_ID";
				$masterTablesData["GE.PERSONA_DISPONIBLE"][7]["detailKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][7]["detailKeys"][]="ESTADO_CIVIL_ID";
		
	
				$strOriginalDetailsTable="GE.COLOR_PIEL";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="GE.COLOR_PIEL";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "GE_COLOR_PIEL";
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
					$masterTablesData["GE.PERSONA_DISPONIBLE"][8] = $masterParams;	
				$masterTablesData["GE.PERSONA_DISPONIBLE"][8]["masterKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][8]["masterKeys"][]="COLOR_PIEL_ID";
				$masterTablesData["GE.PERSONA_DISPONIBLE"][8]["detailKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][8]["detailKeys"][]="COLOR_PIEL_ID";
		
	
				$strOriginalDetailsTable="GE.CONTEXTURA";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="GE.CONTEXTURA";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "GE_CONTEXTURA";
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
					$masterTablesData["GE.PERSONA_DISPONIBLE"][9] = $masterParams;	
				$masterTablesData["GE.PERSONA_DISPONIBLE"][9]["masterKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][9]["masterKeys"][]="CONTEXTURA_ID";
				$masterTablesData["GE.PERSONA_DISPONIBLE"][9]["detailKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][9]["detailKeys"][]="CONTEXTURA_ID";
		
	
				$strOriginalDetailsTable="GE.TIPO_RELACION";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="GE.TIPO_RELACION";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "GE_TIPO_RELACION";
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
					$masterTablesData["GE.PERSONA_DISPONIBLE"][10] = $masterParams;	
				$masterTablesData["GE.PERSONA_DISPONIBLE"][10]["masterKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][10]["masterKeys"][]="TIPO_RELACION_ID";
				$masterTablesData["GE.PERSONA_DISPONIBLE"][10]["detailKeys"] = array();
	$masterTablesData["GE.PERSONA_DISPONIBLE"][10]["detailKeys"][]="TIPO_RELACION_ID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GE_PERSONA_DISPONIBLE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "USERNAME,   ES_REAL,   COLOR_OJOS_ID,   COLOR_PIEL_ID,   CONTEXTURA_ID,   NIVEL_EDUCACION_ID,   ESTADO_CIVIL_ID,   FUMADOR_ID,   BEBEDOR_ID,   FRECUENCIA_EJERCICIO_ID,   SALARIO_ID,   ALTURA,   PESO,   NUM_HIJOS,   QUIERE_HIJOS,   FEC_CREACION,   USUARIO_CREACION,   FEC_ULTIMA_MOD,   USUARIO_ULTIMA_MOD,   TIPO_RELACION_ID";
$proto0["m_strFrom"] = "FROM GE.PERSONA_DISPONIBLE";
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
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto5["m_sql"] = "USERNAME";
$proto5["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ES_REAL",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto7["m_sql"] = "ES_REAL";
$proto7["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "COLOR_OJOS_ID",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto9["m_sql"] = "COLOR_OJOS_ID";
$proto9["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "COLOR_PIEL_ID",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto11["m_sql"] = "COLOR_PIEL_ID";
$proto11["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "CONTEXTURA_ID",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto13["m_sql"] = "CONTEXTURA_ID";
$proto13["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "NIVEL_EDUCACION_ID",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto15["m_sql"] = "NIVEL_EDUCACION_ID";
$proto15["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "ESTADO_CIVIL_ID",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto17["m_sql"] = "ESTADO_CIVIL_ID";
$proto17["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "FUMADOR_ID",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto19["m_sql"] = "FUMADOR_ID";
$proto19["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "BEBEDOR_ID",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto21["m_sql"] = "BEBEDOR_ID";
$proto21["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "FRECUENCIA_EJERCICIO_ID",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto23["m_sql"] = "FRECUENCIA_EJERCICIO_ID";
$proto23["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "SALARIO_ID",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto25["m_sql"] = "SALARIO_ID";
$proto25["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "ALTURA",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto27["m_sql"] = "ALTURA";
$proto27["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "PESO",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto29["m_sql"] = "PESO";
$proto29["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "NUM_HIJOS",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto31["m_sql"] = "NUM_HIJOS";
$proto31["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "QUIERE_HIJOS",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto33["m_sql"] = "QUIERE_HIJOS";
$proto33["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_CREACION",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto35["m_sql"] = "FEC_CREACION";
$proto35["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_CREACION",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto37["m_sql"] = "USUARIO_CREACION";
$proto37["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "FEC_ULTIMA_MOD",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto39["m_sql"] = "FEC_ULTIMA_MOD";
$proto39["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_ULTIMA_MOD",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto41["m_sql"] = "USUARIO_ULTIMA_MOD";
$proto41["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO_RELACION_ID",
	"m_strTable" => "GE.PERSONA_DISPONIBLE",
	"m_srcTableName" => "GE.PERSONA_DISPONIBLE"
));

$proto43["m_sql"] = "TIPO_RELACION_ID";
$proto43["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto45=array();
$proto45["m_link"] = "SQLL_MAIN";
			$proto46=array();
$proto46["m_strName"] = "GE.PERSONA_DISPONIBLE";
$proto46["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "USERNAME";
$proto46["m_columns"][] = "ES_REAL";
$proto46["m_columns"][] = "COLOR_OJOS_ID";
$proto46["m_columns"][] = "COLOR_PIEL_ID";
$proto46["m_columns"][] = "CONTEXTURA_ID";
$proto46["m_columns"][] = "NIVEL_EDUCACION_ID";
$proto46["m_columns"][] = "ESTADO_CIVIL_ID";
$proto46["m_columns"][] = "FUMADOR_ID";
$proto46["m_columns"][] = "BEBEDOR_ID";
$proto46["m_columns"][] = "FRECUENCIA_EJERCICIO_ID";
$proto46["m_columns"][] = "SALARIO_ID";
$proto46["m_columns"][] = "ALTURA";
$proto46["m_columns"][] = "PESO";
$proto46["m_columns"][] = "NUM_HIJOS";
$proto46["m_columns"][] = "QUIERE_HIJOS";
$proto46["m_columns"][] = "FEC_CREACION";
$proto46["m_columns"][] = "USUARIO_CREACION";
$proto46["m_columns"][] = "FEC_ULTIMA_MOD";
$proto46["m_columns"][] = "USUARIO_ULTIMA_MOD";
$proto46["m_columns"][] = "TIPO_RELACION_ID";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "GE.PERSONA_DISPONIBLE";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "GE.PERSONA_DISPONIBLE";
$proto47=array();
$proto47["m_sql"] = "";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="GE.PERSONA_DISPONIBLE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GE_PERSONA_DISPONIBLE = createSqlQuery_GE_PERSONA_DISPONIBLE();


	
																				
	
$tdataGE_PERSONA_DISPONIBLE[".sqlquery"] = $queryData_GE_PERSONA_DISPONIBLE;

$tableEvents["GE.PERSONA_DISPONIBLE"] = new eventsBase;
$tdataGE_PERSONA_DISPONIBLE[".hasEvents"] = false;

?>
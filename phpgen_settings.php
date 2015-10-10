<?php

//  define('SHOW_VARIABLES', 1);
//  define('DEBUG_LEVEL', 1);

//  error_reporting(E_ALL ^ E_NOTICE);
//  ini_set('display_errors', 'On');

set_include_path('.' . PATH_SEPARATOR . get_include_path());


include_once dirname(__FILE__) . '/' . 'components/utils/system_utils.php';

//  SystemUtils::DisableMagicQuotesRuntime();

SystemUtils::SetTimeZoneIfNeed('America/Tegucigalpa');

function GetGlobalConnectionOptions()
{
    return array(
  'username' => 'ge',
  'password' => 'ge',
  'database' => 'MATCH'
);
}

function HasAdminPage()
{
    return false;
}

function GetPageGroups()
{
    $result = array('Default');
    return $result;
}

function GetPageInfos()
{
    $result = array();
    $result[] = array('caption' => 'BEBEDOR', 'short_caption' => 'BEBEDOR', 'filename' => 'GE.BEBEDOR.php', 'name' => 'GE.BEBEDOR', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'CATEGORIA INTERES', 'short_caption' => 'CATEGORIA INTERES', 'filename' => 'GE.CATEGORIA_INTERES.php', 'name' => 'GE.CATEGORIA_INTERES', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'CIUDAD', 'short_caption' => 'CIUDAD', 'filename' => 'GE.CIUDAD.php', 'name' => 'GE.CIUDAD', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'COLOR OJOS', 'short_caption' => 'COLOR OJOS', 'filename' => 'GE.COLOR_OJOS.php', 'name' => 'GE.COLOR_OJOS', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'Webreports', 'short_caption' => 'Webreports', 'filename' => 'GE.webreports.php', 'name' => 'GE.webreports', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'Webreport Style', 'short_caption' => 'Webreport Style', 'filename' => 'GE.webreport_style.php', 'name' => 'GE.webreport_style', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'Webreport Sql', 'short_caption' => 'Webreport Sql', 'filename' => 'GE.webreport_sql.php', 'name' => 'GE.webreport_sql', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'WINK', 'short_caption' => 'WINK', 'filename' => 'GE.WINK.php', 'name' => 'GE.WINK', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'Webreport Admin', 'short_caption' => 'Webreport Admin', 'filename' => 'GE.webreport_admin.php', 'name' => 'GE.webreport_admin', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'VISITA', 'short_caption' => 'VISITA', 'filename' => 'GE.VISITA.php', 'name' => 'GE.VISITA', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'TIPO RELACION', 'short_caption' => 'TIPO RELACION', 'filename' => 'GE.TIPO_RELACION.php', 'name' => 'GE.TIPO_RELACION', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'SALARIO', 'short_caption' => 'SALARIO', 'filename' => 'GE.SALARIO.php', 'name' => 'GE.SALARIO', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'RELIGION', 'short_caption' => 'RELIGION', 'filename' => 'GE.RELIGION.php', 'name' => 'GE.RELIGION', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'PERSONA DISPONIBLEXRELIGION', 'short_caption' => 'PERSONA DISPONIBLEXRELIGION', 'filename' => 'GE.PERSONA_DISPONIBLEXRELIGION.php', 'name' => 'GE.PERSONA_DISPONIBLEXRELIGION', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'PERSONA DISPONIBLEXOCUPACION', 'short_caption' => 'PERSONA DISPONIBLEXOCUPACION', 'filename' => 'GE.PERSONA_DISPONIBLEXOCUPACION.php', 'name' => 'GE.PERSONA_DISPONIBLEXOCUPACION', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'PERSONA DISPONIBLEXMASCOTA', 'short_caption' => 'PERSONA DISPONIBLEXMASCOTA', 'filename' => 'GE.PERSONA_DISPONIBLEXMASCOTA.php', 'name' => 'GE.PERSONA_DISPONIBLEXMASCOTA', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'PERSONA DISPONIBLEXINTERES', 'short_caption' => 'PERSONA DISPONIBLEXINTERES', 'filename' => 'GE.PERSONA_DISPONIBLEXINTERES.php', 'name' => 'GE.PERSONA_DISPONIBLEXINTERES', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'PERSONA DISPONIBLEXEJERCICIO', 'short_caption' => 'PERSONA DISPONIBLEXEJERCICIO', 'filename' => 'GE.PERSONA_DISPONIBLEXEJERCICIO.php', 'name' => 'GE.PERSONA_DISPONIBLEXEJERCICIO', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'PERSONA DISPONIBLEXCOLOR PELO', 'short_caption' => 'PERSONA DISPONIBLEXCOLOR PELO', 'filename' => 'GE.PERSONA_DISPONIBLEXCOLOR_PELO.php', 'name' => 'GE.PERSONA_DISPONIBLEXCOLOR_PELO', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'PERSONA DISPONIBLEXIDIOMA', 'short_caption' => 'PERSONA DISPONIBLEXIDIOMA', 'filename' => 'GE.PERSONA_DISPONIBLEXIDIOMA.php', 'name' => 'GE.PERSONA_DISPONIBLEXIDIOMA', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'PERSONA DISPONIBLE', 'short_caption' => 'PERSONA DISPONIBLE', 'filename' => 'GE.PERSONA_DISPONIBLE.php', 'name' => 'GE.PERSONA_DISPONIBLE', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'PERSONA', 'short_caption' => 'PERSONA', 'filename' => 'GE.PERSONA.php', 'name' => 'GE.PERSONA', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'PARAMETROS', 'short_caption' => 'PARAMETROS', 'filename' => 'GE.PARAMETROS.php', 'name' => 'GE.PARAMETROS', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'PAIS', 'short_caption' => 'PAIS', 'filename' => 'GE.PAIS.php', 'name' => 'GE.PAIS', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'OCUPACIONXCATEGORIA OCUPACION', 'short_caption' => 'OCUPACIONXCATEGORIA OCUPACION', 'filename' => 'GE.OCUPACIONXCATEGORIA_OCUPACION.php', 'name' => 'GE.OCUPACIONXCATEGORIA_OCUPACION', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'OCUPACION', 'short_caption' => 'OCUPACION', 'filename' => 'GE.OCUPACION.php', 'name' => 'GE.OCUPACION', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'MASCOTA', 'short_caption' => 'MASCOTA', 'filename' => 'GE.MASCOTA.php', 'name' => 'GE.MASCOTA', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'NIVEL EDUCACION', 'short_caption' => 'NIVEL EDUCACION', 'filename' => 'GE.NIVEL_EDUCACION.php', 'name' => 'GE.NIVEL_EDUCACION', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'INTERESXCATEGORIA INTERES', 'short_caption' => 'INTERESXCATEGORIA INTERES', 'filename' => 'GE.INTERESXCATEGORIA_INTERES.php', 'name' => 'GE.INTERESXCATEGORIA_INTERES', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'INTERES', 'short_caption' => 'INTERES', 'filename' => 'GE.INTERES.php', 'name' => 'GE.INTERES', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'IDIOMA', 'short_caption' => 'IDIOMA', 'filename' => 'GE.IDIOMA.php', 'name' => 'GE.IDIOMA', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'GENERO', 'short_caption' => 'GENERO', 'filename' => 'GE.GENERO.php', 'name' => 'GE.GENERO', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'FUMADOR', 'short_caption' => 'FUMADOR', 'filename' => 'GE.FUMADOR.php', 'name' => 'GE.FUMADOR', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'FRECUENCIA EJERCICIO', 'short_caption' => 'FRECUENCIA EJERCICIO', 'filename' => 'GE.FRECUENCIA_EJERCICIO.php', 'name' => 'GE.FRECUENCIA_EJERCICIO', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'EVENTO', 'short_caption' => 'EVENTO', 'filename' => 'GE.EVENTO.php', 'name' => 'GE.EVENTO', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'FOTO', 'short_caption' => 'FOTO', 'filename' => 'GE.FOTO.php', 'name' => 'GE.FOTO', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'ESTADO CIVIL', 'short_caption' => 'ESTADO CIVIL', 'filename' => 'GE.ESTADO_CIVIL.php', 'name' => 'GE.ESTADO_CIVIL', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'EJERCICIO', 'short_caption' => 'EJERCICIO', 'filename' => 'GE.EJERCICIO.php', 'name' => 'GE.EJERCICIO', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'EDAD', 'short_caption' => 'EDAD', 'filename' => 'GE.EDAD.php', 'name' => 'GE.EDAD', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'CONTEXTURA', 'short_caption' => 'CONTEXTURA', 'filename' => 'GE.CONTEXTURA.php', 'name' => 'GE.CONTEXTURA', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'COLOR PIEL', 'short_caption' => 'COLOR PIEL', 'filename' => 'GE.COLOR_PIEL.php', 'name' => 'GE.COLOR_PIEL', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'COLOR PELO', 'short_caption' => 'COLOR PELO', 'filename' => 'GE.COLOR_PELO.php', 'name' => 'GE.COLOR_PELO', 'group_name' => 'Default', 'add_separator' => false);
    $result[] = array('caption' => 'CATEGORIA OCUPACION', 'short_caption' => 'CATEGORIA OCUPACION', 'filename' => 'GE.CATEGORIA_OCUPACION.php', 'name' => 'GE.CATEGORIA_OCUPACION', 'group_name' => 'Default', 'add_separator' => false);
    return $result;
}

function GetPagesHeader()
{
    return
    '        <link rel="shortcut icon" href="images\favicon.ico" >
   		<link rel="icon" type="image/gif" href="images\animated_favicon1.gif" >
<title>MatchMe.com - Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="ConsultasAdmin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>

      <div class="logo">
        <h1><a href="PantallaInicio.PHP"><span>Match</span>Me.com<small>Free Dating website</small></a> </h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li><a href="PantallaAdmin.PHP">Inicio</a></li>
          <li><a href="GE.PERSONA.PHP">Agregar Administrador</a></li>
          <li><a href="GE.EVENTO.PHP">Crear Evento</a></li>
        <li><a href="GE.BEBEDOR.PHP">Modificar Formulario</a></li>
          <li class="active"><a href="GE.BEBEDOR.PHP">Consultar Usuarios</a></li>
          <li><a href="index.PHP">Salir</a></li>
        </ul>
        <div class="clr"></div>
      </div>';
}

function GetPagesFooter()
{
    return
        ''; 
    }

function ApplyCommonPageSettings(Page $page, Grid $grid)
{
    $page->SetShowUserAuthBar(false);
    $page->OnCustomHTMLHeader->AddListener('Global_CustomHTMLHeaderHandler');
    $page->OnGetCustomTemplate->AddListener('Global_GetCustomTemplateHandler');
    $grid->BeforeUpdateRecord->AddListener('Global_BeforeUpdateHandler');
    $grid->BeforeDeleteRecord->AddListener('Global_BeforeDeleteHandler');
    $grid->BeforeInsertRecord->AddListener('Global_BeforeInsertHandler');
}

/*
  Default code page: 1252
*/
function GetAnsiEncoding() { return 'windows-1252'; }

function Global_CustomHTMLHeaderHandler($page, &$customHtmlHeaderText)
{

}

function Global_GetCustomTemplateHandler($part, $mode, &$result, &$params, Page $page = null)
{

}

function Global_BeforeUpdateHandler($page, &$rowData, &$cancel, &$message, $tableName)
{

}

function Global_BeforeDeleteHandler($page, &$rowData, &$cancel, &$message, $tableName)
{

}

function Global_BeforeInsertHandler($page, &$rowData, &$cancel, &$message, $tableName)
{

}

function GetDefaultDateFormat()
{
    return 'Y-m-d';
}

function GetFirstDayOfWeek()
{
    return 0;
}

function GetEnableLessFilesRunTimeCompilation()
{
    return false;
}



?>
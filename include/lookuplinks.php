<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["GE.PAIS"]["GE_CIUDAD.PAIS_ID"]["edit"] = array("table" => "GE.CIUDAD", "field" => "PAIS_ID", "page" => "edit");
	$lookupTableLinks["GE.INTERES"]["GE_INTERESXCATEGORIA_INTERES.INTERES_ID"]["edit"] = array("table" => "GE.INTERESXCATEGORIA_INTERES", "field" => "INTERES_ID", "page" => "edit");
	$lookupTableLinks["GE.CATEGORIA_INTERES"]["GE_INTERESXCATEGORIA_INTERES.CATEGORIA_INTERES_ID"]["edit"] = array("table" => "GE.INTERESXCATEGORIA_INTERES", "field" => "CATEGORIA_INTERES_ID", "page" => "edit");
	$lookupTableLinks["GE.CIUDAD"]["GE_EVENTO.CIUDAD"]["edit"] = array("table" => "GE.EVENTO", "field" => "CIUDAD", "page" => "edit");
	$lookupTableLinks["GE.OCUPACION"]["GE_OCUPACIONXCATEGORIA_OCUPACION.OCUPACION_ID"]["edit"] = array("table" => "GE.OCUPACIONXCATEGORIA_OCUPACION", "field" => "OCUPACION_ID", "page" => "edit");
	$lookupTableLinks["GE.CATEGORIA_OCUPACION"]["GE_OCUPACIONXCATEGORIA_OCUPACION.CATEGORIA_OCUPACION_ID"]["edit"] = array("table" => "GE.OCUPACIONXCATEGORIA_OCUPACION", "field" => "CATEGORIA_OCUPACION_ID", "page" => "edit");
	$lookupTableLinks["GE.GENERO"]["GE_PERSONA.GENERO_ID"]["edit"] = array("table" => "GE.PERSONA", "field" => "GENERO_ID", "page" => "edit");
	$lookupTableLinks["GE.CIUDAD"]["GE_PERSONA.CIUDAD_ID"]["edit"] = array("table" => "GE.PERSONA", "field" => "CIUDAD_ID", "page" => "edit");
	$lookupTableLinks["GE.PERSONA"]["GE_PERSONA_DISPONIBLE.USERNAME"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLE", "field" => "USERNAME", "page" => "edit");
	$lookupTableLinks["GE.COLOR_OJOS"]["GE_PERSONA_DISPONIBLE.COLOR_OJOS_ID"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLE", "field" => "COLOR_OJOS_ID", "page" => "edit");
	$lookupTableLinks["GE.COLOR_PIEL"]["GE_PERSONA_DISPONIBLE.COLOR_PIEL_ID"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLE", "field" => "COLOR_PIEL_ID", "page" => "edit");
	$lookupTableLinks["GE.CONTEXTURA"]["GE_PERSONA_DISPONIBLE.CONTEXTURA_ID"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLE", "field" => "CONTEXTURA_ID", "page" => "edit");
	$lookupTableLinks["GE.NIVEL_EDUCACION"]["GE_PERSONA_DISPONIBLE.NIVEL_EDUCACION_ID"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLE", "field" => "NIVEL_EDUCACION_ID", "page" => "edit");
	$lookupTableLinks["GE.ESTADO_CIVIL"]["GE_PERSONA_DISPONIBLE.ESTADO_CIVIL_ID"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLE", "field" => "ESTADO_CIVIL_ID", "page" => "edit");
	$lookupTableLinks["GE.FUMADOR"]["GE_PERSONA_DISPONIBLE.FUMADOR_ID"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLE", "field" => "FUMADOR_ID", "page" => "edit");
	$lookupTableLinks["GE.BEBEDOR"]["GE_PERSONA_DISPONIBLE.BEBEDOR_ID"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLE", "field" => "BEBEDOR_ID", "page" => "edit");
	$lookupTableLinks["GE.FRECUENCIA_EJERCICIO"]["GE_PERSONA_DISPONIBLE.FRECUENCIA_EJERCICIO_ID"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLE", "field" => "FRECUENCIA_EJERCICIO_ID", "page" => "edit");
	$lookupTableLinks["GE.SALARIO"]["GE_PERSONA_DISPONIBLE.SALARIO_ID"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLE", "field" => "SALARIO_ID", "page" => "edit");
	$lookupTableLinks["GE.TIPO_RELACION"]["GE_PERSONA_DISPONIBLE.TIPO_RELACION_ID"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLE", "field" => "TIPO_RELACION_ID", "page" => "edit");
	$lookupTableLinks["GE.PERSONA"]["GE_WINK.USERNAME_EMISOR"]["edit"] = array("table" => "GE.WINK", "field" => "USERNAME_EMISOR", "page" => "edit");
	$lookupTableLinks["GE.PERSONA"]["GE_WINK.USERNAME_RECEPTOR"]["edit"] = array("table" => "GE.WINK", "field" => "USERNAME_RECEPTOR", "page" => "edit");
	$lookupTableLinks["GE.PERSONA_DISPONIBLE"]["GE_PERSONA_DISPONIBLEXEJERCICIO.USERNAME"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXEJERCICIO", "field" => "USERNAME", "page" => "edit");
	$lookupTableLinks["GE.PERSONA_DISPONIBLE"]["GE_PERSONA_DISPONIBLEXEJERCICIO.ES_REAL"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXEJERCICIO", "field" => "ES_REAL", "page" => "edit");
	$lookupTableLinks["GE.EJERCICIO"]["GE_PERSONA_DISPONIBLEXEJERCICIO.EJERCICIO_ID"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXEJERCICIO", "field" => "EJERCICIO_ID", "page" => "edit");
	$lookupTableLinks["GE.PERSONA_DISPONIBLE"]["GE_PERSONA_DISPONIBLEXCOLOR_PELO.USERNAME"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXCOLOR_PELO", "field" => "USERNAME", "page" => "edit");
	$lookupTableLinks["GE.PERSONA_DISPONIBLE"]["GE_PERSONA_DISPONIBLEXCOLOR_PELO.ES_REAL"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXCOLOR_PELO", "field" => "ES_REAL", "page" => "edit");
	$lookupTableLinks["GE.PERSONA_DISPONIBLE"]["GE_PERSONA_DISPONIBLEXIDIOMA.USERNAME"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXIDIOMA", "field" => "USERNAME", "page" => "edit");
	$lookupTableLinks["GE.PERSONA_DISPONIBLE"]["GE_PERSONA_DISPONIBLEXIDIOMA.ES_REAL"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXIDIOMA", "field" => "ES_REAL", "page" => "edit");
	$lookupTableLinks["GE.PERSONA_DISPONIBLE"]["GE_PERSONA_DISPONIBLEXOCUPACION.USERNAME"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXOCUPACION", "field" => "USERNAME", "page" => "edit");
	$lookupTableLinks["GE.PERSONA_DISPONIBLE"]["GE_PERSONA_DISPONIBLEXOCUPACION.ES_REAL"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXOCUPACION", "field" => "ES_REAL", "page" => "edit");
	$lookupTableLinks["GE.OCUPACION"]["GE_PERSONA_DISPONIBLEXOCUPACION.OCUPACION_ID"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXOCUPACION", "field" => "OCUPACION_ID", "page" => "edit");
	$lookupTableLinks["GE.PERSONA_DISPONIBLE"]["GE_PERSONA_DISPONIBLEXRELIGION.USERNAME"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXRELIGION", "field" => "USERNAME", "page" => "edit");
	$lookupTableLinks["GE.PERSONA_DISPONIBLE"]["GE_PERSONA_DISPONIBLEXRELIGION.ES_REAL"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXRELIGION", "field" => "ES_REAL", "page" => "edit");
	$lookupTableLinks["GE.RELIGION"]["GE_PERSONA_DISPONIBLEXRELIGION.RELIGION_ID"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXRELIGION", "field" => "RELIGION_ID", "page" => "edit");
	$lookupTableLinks["GE.PERSONA"]["GE_VISITA.USERNAME_VISITANTE"]["edit"] = array("table" => "GE.VISITA", "field" => "USERNAME_VISITANTE", "page" => "edit");
	$lookupTableLinks["GE.PERSONA"]["GE_VISITA.USERNAME_VISITADA"]["edit"] = array("table" => "GE.VISITA", "field" => "USERNAME_VISITADA", "page" => "edit");
	$lookupTableLinks["GE.PERSONA_DISPONIBLE"]["GE_PERSONA_DISPONIBLEXINTERES.USERNAME"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXINTERES", "field" => "USERNAME", "page" => "edit");
	$lookupTableLinks["GE.PERSONA_DISPONIBLE"]["GE_PERSONA_DISPONIBLEXINTERES.ES_REAL"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXINTERES", "field" => "ES_REAL", "page" => "edit");
	$lookupTableLinks["GE.INTERES"]["GE_PERSONA_DISPONIBLEXINTERES.INTERES_ID"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXINTERES", "field" => "INTERES_ID", "page" => "edit");
	$lookupTableLinks["GE.PERSONA_DISPONIBLE"]["GE_PERSONA_DISPONIBLEXMASCOTA.USERNAME"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXMASCOTA", "field" => "USERNAME", "page" => "edit");
	$lookupTableLinks["GE.PERSONA_DISPONIBLE"]["GE_PERSONA_DISPONIBLEXMASCOTA.ES_REAL"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXMASCOTA", "field" => "ES_REAL", "page" => "edit");
	$lookupTableLinks["GE.MASCOTA"]["GE_PERSONA_DISPONIBLEXMASCOTA.MASCOTA_ID"]["edit"] = array("table" => "GE.PERSONA_DISPONIBLEXMASCOTA", "field" => "MASCOTA_ID", "page" => "edit");
	$lookupTableLinks["GE.PERSONA"]["GE_FOTO.USERNAME"]["edit"] = array("table" => "GE.FOTO", "field" => "USERNAME", "page" => "edit");
}

?>
<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers("");
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	return $connection->query( $dalSQL )->getQueryHandle();
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $BEBEDOR;
	var $CATEGORIA_INTERES;
	var $CATEGORIA_OCUPACION;
	var $CIUDAD;
	var $COLOR_OJOS;
	var $COLOR_PELO;
	var $COLOR_PIEL;
	var $CONTEXTURA;
	var $EDAD;
	var $EJERCICIO;
	var $ESTADO_CIVIL;
	var $EVENTO;
	var $FOTO;
	var $FRECUENCIA_EJERCICIO;
	var $FUMADOR;
	var $GENERO;
	var $IDIOMA;
	var $INTERES;
	var $INTERESXCATEGORIA_INTERES;
	var $MASCOTA;
	var $NIVEL_EDUCACION;
	var $OCUPACION;
	var $OCUPACIONXCATEGORIA_OCUPACION;
	var $PAIS;
	var $PARAMETROS;
	var $PERSONA;
	var $PERSONA_DISPONIBLE;
	var $PERSONA_DISPONIBLEXCOLOR_PELO;
	var $PERSONA_DISPONIBLEXEJERCICIO;
	var $PERSONA_DISPONIBLEXIDIOMA;
	var $PERSONA_DISPONIBLEXINTERES;
	var $PERSONA_DISPONIBLEXMASCOTA;
	var $PERSONA_DISPONIBLEXOCUPACION;
	var $PERSONA_DISPONIBLEXRELIGION;
	var $RELIGION;
	var $SALARIO;
	var $TIPO_RELACION;
	var $VISITA;
	var $WINK;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "BEBEDOR", "varname" => "BEBEDOR", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "CATEGORIA_INTERES", "varname" => "CATEGORIA_INTERES", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "CATEGORIA_OCUPACION", "varname" => "CATEGORIA_OCUPACION", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "CIUDAD", "varname" => "CIUDAD", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "COLOR_OJOS", "varname" => "COLOR_OJOS", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "COLOR_PELO", "varname" => "COLOR_PELO", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "COLOR_PIEL", "varname" => "COLOR_PIEL", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "CONTEXTURA", "varname" => "CONTEXTURA", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "EDAD", "varname" => "EDAD", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "EJERCICIO", "varname" => "EJERCICIO", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "ESTADO_CIVIL", "varname" => "ESTADO_CIVIL", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "EVENTO", "varname" => "EVENTO", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "FOTO", "varname" => "FOTO", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "FRECUENCIA_EJERCICIO", "varname" => "FRECUENCIA_EJERCICIO", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "FUMADOR", "varname" => "FUMADOR", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "GENERO", "varname" => "GENERO", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "IDIOMA", "varname" => "IDIOMA", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "INTERES", "varname" => "INTERES", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "INTERESXCATEGORIA_INTERES", "varname" => "INTERESXCATEGORIA_INTERES", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "MASCOTA", "varname" => "MASCOTA", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "NIVEL_EDUCACION", "varname" => "NIVEL_EDUCACION", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "OCUPACION", "varname" => "OCUPACION", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "OCUPACIONXCATEGORIA_OCUPACION", "varname" => "OCUPACIONXCATEGORIA_OCUPACION", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "PAIS", "varname" => "PAIS", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "PARAMETROS", "varname" => "PARAMETROS", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "PERSONA", "varname" => "PERSONA", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "PERSONA_DISPONIBLE", "varname" => "PERSONA_DISPONIBLE", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "PERSONA_DISPONIBLEXCOLOR_PELO", "varname" => "PERSONA_DISPONIBLEXCOLOR_PELO", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "PERSONA_DISPONIBLEXEJERCICIO", "varname" => "PERSONA_DISPONIBLEXEJERCICIO", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "PERSONA_DISPONIBLEXIDIOMA", "varname" => "PERSONA_DISPONIBLEXIDIOMA", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "PERSONA_DISPONIBLEXINTERES", "varname" => "PERSONA_DISPONIBLEXINTERES", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "PERSONA_DISPONIBLEXMASCOTA", "varname" => "PERSONA_DISPONIBLEXMASCOTA", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "PERSONA_DISPONIBLEXOCUPACION", "varname" => "PERSONA_DISPONIBLEXOCUPACION", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "PERSONA_DISPONIBLEXRELIGION", "varname" => "PERSONA_DISPONIBLEXRELIGION", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "RELIGION", "varname" => "RELIGION", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "SALARIO", "varname" => "SALARIO", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "TIPO_RELACION", "varname" => "TIPO_RELACION", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "VISITA", "varname" => "VISITA", "connId" => "ge_at_match");
		$this->lstTables[] = array("name" => "WINK", "varname" => "WINK", "connId" => "ge_at_match");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable)
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]))
			{
				$this->CreateClass($tbl);
				return $this->{$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".GoodFieldName($tbl["name"]).".php"));
//	create class and object

		$str = "class class_".GoodFieldName($tbl["name"])." extends tDALTable  {";
		foreach($dal_info[$tbl["name"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$str.=' function class_'.GoodFieldName($tbl["name"]).'()
			{
				$this->m_TableName = \''.escapesq($tbl["name"]).'\';
				$this->setConnection('. $tbl["connId"] .');
			}
		};';
		eval($str);
		$classname="class_".GoodFieldName($tbl["name"]);
		$this->{$tbl["varname"]} = new $classname;
		$this->Table[$tbl["name"]]=&$this->{$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->m_TableName, $dal_info) || !is_array($dal_info[ $this->m_TableName ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->m_TableName ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->m_TableName ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists(GoodFieldName($field), $dal_info[ $this->m_TableName ]) )
			return 200;
			
		return $dal_info[ $this->m_TableName ][ GoodFieldName($field) ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->m_TableName ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL )->getQueryHandle();
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL )->getQueryHandle();
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->m_TableName ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->m_TableName ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->m_TableName ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->m_TableName ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL )->getQueryHandle();
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>
<?php
class ConnectionManager
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;
	
	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */	
	protected $_tablesConnectionIds;
	
	
	/**
	 * @constructor
	 */
	function ConnectionManager()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}
	
	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		return $this->byId( $connId );
	}
	
	/**
	 * Get connection object by the connection id 
	 * @param String connId
	 * @return Connection
	 */	
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) )
			$this->cache[ $connId ] = $this->getConnection( $connId );

		return $this->cache[ $connId ];
	}
	
	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "ge_at_match" );
	}

	/**
	 * Get the users table db connection 
	 * @return Connection
	 */	
	public function getForLogin()
	{
		return $this->byId( "ge_at_match" );
	}
	
	/**
	 * Get the log table db connection 
	 * @return Connection
	 */	
	public function getForAudit()
	{
		return $this->getDefault();
	}
	
	/**
	 * Get the locking table db connection 
	 * @return Connection
	 */		
	public function getForLocking()
	{
		return $this->getDefault();
	}	
	
	/**
	 * Get the 'ug_groups' table db connection 
	 * @return Connection
	 */	
	public function getForUserGroups()
	{
		return $this->getDefault();
	}		

	/**
	 * Get the saved searches table db connection 
	 * @return Connection
	 */	
	public function getForSavedSearches()
	{
		return $this->getDefault();
	}

	/**
	 * Get the webreports tables db connection 
	 * @return Connection
	 */		
	public function getForWebReports()
	{
		return $this->byId( "ge_at_match" );
	}
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		include_once getabspath("connections/Connection.php");
		
		$data = $this->_connectionsData[ $connId ];	
		switch( $data["connStringType"] )
		{
			case "mysql":
				if( useMySQLiLib() )
				{
					include_once getabspath("connections/MySQLiConnection.php");
					return new MySQLiConnection( $data );
				}
				
				include_once getabspath("connections/MySQLConnection.php");	
				return new MySQLConnection( $data );	

			case "mssql":
				if( isSqlsrvExtLoaded() )
				{
					include_once getabspath("connections/MSSQLSrvConnection.php");	
					return new MSSQLSrvConnection( $data );
				}
				if( useMSSQLWinConnect() )
				{
					include_once getabspath("connections/MSSQLWinConnection.php");
					return new MSSQLWinConnection( $data );
				}
				
				include_once getabspath("connections/MSSQLUnixConnection.php");
				return new MSSQLUnixConnection( $data );			

			case "msaccess":
			case "odbc":
			case "odbcdsn":
			case "custom":
			case "file":
				if( stripos($data["ODBCString"], 'Provider=') !== false )
				{
					include_once getabspath("connections/ADOConnection.php");
					return new ADOConnection( $data );
				}
				
				include_once getabspath("connections/ODBCConnection.php");
				return new ODBCConnection( $data );
			
			case "oracle":
				include_once getabspath("connections/OracleConnection.php");
				return new OracleConnection( $data );

			case "postgre":
				include_once getabspath("connections/PostgreConnection.php");
				return new PostgreConnection( $data );

			case "db2":
				include_once getabspath("connections/DB2Connection.php");
				return new DB2Connection( $data );

			case "informix":
				include_once getabspath("connections/InformixConnection.php");
				return new InformixConnection( $data );

			case "sqlite":
				include_once getabspath("connections/SQLite3Connection.php");
				return new SQLite3Connection( $data );
		}
	}
	
	/**
	 * Set the data representing the project's 
	 * db connection properties
	 */	 
	protected function _setConnectionsData()
	{
		// content of this function can be modified on demo account
		// variable names $data and $connectionsData are important

		$connectionsData = array();
		
		$data = array();
		$data["dbType"] = 1;
		$data["connId"] = "ge_at_match";
		$data["connName"] = "ge at match";
		$data["connStringType"] = "oracle";
		$data["connectionString"] = "oracle;ge;ge;match"; //currently unused
		
		$data["connInfo"] = array();
		$data["connInfo"][0] = "ge";
		$data["connInfo"][1] = "ge";
		$data["connInfo"][2] = "match";
		$data["connInfo"][3] = "";
		$data["connInfo"][4] = "";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = ""; //currently unused
		$data["ODBCString"] = "DRIVER={Microsoft ODBC for Oracle};Server=match;DBQ=match;Uid=ge;Pwd=ge";
		
		$data["ODBCUID"] = "ge";
		$data["ODBCPWD"] = "ge";
		$data["leftWrap"] = "\"";
		$data["rightWrap"] = "\"";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused

		$connectionsData["ge_at_match"] = $data;
		$this->_connectionsData = $connectionsData;
	}
	
	/**
	 * Set the data representing the correspondence between 
	 * the project's table names and db connections
	 */	 
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["GE.BEBEDOR"] = "ge_at_match";
		$connectionsIds["GE.CATEGORIA_INTERES"] = "ge_at_match";
		$connectionsIds["GE.EDAD"] = "ge_at_match";
		$connectionsIds["GE.FUMADOR"] = "ge_at_match";
		$connectionsIds["GE.CATEGORIA_OCUPACION"] = "ge_at_match";
		$connectionsIds["GE.CIUDAD"] = "ge_at_match";
		$connectionsIds["GE.RELIGION"] = "ge_at_match";
		$connectionsIds["GE.SALARIO"] = "ge_at_match";
		$connectionsIds["GE.OCUPACION"] = "ge_at_match";
		$connectionsIds["GE.MASCOTA"] = "ge_at_match";
		$connectionsIds["GE.INTERES"] = "ge_at_match";
		$connectionsIds["GE.IDIOMA"] = "ge_at_match";
		$connectionsIds["GE.NIVEL_EDUCACION"] = "ge_at_match";
		$connectionsIds["GE.INTERESXCATEGORIA_INTERES"] = "ge_at_match";
		$connectionsIds["GE.FRECUENCIA_EJERCICIO"] = "ge_at_match";
		$connectionsIds["GE.GENERO"] = "ge_at_match";
		$connectionsIds["GE.EJERCICIO"] = "ge_at_match";
		$connectionsIds["GE.ESTADO_CIVIL"] = "ge_at_match";
		$connectionsIds["GE.CONTEXTURA"] = "ge_at_match";
		$connectionsIds["GE.COLOR_PIEL"] = "ge_at_match";
		$connectionsIds["GE.COLOR_PELO"] = "ge_at_match";
		$connectionsIds["GE.COLOR_OJOS"] = "ge_at_match";
		$connectionsIds["GE.EVENTO"] = "ge_at_match";
		$connectionsIds["GE.TIPO_RELACION"] = "ge_at_match";
		$connectionsIds["GE.PAIS"] = "ge_at_match";
		$connectionsIds["GE.OCUPACIONXCATEGORIA_OCUPACION"] = "ge_at_match";
		$connectionsIds["GE.PARAMETROS"] = "ge_at_match";
		$connectionsIds["GE.PERSONA"] = "ge_at_match";
		$connectionsIds["GE.PERSONA_DISPONIBLE"] = "ge_at_match";
		$connectionsIds["GE.WINK"] = "ge_at_match";
		$connectionsIds["GE.PERSONA_DISPONIBLEXEJERCICIO"] = "ge_at_match";
		$connectionsIds["GE.PERSONA_DISPONIBLEXCOLOR_PELO"] = "ge_at_match";
		$connectionsIds["GE.PERSONA_DISPONIBLEXIDIOMA"] = "ge_at_match";
		$connectionsIds["GE.PERSONA_DISPONIBLEXOCUPACION"] = "ge_at_match";
		$connectionsIds["GE.PERSONA_DISPONIBLEXRELIGION"] = "ge_at_match";
		$connectionsIds["GE.VISITA"] = "ge_at_match";
		$connectionsIds["GE.PERSONA_DISPONIBLEXINTERES"] = "ge_at_match";
		$connectionsIds["GE.PERSONA_DISPONIBLEXMASCOTA"] = "ge_at_match";
		$connectionsIds["GE.FOTO"] = "ge_at_match";
		$this->_tablesConnectionIds = $connectionsIds;
	}
	
	/**
	 * Check if It's possible to add to one table's sql query 
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];
		
		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;
			
		return true;	
	}
	
	/**
	 * Close db connections
	 * @destructor
	 */
	function __desctruct() 
	{
		foreach( $this->cache as $connection )
		{
			$connection->close();
		}
	}
}
?>
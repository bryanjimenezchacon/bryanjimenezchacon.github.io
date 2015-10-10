<?php
function DisplayMasterTableInfoForPrint_GE_PERSONA($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "GE.PERSONA";

	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "GE.PERSONA_DISPONIBLE" )
	{
		$keysAssoc["USERNAME"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("USERNAME", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("USERNAME", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("USERNAME", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA","USERNAME").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "GE.WINK" )
	{
		$keysAssoc["USERNAME"] = $keys[1-1];
		$keysAssoc["USERNAME"] = $keys[2-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("USERNAME", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("USERNAME", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("USERNAME", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA","USERNAME").": ".$keyValue;
				$where.= " and ";
		$showKeys.= " , ";
		$where.= RunnerPage::_getFieldSQLDecrypt("USERNAME", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("USERNAME", $keys[2-1], "", true);

				$keyValue = $viewControls->showDBValue("USERNAME", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA","USERNAME").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "GE.VISITA" )
	{
		$keysAssoc["USERNAME"] = $keys[1-1];
		$keysAssoc["USERNAME"] = $keys[2-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("USERNAME", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("USERNAME", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("USERNAME", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA","USERNAME").": ".$keyValue;
				$where.= " and ";
		$showKeys.= " , ";
		$where.= RunnerPage::_getFieldSQLDecrypt("USERNAME", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("USERNAME", $keys[2-1], "", true);

				$keyValue = $viewControls->showDBValue("USERNAME", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA","USERNAME").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "GE.FOTO" )
	{
		$keysAssoc["USERNAME"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("USERNAME", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("USERNAME", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("USERNAME", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA","USERNAME").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( !$where )
		return;

	$str = SecuritySQL("Export");
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));	
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["USERNAME"]));
	
	$xt->assign("USERNAME_mastervalue", $viewControls->showDBValue("USERNAME", $data, $keylink));
	$format = $settings->getViewFormat("USERNAME");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("USERNAME")))
		$class = ' rnr-field-number';
		
	$xt->assign("USERNAME_class", $class); // add class for field header as field value
	$xt->assign("ES_ADMIN_mastervalue", $viewControls->showDBValue("ES_ADMIN", $data, $keylink));
	$format = $settings->getViewFormat("ES_ADMIN");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ES_ADMIN")))
		$class = ' rnr-field-number';
		
	$xt->assign("ES_ADMIN_class", $class); // add class for field header as field value
	$xt->assign("NACIMIENTO_mastervalue", $viewControls->showDBValue("NACIMIENTO", $data, $keylink));
	$format = $settings->getViewFormat("NACIMIENTO");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("NACIMIENTO")))
		$class = ' rnr-field-number';
		
	$xt->assign("NACIMIENTO_class", $class); // add class for field header as field value
	$xt->assign("PRIMER_APELLIDO_mastervalue", $viewControls->showDBValue("PRIMER_APELLIDO", $data, $keylink));
	$format = $settings->getViewFormat("PRIMER_APELLIDO");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("PRIMER_APELLIDO")))
		$class = ' rnr-field-number';
		
	$xt->assign("PRIMER_APELLIDO_class", $class); // add class for field header as field value
	$xt->assign("SEGUNDO_APELLIDO_mastervalue", $viewControls->showDBValue("SEGUNDO_APELLIDO", $data, $keylink));
	$format = $settings->getViewFormat("SEGUNDO_APELLIDO");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("SEGUNDO_APELLIDO")))
		$class = ' rnr-field-number';
		
	$xt->assign("SEGUNDO_APELLIDO_class", $class); // add class for field header as field value
	$xt->assign("NOMBRE_mastervalue", $viewControls->showDBValue("NOMBRE", $data, $keylink));
	$format = $settings->getViewFormat("NOMBRE");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("NOMBRE")))
		$class = ' rnr-field-number';
		
	$xt->assign("NOMBRE_class", $class); // add class for field header as field value
	$xt->assign("GENERO_ID_mastervalue", $viewControls->showDBValue("GENERO_ID", $data, $keylink));
	$format = $settings->getViewFormat("GENERO_ID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("GENERO_ID")))
		$class = ' rnr-field-number';
		
	$xt->assign("GENERO_ID_class", $class); // add class for field header as field value
	$xt->assign("CIUDAD_ID_mastervalue", $viewControls->showDBValue("CIUDAD_ID", $data, $keylink));
	$format = $settings->getViewFormat("CIUDAD_ID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("CIUDAD_ID")))
		$class = ' rnr-field-number';
		
	$xt->assign("CIUDAD_ID_class", $class); // add class for field header as field value
	$xt->assign("SLOGAN_mastervalue", $viewControls->showDBValue("SLOGAN", $data, $keylink));
	$format = $settings->getViewFormat("SLOGAN");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("SLOGAN")))
		$class = ' rnr-field-number';
		
	$xt->assign("SLOGAN_class", $class); // add class for field header as field value
	$xt->assign("FEC_CREACION_mastervalue", $viewControls->showDBValue("FEC_CREACION", $data, $keylink));
	$format = $settings->getViewFormat("FEC_CREACION");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("FEC_CREACION")))
		$class = ' rnr-field-number';
		
	$xt->assign("FEC_CREACION_class", $class); // add class for field header as field value
	$xt->assign("USUARIO_CREACION_mastervalue", $viewControls->showDBValue("USUARIO_CREACION", $data, $keylink));
	$format = $settings->getViewFormat("USUARIO_CREACION");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("USUARIO_CREACION")))
		$class = ' rnr-field-number';
		
	$xt->assign("USUARIO_CREACION_class", $class); // add class for field header as field value
	$xt->assign("FEC_ULTIMA_MOD_mastervalue", $viewControls->showDBValue("FEC_ULTIMA_MOD", $data, $keylink));
	$format = $settings->getViewFormat("FEC_ULTIMA_MOD");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("FEC_ULTIMA_MOD")))
		$class = ' rnr-field-number';
		
	$xt->assign("FEC_ULTIMA_MOD_class", $class); // add class for field header as field value
	$xt->assign("USUARIO_ULTIMA_MOD_mastervalue", $viewControls->showDBValue("USUARIO_ULTIMA_MOD", $data, $keylink));
	$format = $settings->getViewFormat("USUARIO_ULTIMA_MOD");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("USUARIO_ULTIMA_MOD")))
		$class = ' rnr-field-number';
		
	$xt->assign("USUARIO_ULTIMA_MOD_class", $class); // add class for field header as field value
	$xt->assign("EMAIL_mastervalue", $viewControls->showDBValue("EMAIL", $data, $keylink));
	$format = $settings->getViewFormat("EMAIL");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("EMAIL")))
		$class = ' rnr-field-number';
		
	$xt->assign("EMAIL_class", $class); // add class for field header as field value
	$xt->assign("CLAVE_mastervalue", $viewControls->showDBValue("CLAVE", $data, $keylink));
	$format = $settings->getViewFormat("CLAVE");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("CLAVE")))
		$class = ' rnr-field-number';
		
	$xt->assign("CLAVE_class", $class); // add class for field header as field value

	$layout = GetPageLayout("GE_PERSONA", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("GE_PERSONA", "masterprint"));
}

?>
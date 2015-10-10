<?php
function DisplayMasterTableInfo_GE_PERSONA_DISPONIBLE($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	$tName = "GE.PERSONA_DISPONIBLE";
	
	$settings = new ProjectSettings($tName, PAGE_LIST);
	$cipherer = new RunnerCipherer( $tName );
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";


	if($detailtable == "GE.PERSONA_DISPONIBLEXEJERCICIO")
	{
		$keysAssoc["USERNAME"] = $keys[1-1];
		$keysAssoc["ES_REAL"] = $keys[2-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("USERNAME", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("USERNAME", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("USERNAME", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA_DISPONIBLE","USERNAME").": ".$keyValue;
				$where.= " and ";
		$showKeys.=" , ";
		$where.= RunnerPage::_getFieldSQLDecrypt("ES_REAL", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("ES_REAL", $keys[2-1], "", true);

				$keyValue = $viewControls->showDBValue("ES_REAL", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA_DISPONIBLE","ES_REAL").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "GE.PERSONA_DISPONIBLEXCOLOR_PELO")
	{
		$keysAssoc["ES_REAL"] = $keys[1-1];
		$keysAssoc["USERNAME"] = $keys[2-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("ES_REAL", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("ES_REAL", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("ES_REAL", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA_DISPONIBLE","ES_REAL").": ".$keyValue;
				$where.= " and ";
		$showKeys.=" , ";
		$where.= RunnerPage::_getFieldSQLDecrypt("USERNAME", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("USERNAME", $keys[2-1], "", true);

				$keyValue = $viewControls->showDBValue("USERNAME", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA_DISPONIBLE","USERNAME").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "GE.PERSONA_DISPONIBLEXIDIOMA")
	{
		$keysAssoc["USERNAME"] = $keys[1-1];
		$keysAssoc["ES_REAL"] = $keys[2-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("USERNAME", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("USERNAME", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("USERNAME", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA_DISPONIBLE","USERNAME").": ".$keyValue;
				$where.= " and ";
		$showKeys.=" , ";
		$where.= RunnerPage::_getFieldSQLDecrypt("ES_REAL", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("ES_REAL", $keys[2-1], "", true);

				$keyValue = $viewControls->showDBValue("ES_REAL", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA_DISPONIBLE","ES_REAL").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "GE.PERSONA_DISPONIBLEXOCUPACION")
	{
		$keysAssoc["ES_REAL"] = $keys[1-1];
		$keysAssoc["USERNAME"] = $keys[2-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("ES_REAL", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("ES_REAL", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("ES_REAL", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA_DISPONIBLE","ES_REAL").": ".$keyValue;
				$where.= " and ";
		$showKeys.=" , ";
		$where.= RunnerPage::_getFieldSQLDecrypt("USERNAME", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("USERNAME", $keys[2-1], "", true);

				$keyValue = $viewControls->showDBValue("USERNAME", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA_DISPONIBLE","USERNAME").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "GE.PERSONA_DISPONIBLEXRELIGION")
	{
		$keysAssoc["USERNAME"] = $keys[1-1];
		$keysAssoc["ES_REAL"] = $keys[2-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("USERNAME", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("USERNAME", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("USERNAME", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA_DISPONIBLE","USERNAME").": ".$keyValue;
				$where.= " and ";
		$showKeys.=" , ";
		$where.= RunnerPage::_getFieldSQLDecrypt("ES_REAL", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("ES_REAL", $keys[2-1], "", true);

				$keyValue = $viewControls->showDBValue("ES_REAL", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA_DISPONIBLE","ES_REAL").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "GE.PERSONA_DISPONIBLEXINTERES")
	{
		$keysAssoc["ES_REAL"] = $keys[1-1];
		$keysAssoc["USERNAME"] = $keys[2-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("ES_REAL", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("ES_REAL", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("ES_REAL", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA_DISPONIBLE","ES_REAL").": ".$keyValue;
				$where.= " and ";
		$showKeys.=" , ";
		$where.= RunnerPage::_getFieldSQLDecrypt("USERNAME", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("USERNAME", $keys[2-1], "", true);

				$keyValue = $viewControls->showDBValue("USERNAME", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA_DISPONIBLE","USERNAME").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "GE.PERSONA_DISPONIBLEXMASCOTA")
	{
		$keysAssoc["USERNAME"] = $keys[1-1];
		$keysAssoc["ES_REAL"] = $keys[2-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("USERNAME", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("USERNAME", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("USERNAME", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA_DISPONIBLE","USERNAME").": ".$keyValue;
				$where.= " and ";
		$showKeys.=" , ";
		$where.= RunnerPage::_getFieldSQLDecrypt("ES_REAL", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("ES_REAL", $keys[2-1], "", true);

				$keyValue = $viewControls->showDBValue("ES_REAL", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_PERSONA_DISPONIBLE","ES_REAL").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}
	if( !$where )
		return;
	
	$str = SecuritySQL("Search");
	if( strlen($str) )
		$where.= " and ".$str;

	$strWhere = whereAdd( $masterQuery->WhereToSql(), $where );
	if( strlen($strWhere) )
		$strWhere = " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["USERNAME"]));
	$keylink.= "&key2=".runner_htmlspecialchars(rawurlencode(@$data["ES_REAL"]));
	
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
	$xt->assign("ES_REAL_mastervalue", $viewControls->showDBValue("ES_REAL", $data, $keylink));
	$format = $settings->getViewFormat("ES_REAL");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ES_REAL")))
		$class = ' rnr-field-number';
		
	$xt->assign("ES_REAL_class", $class); // add class for field header as field value
	$xt->assign("COLOR_OJOS_ID_mastervalue", $viewControls->showDBValue("COLOR_OJOS_ID", $data, $keylink));
	$format = $settings->getViewFormat("COLOR_OJOS_ID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("COLOR_OJOS_ID")))
		$class = ' rnr-field-number';
		
	$xt->assign("COLOR_OJOS_ID_class", $class); // add class for field header as field value
	$xt->assign("COLOR_PIEL_ID_mastervalue", $viewControls->showDBValue("COLOR_PIEL_ID", $data, $keylink));
	$format = $settings->getViewFormat("COLOR_PIEL_ID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("COLOR_PIEL_ID")))
		$class = ' rnr-field-number';
		
	$xt->assign("COLOR_PIEL_ID_class", $class); // add class for field header as field value
	$xt->assign("CONTEXTURA_ID_mastervalue", $viewControls->showDBValue("CONTEXTURA_ID", $data, $keylink));
	$format = $settings->getViewFormat("CONTEXTURA_ID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("CONTEXTURA_ID")))
		$class = ' rnr-field-number';
		
	$xt->assign("CONTEXTURA_ID_class", $class); // add class for field header as field value
	$xt->assign("NIVEL_EDUCACION_ID_mastervalue", $viewControls->showDBValue("NIVEL_EDUCACION_ID", $data, $keylink));
	$format = $settings->getViewFormat("NIVEL_EDUCACION_ID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("NIVEL_EDUCACION_ID")))
		$class = ' rnr-field-number';
		
	$xt->assign("NIVEL_EDUCACION_ID_class", $class); // add class for field header as field value
	$xt->assign("ESTADO_CIVIL_ID_mastervalue", $viewControls->showDBValue("ESTADO_CIVIL_ID", $data, $keylink));
	$format = $settings->getViewFormat("ESTADO_CIVIL_ID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ESTADO_CIVIL_ID")))
		$class = ' rnr-field-number';
		
	$xt->assign("ESTADO_CIVIL_ID_class", $class); // add class for field header as field value
	$xt->assign("FUMADOR_ID_mastervalue", $viewControls->showDBValue("FUMADOR_ID", $data, $keylink));
	$format = $settings->getViewFormat("FUMADOR_ID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("FUMADOR_ID")))
		$class = ' rnr-field-number';
		
	$xt->assign("FUMADOR_ID_class", $class); // add class for field header as field value
	$xt->assign("BEBEDOR_ID_mastervalue", $viewControls->showDBValue("BEBEDOR_ID", $data, $keylink));
	$format = $settings->getViewFormat("BEBEDOR_ID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("BEBEDOR_ID")))
		$class = ' rnr-field-number';
		
	$xt->assign("BEBEDOR_ID_class", $class); // add class for field header as field value
	$xt->assign("FRECUENCIA_EJERCICIO_ID_mastervalue", $viewControls->showDBValue("FRECUENCIA_EJERCICIO_ID", $data, $keylink));
	$format = $settings->getViewFormat("FRECUENCIA_EJERCICIO_ID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("FRECUENCIA_EJERCICIO_ID")))
		$class = ' rnr-field-number';
		
	$xt->assign("FRECUENCIA_EJERCICIO_ID_class", $class); // add class for field header as field value
	$xt->assign("SALARIO_ID_mastervalue", $viewControls->showDBValue("SALARIO_ID", $data, $keylink));
	$format = $settings->getViewFormat("SALARIO_ID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("SALARIO_ID")))
		$class = ' rnr-field-number';
		
	$xt->assign("SALARIO_ID_class", $class); // add class for field header as field value
	$xt->assign("ALTURA_mastervalue", $viewControls->showDBValue("ALTURA", $data, $keylink));
	$format = $settings->getViewFormat("ALTURA");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ALTURA")))
		$class = ' rnr-field-number';
		
	$xt->assign("ALTURA_class", $class); // add class for field header as field value
	$xt->assign("PESO_mastervalue", $viewControls->showDBValue("PESO", $data, $keylink));
	$format = $settings->getViewFormat("PESO");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("PESO")))
		$class = ' rnr-field-number';
		
	$xt->assign("PESO_class", $class); // add class for field header as field value
	$xt->assign("NUM_HIJOS_mastervalue", $viewControls->showDBValue("NUM_HIJOS", $data, $keylink));
	$format = $settings->getViewFormat("NUM_HIJOS");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("NUM_HIJOS")))
		$class = ' rnr-field-number';
		
	$xt->assign("NUM_HIJOS_class", $class); // add class for field header as field value
	$xt->assign("QUIERE_HIJOS_mastervalue", $viewControls->showDBValue("QUIERE_HIJOS", $data, $keylink));
	$format = $settings->getViewFormat("QUIERE_HIJOS");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("QUIERE_HIJOS")))
		$class = ' rnr-field-number';
		
	$xt->assign("QUIERE_HIJOS_class", $class); // add class for field header as field value
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
	$xt->assign("TIPO_RELACION_ID_mastervalue", $viewControls->showDBValue("TIPO_RELACION_ID", $data, $keylink));
	$format = $settings->getViewFormat("TIPO_RELACION_ID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TIPO_RELACION_ID")))
		$class = ' rnr-field-number';
		
	$xt->assign("TIPO_RELACION_ID_class", $class); // add class for field header as field value

	$layout = GetPageLayout("GE_PERSONA_DISPONIBLE", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("GE_PERSONA_DISPONIBLE", "masterlist"));
}

?>
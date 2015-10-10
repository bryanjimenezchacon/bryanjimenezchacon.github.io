<?php
function DisplayMasterTableInfo_GE_INTERES($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	$tName = "GE.INTERES";
	
	$settings = new ProjectSettings($tName, PAGE_LIST);
	$cipherer = new RunnerCipherer( $tName );
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";


	if($detailtable == "GE.INTERESXCATEGORIA_INTERES")
	{
		$keysAssoc["INTERES_ID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("INTERES_ID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("INTERES_ID", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("INTERES_ID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_INTERES","INTERES_ID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if($detailtable == "GE.PERSONA_DISPONIBLEXINTERES")
	{
		$keysAssoc["INTERES_ID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("INTERES_ID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("INTERES_ID", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("INTERES_ID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_INTERES","INTERES_ID").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["INTERES_ID"]));
	
	$xt->assign("INTERES_ID_mastervalue", $viewControls->showDBValue("INTERES_ID", $data, $keylink));
	$format = $settings->getViewFormat("INTERES_ID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("INTERES_ID")))
		$class = ' rnr-field-number';
		
	$xt->assign("INTERES_ID_class", $class); // add class for field header as field value
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

	$layout = GetPageLayout("GE_INTERES", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("GE_INTERES", "masterlist"));
}

?>
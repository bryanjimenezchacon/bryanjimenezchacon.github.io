<?php
function DisplayMasterTableInfo_GE_COLOR_PELO($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	$tName = "GE.COLOR_PELO";
	
	$settings = new ProjectSettings($tName, PAGE_LIST);
	$cipherer = new RunnerCipherer( $tName );
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";


	if($detailtable == "GE.PERSONA_DISPONIBLEXCOLOR_PELO")
	{
		$keysAssoc["COLOR_PELO_ID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("COLOR_PELO_ID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("COLOR_PELO_ID", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("COLOR_PELO_ID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_COLOR_PELO","COLOR_PELO_ID").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["COLOR_PELO_ID"]));
	
	$xt->assign("COLOR_PELO_ID_mastervalue", $viewControls->showDBValue("COLOR_PELO_ID", $data, $keylink));
	$format = $settings->getViewFormat("COLOR_PELO_ID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("COLOR_PELO_ID")))
		$class = ' rnr-field-number';
		
	$xt->assign("COLOR_PELO_ID_class", $class); // add class for field header as field value
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

	$layout = GetPageLayout("GE_COLOR_PELO", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("GE_COLOR_PELO", "masterlist"));
}

?>
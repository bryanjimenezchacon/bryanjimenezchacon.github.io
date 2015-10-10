<?php
function DisplayMasterTableInfo_GE_TIPO_RELACION($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	$tName = "GE.TIPO_RELACION";
	
	$settings = new ProjectSettings($tName, PAGE_LIST);
	$cipherer = new RunnerCipherer( $tName );
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";


	if($detailtable == "GE.PERSONA_DISPONIBLE")
	{
		$keysAssoc["TIPO_RELACION_ID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("TIPO_RELACION_ID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("TIPO_RELACION_ID", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("TIPO_RELACION_ID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("GE_TIPO_RELACION","TIPO_RELACION_ID").": ".$keyValue;
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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["TIPO_RELACION_ID"]));
	
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
	$xt->assign("FECHA_CREACION_mastervalue", $viewControls->showDBValue("FECHA_CREACION", $data, $keylink));
	$format = $settings->getViewFormat("FECHA_CREACION");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("FECHA_CREACION")))
		$class = ' rnr-field-number';
		
	$xt->assign("FECHA_CREACION_class", $class); // add class for field header as field value
	$xt->assign("FECHA_MODIFICACION_mastervalue", $viewControls->showDBValue("FECHA_MODIFICACION", $data, $keylink));
	$format = $settings->getViewFormat("FECHA_MODIFICACION");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("FECHA_MODIFICACION")))
		$class = ' rnr-field-number';
		
	$xt->assign("FECHA_MODIFICACION_class", $class); // add class for field header as field value
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
	$xt->assign("USUARIO_MODIFICACION_mastervalue", $viewControls->showDBValue("USUARIO_MODIFICACION", $data, $keylink));
	$format = $settings->getViewFormat("USUARIO_MODIFICACION");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("USUARIO_MODIFICACION")))
		$class = ' rnr-field-number';
		
	$xt->assign("USUARIO_MODIFICACION_class", $class); // add class for field header as field value

	$layout = GetPageLayout("GE_TIPO_RELACION", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("GE_TIPO_RELACION", "masterlist"));
}

?>
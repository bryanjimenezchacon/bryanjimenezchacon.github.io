<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

$strTableName="";

include("include/reportfunctions.php");

// #9875 It's expected that webreports, webreport_style tables belong to the same db connection
$_connection = $cman->getForWebReports();

if(@$_REQUEST["cname"])
{	
	$cname=@$_REQUEST["cname"];
	$sql_query = "SELECT ".$_connection->addFieldWrappers("rpt_id")." FROM ".$_connection->addTableWrappers("webreports")
		." WHERE ".$_connection->addFieldWrappers("rpt_name")."='".$cname."' and ".$_connection->addFieldWrappers("rpt_type")."='chart'";
	
	$data = $_connection->query( $sql_query )->fetchNumeric();
	if( !count($data) )
		header("location: ".GetTableLink("webreport"));
	else
		Reload_Chart(postvalue("cname"));
}


$chrt_array = getChartArray(postvalue("cname"));

if(is_wr_project())
	include("include/" . $chrt_array['settings']['short_table_name'] . "_variables.php");

$sessPrefix = "webchart".postvalue("cname");


//	process request data, fill session variables
if ( !count( $_POST ) && ( count( $_GET ) <= 1 ) )
{
	$sess_unset = array();
	foreach($_SESSION as $key=>$value)
		if(substr($key,0,strlen($sessPrefix)+1)==$sessPrefix."_" &&
			strpos(substr($key,strlen($sessPrefix)+1),"_")===false)
			$sess_unset[] = $key;
	foreach($sess_unset as $key)
		unset($_SESSION[$key]);
}

if(@$_REQUEST["a"]=="advsearch" || @$_REQUEST["a"]=="integrated")
{
	$_SESSION[$sessPrefix."_asearchnot"]=array();
	$_SESSION[$sessPrefix."_asearchopt"]=array();
	$_SESSION[$sessPrefix."_asearchfor"]=array();
	$_SESSION[$sessPrefix."_asearchfor2"]=array();
	$_SESSION[$sessPrefix."_asearchtable"]=array();
	$_SESSION[$sessPrefix."_asearchfortype"]=array();
	unset($_SESSION[$sessPrefix."_asearchtype"]);
	$tosearch=0;
}

if(@$_REQUEST["a"]=="advsearch")
{
	$asearchfield = postvalue("asearchfield");
	$asearchtable = postvalue("asearchtable");
	$_SESSION[$sessPrefix."_asearchtype"] = postvalue("type");
	if(!$_SESSION[$sessPrefix."_asearchtype"])
		$_SESSION[$sessPrefix."_asearchtype"]="and";
	foreach($asearchfield as $ind => $field)
	{
		if (!is_wr_project()) {
			$_SESSION[$sessPrefix."_asearchtable"][$field]=$asearchtable[$ind];
		}
		$gfield=GoodFieldName($field)."_1";
		$asopt=postvalue("asearchopt_".$gfield);
		$value1=postvalue("value_".$gfield);
		$type=postvalue("type_".$gfield);
		$value2=postvalue("value1_".$gfield);
		$not=postvalue("not_".$gfield);
		if(strlen($value1) || $asopt=='Empty')
		{
			$tosearch=1;
			$_SESSION[$sessPrefix."_asearchopt"][$field]=$asopt;
			if(!is_array($value1))
				$_SESSION[$sessPrefix."_asearchfor"][$field]=$value1;
			else
				$_SESSION[$sessPrefix."_asearchfor"][$field]=combinevalues($value1);
			$_SESSION[$sessPrefix."_asearchfortype"][$field]=$type;
			if($value2)
				$_SESSION[$sessPrefix."_asearchfor2"][$field]=$value2;
			$_SESSION[$sessPrefix."_asearchnot"][$field]=($not=="on");
		}
	}
}
elseif(@$_REQUEST["a"]=="integrated")
{
	$_SESSION[$sessPrefix."_asearchtype"] = postvalue("criteria");
	if(!$_SESSION[$sessPrefix."_asearchtype"])
		$_SESSION[$sessPrefix."_asearchtype"]="and";
	// prepare vars		
	$j=1;

	// scan all srch fields		
	while ($field = postvalue('field'.$j)) 
	{	
		$tosearch=1;
		$_SESSION[$sessPrefix."_asearchfortype"][$field] = trim(postvalue('type'.$j));
		$_SESSION[$sessPrefix."_asearchfor"][$field] = trim(postvalue('value'.$j.'1'));
		$_SESSION[$sessPrefix."_asearchopt"][$field] = (postvalue('option'.$j) ? postvalue('option'.$j) : 'Contains');
		$_SESSION[$sessPrefix."_asearchfor2"][$field] = trim(postvalue('value'.$j.'2'));	
		$_SESSION[$sessPrefix."_asearchnot"][$field] = postvalue('not'.$j) == 'on';
		$j++;
	}	
}
if(@$_REQUEST["a"]=="advsearch" || @$_REQUEST["a"]=="integrated")
{
	if($tosearch)
		$_SESSION[$sessPrefix."_search"]=2;
	else
		$_SESSION[$sessPrefix."_search"]=0;
	$_SESSION[$sessPrefix."_pagenumber"]=1;
}


include('include/xtempl.php');
$xt = new Xtempl();






$show_dchart = '
<noscript>
	<object id="'.runner_htmlspecialchars(postvalue('cname')).'" 
		name="'.runner_htmlspecialchars(postvalue('cname')).'" 
		classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
		width="100%" 
		height="100%" 
		codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
		<param name="movie" value="'.GetRootPathForResources("libs/swf/Preloader.swf").'" />
		<param name="bgcolor" value="#FFFFFF" />

		<param name="allowScriptAccess" value="always" />
		<param name="flashvars" value="swfFile='.GetTableLink("dchartdata").'%3Fcname%3D'.runner_htmlspecialchars(postvalue('cname')).'%26ctype%3D'.$chrt_array['chart_type']['type'].'" />
		
		<embed type="application/x-shockwave-flash" 
			   pluginspage="http://www.adobe.com/go/getflashplayer" 
			   src="'.GetRootPathForResources("libs/swf/Preloader.swf").'" 
			   width="100%" 
			   height="100%" 
			   id="'.runner_htmlspecialchars(postvalue('cname')).'" 
			   name="'.runner_htmlspecialchars(postvalue('cname')).'" 
			   bgColor="#FFFFFF" 
			   allowScriptAccess="always" 
			   flashvars="swfFile='.GetTableLink("dchartdata").'%3Fcname%3D'.runner_htmlspecialchars(postvalue('cname')).'%26ctype%3D'.$chrt_array['chart_type']['type'].'" />
	</object>				
</noscript>
<script type="text/javascript" language="javascript" src="'.GetRootPathForResources("libs/js/AnyChartHTML5.js").'"></script>
<script type="text/javascript" language="javascript">
	//<![CDATA[
	AnyChart.renderingType = anychart.RenderingType.FLASH_PREFERRED;
	var chart = new AnyChart("'.GetRootPathForResources("libs/swf/AnyChart.swf").'?v=5.1.2.5r35942", "'.GetRootPathForResources("libs/swf/Preloader.swf").'?v=5.1.2.5r35942");
	chart.width = "800";
	chart.height = "640";

	var xmlFile = "'.GetTableLink("dchartdata", "", 'cname='.jsreplace(runner_htmlspecialchars(postvalue('cname')))).'";
	xmlFile += "&ctype='.$chrt_array['chart_type']['type'].'&q='.postvalue("q").'";
	chart.setXMLFile(xmlFile);
	chart.write();';
	$refresh="0";
	if($chrt_array["appearance"]["autoupdate"]=="true")
		$refresh=$chrt_array["appearance"]["update_interval"]*60000;
	if($refresh<>"0" && !isMobile())
			$show_dchart.='setInterval("refreshChart()",'.$refresh.');';
		
	$show_dchart.='function refreshChart()
	{
		page="'.GetTableLink("dchartdata", "", 'cname='.jsreplace(postvalue("cname")).'&q='.postvalue("q")).'";
		params={
				action:"refresh",
				rndval:Math.random()
				};
		$.get(page,params,function(xml)
			{
				var arr = new Array();
				arr=xml.split("\n");
				for(i=0; i<arr.length;i+=2)
				{
					chart.removeSeries(arr[i]);
					chart.addSeries(arr[i+1]);
					chart.updatePointData(arr[i]+"_gauge",arr[i]+"_point",{value: arr[i+1]});
				}
				chart.refresh();
			});

	}
	//]]>
</script>';

$load_flash_player = '
<script type="text/javascript">
	$(document).ready(function(){
		var svgSupported = window.SVGAngle != undefined;
		var str="";
		if (!svgSupported)
		{
			str = "<center>";
			str += "'."".'<br /><br />";
			str += "<a href=\"http://www.adobe.com/go/getflashplayer\"><img border=\"0\" src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" /></a><br />";
			str += "</center>";		
		}
		if (typeof(ActiveXObject) != "undefined") {
			try { a = new ActiveXObject("ShockwaveFlash.ShockwaveFlash");d = a.GetVariable("$version"); }
			catch (e) { d = false; }
			if (!d) {
				$("div.center_div").html( str );	
				$("#ExpPDF").hide();
			}			
		} else if ((navigator.product == "Gecko" && window.find && !navigator.savePreferences)
			|| (navigator.userAgent.indexOf("WebKit") != -1 || navigator.userAgent.indexOf("Konqueror") != -1))
		{
			div = $("div[id*=\'__chart_generated_container__\']");
			if ( div[0] == undefined ) {
				$("div.center_div").html( str );			
				$("#ExpPDF").hide();
			} else {
				if($("div.center_div").find("object").length==0)
					$("#ExpPDF").hide();
				$(div).appendTo("div.center_div");
			}
		}	
	});
</script>';

if($_SESSION["back_to_menu"])
	$xt->assign("back_to_menu", true);
else
	$xt->assign("back_to_menu", false);
$xt->assign("wr_pagestylepath", $wr_pagestylepath);	
$xt->assign("chart_block", true);
$xt->assign("chart_constructor", $show_dchart);
$xt->assign("load_flash_player", $load_flash_player);
if(!IsStoredProcedure($chrt_array['sql']))
	$xt->assign("testAdvSearch", testAdvSearch($chrt_array['tables'][0] ) );
else	
	$xt->assign("testAdvSearch", false);

$chart_name_js = jsreplace( postvalue( 'cname' ) );
$xt->assign("chart_name_js",  $chart_name_js);

$xt->assign("chart_title", runner_htmlspecialchars( $chrt_array['title'] ) );
$xt->assign("short_table_name", runner_htmlspecialchars( $chrt_array['settings']['short_table_name'] ) );
$xt->assign("short_table_name_js", jsreplace( $chrt_array['settings']['short_table_name'] ) );
$xt->assign("ext", "php" );

$searchType = (!is_wr_project()) ? GetTableLink("dsearch") : GetTableLink(runner_htmlspecialchars($chrt_array['settings']['short_table_name']), "search");
$xt->assign("searchHref", "href='".$searchType."?cname=".$chart_name_js."'");

$templatefile = GetTemplateName("", "dchart");
$xt->display($templatefile);

?>
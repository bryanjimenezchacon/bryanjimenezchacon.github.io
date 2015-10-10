<?php
class WebreportPage extends RunnerPage
{
	function WebreportPage(&$params)
	{
		parent::RunnerPage($params);
	}
	protected function setTableConnection()
	{
		global $cman;
		$this->connection = $cman->getDefault();			
	}
}
?>
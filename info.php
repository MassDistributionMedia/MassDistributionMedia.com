<?php
require_once('NOLOH/NOLOH.php');

class NOLOHInfo extends WebPage
{
	function NOLOHInfo()
	{
		parent::WebPage('NOLOH phpinfo');
		phpinfo();
	}
}
?>
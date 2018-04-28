<?php 
	/**
	* 
	*/
	class InfoPage
	{
		
		
		public function isActive($p='')
		{ 
			$page = $_GET["page"];
			if($p == $page)
				return "active";
			return '';
		}
	}
	$i = new InfoPage();
 ?>
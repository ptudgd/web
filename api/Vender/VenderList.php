<?php 
	include './api/Base/Connection.php';
	/**
	* 
	*/
	class VenderList extends Connection
	{
		private function GetData()
		{
			return $this->query("SELECT * FROM Customer WHERE Customer.isVender = 1");
		}
		public function Execute()
		{
			return $this->convertToArray($this->GetData());
		}
	}
	$VenderList = new VenderList();
 ?>
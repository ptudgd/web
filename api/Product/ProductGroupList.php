<?php 
	include './api/Base/Connection.php';
	/**
	* 
	*/
	class ProductGroupList extends Connection
	{
		private function GetData()
		{
			return $this->query("SELECT * FROM ProductGroup");
		}
		public function Execute()
		{
			return $this->convertToArray($this->GetData());
		}
	}
	$ProductGroupList = new ProductGroupList();
 ?>
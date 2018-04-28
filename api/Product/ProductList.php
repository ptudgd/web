<?php 
	include './api/Base/Connection.php';
	/**
	* 
	*/
	class ProductList extends Connection
	{
		private function GetData()
		{
			return $this->query("SELECT * FROM Product");
		}
		public function Execute()
		{
			return $this->convertToArray($this->GetData());
		}
	}
	$ProductList = new ProductList();
 ?>
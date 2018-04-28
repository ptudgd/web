<?php 
	include './api/Base/Connection.php';
	/**
	* 
	*/
	class CustomerList extends Connection
	{
		private function GetData()
		{
			return $this->query("SELECT * FROM Customer WHERE Customer.isCustomer = 1");
		}
		public function Execute()
		{
			return $this->convertToArray($this->GetData());
		}
	}
	$CustomerList = new CustomerList();
 ?>
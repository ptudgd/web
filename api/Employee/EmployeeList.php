<?php 
	include './api/Base/Connection.php';

	/**
	* 
	*/
	class EmployeeList extends Connection
	{
		private function GetData(){
			return $this->query("SELECT * FROM Employee");
		}
		public function Execute()
		{
			return $this->convertToArray($this->GetData());
		}
	}
	$EmployeeList = new EmployeeList();
 ?>
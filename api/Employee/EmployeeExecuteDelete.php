<?php 
include '../Base/Connection.php';
	/**
	* 
	*/
	class EmployeeExecueDelete extends Connection
	{
		private function SetData()
		{
			$EmployeeId = $_POST['EmployeeId'];
			return $this->query("DELETE FROM Employee WHERE EmployeeId=".$EmployeeId);
		}
		public function Execute()
		{
			try {
				
				$this->SetData();
				return $this->Success([]);
			} catch (Exception $e) {
				return $this->Success([],$e);
			}
		}
	}
	$Execute = new EmployeeExecueDelete();
	$Execute->Execute();
	?>
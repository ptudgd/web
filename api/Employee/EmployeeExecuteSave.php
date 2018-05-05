<?php 
include '../Base/Connection.php';
	/**
	* 
	*/
	class EmployeeExecueSave extends Connection
	{
		private function SetData()
		{
			$EmployeeId = $_POST['EmployeeId'];
			$EmployeeName = $_POST['EmployeeName'];
			$Phone = $_POST['Phone'];
			$Email = $_POST['Email'];
			$Address = $_POST['Address'];
			return $this->query("UPDATE Employee SET  EmployeeName ='".$EmployeeName."',Phone='".$Phone."',Email='".$Email."',Address='".$Address."' WHERE EmployeeId=".$EmployeeId);
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
	$ExecuteSave = new EmployeeExecueSave();
	$ExecuteSave->Execute();
	?>
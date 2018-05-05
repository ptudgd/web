<?php 
include '../Base/Connection.php';
	/**
	* 
	*/
	class CustomerExecueDelete extends Connection
	{
		private function SetData()
		{
			$CustomerId = $_POST['CustomerId'];
			return $this->query("DELETE FROM Customer WHERE CustomerId=".$CustomerId);
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
	$Execute = new CustomerExecueDelete();
	$Execute->Execute();
	?>
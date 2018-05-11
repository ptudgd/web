<?php 
	/**
	 * 
	 */
	include '../Base/Connection.php';
	class VenderGetById extends Connection
	{
		public $CustomerId;
		public function __construct($id)
		{
			$this->CustomerId = $id;
		}
		private function GetData()
		{
			return $this->query("SELECT * FROM Customer WHERE Customer.isVender = 1");
		}
		public function Execute()
		{
			return $this->convertToArray($this->GetData());
		}
	}
	$VenderGetById = new VenderGetById($_GET['CustomerId']);
	$VenderGetById->Execute();
 ?>
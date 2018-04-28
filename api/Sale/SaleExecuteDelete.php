<?php 
	include '../Base/Connection.php';

	/**
	* 
	*/
	class SaleExecuteDelete extends Connection
	{
		public function __construct(){
			parent::__construct();
		}
		private function GetData()
		{
			$id = 0;
			if(isset($_POST["id"])){
				$id = $_POST["id"];
			}
			return $this->query("DELETE FROM Sale WHERE SaleId = ".$id.";DELETE FROM saleitem WHERE saleitemId = ".$id);
		}
		public function Execute()
		{
			return $this->Success([]);
		}
	}
$i = new SaleExecuteDelete();
$i->Execute();
 ?>
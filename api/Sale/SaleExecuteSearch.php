<?php 
	include '../Base/Connection.php';

	/**
	* 
	*/
	class SaleExecuteSearch extends Connection
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
			return $this->query("SELECT * FROM SaleItem LEFT JOIN Product on Product.ProductId = SaleItem.ProductId WHERE SaleItem.SaleId = ". $id);
		}
		public function Execute()
		{
			return $this->Success($this->GetData());
		}
	}
	$i = new SaleExecuteSearch();
	$i->Execute();

 ?>
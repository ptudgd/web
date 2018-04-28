<?php 
include './api/Base/Connection.php';
class SaleList extends Connection
{
	private function GetData()
	{
		return $this->query("SELECT *,SUM(SaleItem.Qty) as Qty,SUM(SaleItem.Total) as Total FROM Sale LEFT JOIN SaleItem on SaleItem.SaleId = Sale.SaleId and SaleItem.SaleGroupId = Sale.SaleGroupId LEFT JOIN Employee ON Employee.EmployeeId = Sale.EmployeeId LEFT JOIN Customer on Customer.CustomerId = Sale.CustomerId");
	}
	public function Execute()
	{
		return $this->convertToArray($this->GetData());
	}
}
$SaleList = new SaleList();
?>
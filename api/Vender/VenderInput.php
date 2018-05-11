<?php 
	/**
	 * 
	 */
	include '../Base/Connection.php';
	class VenderInput extends Connection
	{
		
		public function Execute()
		{
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$CustomerId = $_POST['CustomerId'];
		}
	}
	$VenderInput = new VenderInput();
	$VenderInput->Execute();
 ?>
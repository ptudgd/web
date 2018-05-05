<?php 
/**
* 
*/
include '../Base/Connection.php';
class CheckLogin extends Connection
{
	
	public function Execute()
	{
		$username = $_POST["username"];
		$password = $_POST["password"];
		$result = $this->query("SELECT * FROM User WHERE Username = '".$username."' and password ='".$password."'");
		if($result->num_rows > 0){
			$_SESSION["username"] = $username;
			return $this->Success();
		}
		return $this->Success([],"Login Failed!");
	}
}
$CheckLogin = new CheckLogin();
$CheckLogin->Execute();
 ?>


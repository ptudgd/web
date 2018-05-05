<?php
include 'Base.php';
class Connection extends Base
{
	public $con;
	public function __construct()
	{
		//echo "<script>window.location.href = '/page/login.php'</script>";
		parent::__construct();
		$user="root";
		$pass="";
		$database="qlbh";
		$hostname="localhost";
		$this->con = @mysqli_connect($hostname,$user,$pass,$database);
		@mysqli_query($con,"SET NAMES UTF8");
	}
	function query($sql)
	{
		return $this->con->query($sql);
	}

	public function Success($data= [],$Message = null)
	{
		$ar = array();
		foreach ($data as $value) {
			array_push($ar,$value);
			//print json_encode($value);
		}
		print json_encode(array("data"=>$ar,"Message"=>$Message == null ? "Thành công!" : $Message));
	}
	public function convertToArray($data = []){
		$ar = array();
		foreach ($data as $value) {
			array_push($ar,$value);
		}
		return $ar;
	}
}
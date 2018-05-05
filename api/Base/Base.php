<?php 
	/**
	* 
	*/
	class Base
	{
		
		function __construct()
		{
			 if(!isset($_SESSION['username'])){
				//echo "<script>window.location.href = '/page/login.php'</script>";
			}
		}
	}

	?>
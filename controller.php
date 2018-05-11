<?php 
	$page = "";
	if(isset($_GET["page"])){
		$page = $_GET["page"];
	}
	switch ($page) {
		case '':
			include './page/home.php';
			break;
		case 'Home':
			include './page/home.php';
			break;
		case 'Sale':
			include './page/sale.php';
			break;
		case 'Employee':
			include './page/employee.php';
			break;
		case 'Customer':
			include './page/customer.php';
			break;
		case 'Vender':
			include './page/vender.php';
			break;
		case 'Product':
			include './page/product.php';
			break;
		case 'ProductGroup':
			include './page/product_group.php';
			break;
		default:
			echo  '<script>window.location.href = "page_404.php"</script>';
			break;
	}
	/**
	* get active
	*/

	
 ?>
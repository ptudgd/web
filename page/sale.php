<?php include './api/Sale/SaleList.php'; ?>
<div id="main-content">
	<!-- BEGIN Breadcrumb -->
	<div id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="/">Trang chủ</a>
				<span class="divider"><i class="fa fa-angle-right"></i></span>
			</li>
			<li class="active">Bán hàng</li>
		</ul>
	</div>
	<!-- END Breadcrumb -->

	<!-- BEGIN Main Content -->
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-title">
					<h3><i class="fa fa-table"></i>Danh sách đơn hàng</h3>
					<div class="box-tool">
						<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
						<a data-action="close" href="#"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="box-content">
					
					<div class="clearfix"></div>
					<div class="table-responsive" style="border:0">
						<table class="table table-advance" id="table1">
							<thead>
								<tr>
									<th>ID</th>
									<th>Ngày</th>
									<th>Tên khách hàng</th>
									<th>Nhân viên bán hàng</th>
									<th>Số lượng</th>
									<th>Tổng tiền</th>
									<th>Ghi chú</th>
									<th>Tác vụ</th>

								</tr>
							</thead>
							<tbody id="data_table">
								<?php 
									$data = $SaleList->Execute();
									foreach ($data as $value):
								 ?>
								<tr class="even">
									<td class="text-center"><?=$value["SaleId"]?></td>
									<td class="text-center"><?=$value["SaleDate"]?></td>
									<td class="text-center"><?=$value["CustomerName"]?></td>
									<td class="text-center"><?=$value["EmployeeName"]?></td>
									<td class="text-center"><?=$value["Total"]?></td>
									<td class="text-center"><?=$value["Note"]?></td>
									<td class="text-center"><button class="btn btn-default"><i class="fa fa-edit"></i></button> <button class="btn btn-default"><i class="fa fa-trash-o"></i></button></td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END Main Content -->

	<footer>
		<p>2013 © FLATY Admin Template.</p>
	</footer>

	<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>


<script>
	

	function DeleteSale(id){
		$.post(
			"/api/Sale/SaleExecuteDelete.php",
			{
				id: id
			},
			function(result){
				result = JSON.parse(result);
				
				$.notify(result.Message,{className:"success",position:"bottom right"});

			});
	}
	function openModal(id){
		$.post(
			"/api/Sale/SaleExecuteSearch.php",
			{
				id: id
			},
			function(result){
				result = JSON.parse(result);
				var html = '';
				$.each(result.data,function(k,v){
					debugger;
					html += '<tr><td>'+v.ProductId+'</td><td>'+v.ProductName+'</td><td>Otto</td><td>'+v.Note+'</td><td>'+v.Barcode+'</td></tr>'
				});
				$("#data_table_modal").html(html);
				$.notify(result.Message,{className:"success",position:"bottom right"});

			});
		$("#myModal").modal();
	}
</script>
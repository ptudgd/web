<?php include './api/Vender/VenderList.php'; ?>
<div id="main-content">
	<!-- BEGIN Breadcrumb -->
	<div id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="/">Trang chủ</a>
				<span class="divider"><i class="fa fa-angle-right"></i></span>
			</li>
			<li class="active">Nhà cung cấp</li>
		</ul>
	</div>
	<!-- END Breadcrumb -->

	<!-- BEGIN Main Content -->
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-title">
					<h3><i class="fa fa-table"></i>Danh sách nhà cung cấp</h3>
					<div class="box-tool">
						<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
						<a data-action="close" href="#"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="box-content">
					<div class="btn-toolbar pull-right clearfix">
						<div class="btn-group">
							<a class="btn btn-circle show-tooltip" title="Add new record" href="#"><i class="fa fa-plus"></i></a>
							<a class="btn btn-circle show-tooltip" title="Edit selected" href="#"><i class="fa fa-edit"></i></a>
							<a class="btn btn-circle show-tooltip" title="Delete selected" href="#"><i class="fa fa-trash-o"></i></a>
						</div>
						<div class="btn-group">
							<a class="btn btn-circle show-tooltip" title="Print" href="#"><i class="fa fa-print"></i></a>
							<a class="btn btn-circle show-tooltip" title="Export to PDF" href="#"><i class="fa fa-file-text-o"></i></a>
							<a class="btn btn-circle show-tooltip" title="Export to Exel" href="#"><i class="fa fa-table"></i></a>
						</div>
						<div class="btn-group">
							<a class="btn btn-circle show-tooltip" title="Refresh" href="#"><i class="fa fa-repeat"></i></a>
						</div>
					</div>
					<br/><br/>
					<div class="clearfix"></div>
					<div class="table-responsive" style="border:0">
						<table class="table table-advance" id="table1">
							<thead>
								<tr>
									<th class="text-center"">Mã</th>
									<th class="text-center">Tên</th>
									<th class="text-center">Điện thoại</th>
									<th class="text-center">Email</th>
									<th class="text-center">Tác vụ</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$data = $VenderList->Execute();
								foreach ($data as $value):
									?>
									<tr class="table-flag-blue">
										<td class="text-center"><?=$value["CustomerId"]?></td>
										<td class="text-center"><?=$value["CustomerName"]?></td>
										<td class="text-center"><?=$value["Phone"]?></td>
										<td class="text-center"><?=$value["Email"]?></td>
										<td class="text-center"><button class="btn btn-default" onclick="btnEditClick(<?=$value['CustomerId']?>);return false;"><i class="fa fa-edit"></i></button> <button class="btn btn-default" onclick="ExecuteDelete(<?=$value['CustomerId']?>);><i class="fa fa-trash-o"></i></button></td>
									</tr>
									<div id="myModal_<?=$value['CustomerId']?>" class="modal fade" role="dialog">
										<div class="modal-dialog">

											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Chỉnh sửa nhân viên</h4>
												</div>
												<div class="modal-body">
													<input type="hidden" id="CustomerId" value="<?=$value['CustomerId']?>"><div class="form-group"> <label>Tên</label> <input type="text" class="form-control" id="EmpployeeName" placeholder="Nhập tên nhà cung cấp" value="<?=$value['CustomerName']?>"> </div><div class="form-group"> <label>Điện thoại</label> <input type="text" class="form-control" id="Phone" placeholder="Nhập số điện thoại" value="<?=$value['Phone']?>"> </div><div class="form-group"> <label>Email</label> <input type="text" class="form-control" id="Phone" placeholder="Nhập Email" value="<?=$value['Email']?>"> </div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
												</div>
											</div>

										</div>
									</div>
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
	function btnEditClick(id) {
		$("#myModal_"+id).modal();
	}
	function ExecuteDelete(id) {
		$.post(
			'/api/Customer/CustomerExecuteDelete.php', 
			{
				CustomerId : id
			},
			function(result) {
				console.log(result);
				result = JSON.parse(result);
				noti(result.Message,'success');
			});
	}
</script>
<?php include './api/Employee/EmployeeList.php'; ?>
<div id="main-content">
	<!-- BEGIN Breadcrumb -->
	<div id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="/l">Trang chủ</a>
				<span class="divider"><i class="fa fa-angle-right"></i></span>
			</li>
			<li class="active">Nhân viên</li>
		</ul>
	</div>
	<!-- END Breadcrumb -->

	<!-- BEGIN Main Content -->
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-title">
					<h3><i class="fa fa-table"></i>Danh sách nhân viên</h3>
					<div class="box-tool">
						<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
						<a data-action="close" href="#"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="box-content">
					<div class="btn-toolbar pull-right clearfix">
						<div class="btn-group">
							<a class="btn btn-circle show-tooltip" title="Add new record" href="#" onclick="btnEditClick(null);return false;"><i class="fa fa-plus"></i></a>
						</div>
						
					</div>
					<br/><br/>
					<div class="clearfix"></div>
					<div class="table-responsive" style="border:0">
						<table class="table table-advance" id="table1">
							<thead>
								<tr>
									<th class="text-center"">Mã nhân viên</th>
									<th class="text-center">Tên</th>
									<th class="text-center">Điện thoại</th>
									<th class="text-center">Email</th>
									<th class="text-center">Địa chỉ</th>
									<th class="text-center">Tác vụ</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$data = $EmployeeList->Execute();
								foreach ($data as $value):
									?>
									<tr class="table-flag-blue">
										<td class="text-center"><?=$value["EmployeeId"]?></td>
										<td class="text-center"><?=$value["EmployeeName"]?></td>
										<td class="text-center"><?=$value["Phone"]?></td>
										<td class="text-center"><?=$value["Email"]?></td>
										<td class="text-center"><?=$value["Address"]?></td>
										<td class="text-center"><button onclick="btnEditClick(<?=$value["EmployeeId"]?>);return false;" class="btn btn-default"><i class="fa fa-edit"></i></button> <button class="btn btn-default" onclick="ExecteDelete(<?=$value['EmployeeId']?>);"><i class="fa fa-trash-o"></i></button></td>
									</tr>
									

									<div id="myModal_<?=$value['EmployeeId']?>" class="modal fade" role="dialog">
										<div class="modal-dialog">

											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Chỉnh sửa nhân viên</h4>
												</div>
												<div class="modal-body">
													<input type="hidden" id="EmployeeId_<?=$value['EmployeeId']?>" value="<?=$value['EmployeeId']?>"><div class="form-group"> <label>Tên</label> <input type="text" class="form-control" id="EmployeeName_<?=$value['EmployeeId']?>" placeholder="Nhập tên nhân viên" value="<?=$value['EmployeeName']?>"> </div><div class="form-group"> <label>Điện thoại</label> <input type="text" class="form-control" id="Phone_<?=$value['EmployeeId']?>" placeholder="Nhập số điện thoại" value="<?=$value['Phone']?>"> </div><div class="form-group"> <label>Email</label> <input type="text" class="form-control" id="Email_<?=$value['EmployeeId']?>" placeholder="Nhập Email" value="<?=$value['Email']?>"> </div><div class="form-group"> <label>Địa chỉ</label> <input type="text" class="form-control" id="Address_<?=$value['EmployeeId']?>" placeholder="Nhập địa chỉ" value="<?=$value['Address']?>"> </div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-success" onclick="ExecuteSave(<?=$value['EmployeeId']?>);return false;" data-dismiss="modal">Save</button>
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
	function ExecuteSave(id) {
		$.post(
			'/api/Employee/EmployeeExecuteSave.php', 
			{
				EmployeeId : $("#EmployeeId_"+id).val(),
				EmployeeName : $("#EmployeeName_"+id).val(),
				Phone : $("#Phone_"+id).val(),
				Email : $("#Email_"+id).val(),
				Address : $("#Address_"+id).val()
			},
			function(result) {
				result = JSON.parse(result);
				noti(result.Message,'success');
			});
	}
	function ExecteDelete(id) {
		debugger;
		$.post(
			'/api/Employee/EmployeeExecuteDelete.php', 
			{
				EmployeeId : id
			},
			function(result) {
				console.log(result);
				result = JSON.parse(result);
				noti(result.Message,'success');
			});
	}
</script>
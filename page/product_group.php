<?php include './api/Product/ProductGroupList.php'; ?>
<div id="main-content">
	<!-- BEGIN Breadcrumb -->
	<div id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="/">Trang chủ</a>
				<span class="divider"><i class="fa fa-angle-right"></i></span>
			</li>
			<li class="active">Nhóm sản phẩm</li>
		</ul>
	</div>
	<!-- END Breadcrumb -->

	<!-- BEGIN Main Content -->
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-title">
					<h3><i class="fa fa-table"></i>Danh sách nhóm sản phẩm</h3>
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
									<th class="text-center">Ghi chú</th>
									<th class="text-center">Tác vụ</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$data = $ProductGroupList->Execute();
								foreach ($data as $value):
									?>
									<tr class="table-flag-blue">
										<td class="text-center"><?=$value["ProductGroupId"]?></td>
										<td class="text-center"><?=$value["ProductGroupName"]?></td>
										<td class="text-center"><?=$value["Note"]?></td>
										<td class="text-center"><button class="btn btn-default" onclick="btnEditClick(<?=$value['ProductGroupId']?>);return false;"><i class="fa fa-edit"></i></button> <button class="btn btn-default"><i class="fa fa-trash-o"></i></button></td>
									</tr>
									<div id="myModal_<?=$value['CustomerId']?>" class="modal fade" role="dialog">
										<div class="modal-dialog">

											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Chỉnh sửa nhóm hàng hóa</h4>
												</div>
												<div class="modal-body">
													<input type="hidden" id="ProductGroupId" value="<?=$value['ProductGroupId']?>"><div class="form-group"> <label>Mã</label> <input type="text" class="form-control" id="ProductGroupId" placeholder="Nhập mã nhóm hàng hóa" value="<?=$value['ProductGroupId']?>"> </div><div class="form-group"> <label>Tên nhóm hàng hóa</label> <input type="text" class="form-control" id="ProductGroupName" placeholder="Nhập số điện thoại" value="<?=$value['ProductGroupName']?>"> </div><div class="form-group"> <label>Ghi chú</label> <input type="text" class="form-control" id="Note" placeholder="Ghi chú" value="<?=$value['Note']?>"> </div>
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
</script>
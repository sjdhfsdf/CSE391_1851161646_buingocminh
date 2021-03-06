<?php
if (!defined("Tem") || $_SESSION["user"]["user_lv"] == 2) { ?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<?php echo "Bạn không có quyền truy cập file này" . "<br/>"; ?>
			<button><a href="index.php">Trở về</a></button>
		</div>
		<!--/.row-->
	</div>
<?php
} else{?>
<?php

if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 1;
}
$rows_per_page = 4;
$per_rows = $page * $rows_per_page - $rows_per_page;
// LAY TONG SO BAN GHI
$total_rows = mysqli_num_rows(mysqli_query($conn, " SELECT*FROM class"));
$total_page = ceil($total_rows / $rows_per_page);

// button phan trang
$list_pages = '';
// trang trc
$page_perv = $page - 1;
if ($page_perv < 1) {
	$page_perv = 1;
}
$list_pages .=  '<li class="page-item"><a class="page-link" href="index.php?page_layout=class&page=' . $page_perv . '">&laquo;</a></li>';

for ($i = 1; $i <= $total_page; $i++) {
	if ($i == $page) {
		$active = 'active';
	} else {
		$active = '';
	}
	$list_pages .= '<li class="page-item ' . $active . '"><a class="page-link" href="index.php?page_layout=class&page=' . $i . '">' . $i . '</a></li>';
}
// trang sau
$page_next = $page + 1;
if ($page_next > $total_page) {
	$page_next = $total_page;
}
$list_pages .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=class&page=' . $page_next . '">&raquo;</a></li>';

?>
<script>
	function delItem(name) {
		return confirm('ban muon xóa khóa học: ' + name + ' ?');
	}
</script>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="../admin/index.php"><i class="fas fa-home"></i></a></li>
			<li class="active">Quản lý khóa học</li>
		</ol>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Quản lý Khóa học</h1>
		</div>
	</div>
	<!--/.row-->
	<div id="toolbar" class="btn-group">
		<a href="index.php?page_layout=add_class" class="btn btn-success">
			<i class="glyphicon glyphicon-plus"></i> Thêm Khóa học
		</a>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<table data-toolbar="#toolbar" data-toggle="table">

						<thead>
							<tr>
								<th data-field="id" data-sortable="true">ID</th>
								<th>Tên Khóa học</th>
								<th>ngày bắt đầu</th>
								<th>ngày kết thúc</th>
								<th>lịch học</th>
								<th>Trạng thái</th>
								<th>Hành động</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql = "SELECT * FROM class ORDER BY id DESC LIMIT $per_rows,$rows_per_page";
							$query = mysqli_query($conn, $sql);
							while ($row = mysqli_fetch_assoc($query)) {
							?>
								<tr>
									<td style=""><?php echo $row['id']; ?></td>
									<td style=""><?php echo $row['name']; ?></td>
									<td><?php echo $row['start']; ?></td>
									<td><?php echo $row['end']; ?></td>
									<td><?php switch ($row['schedule']) {
											case '1':
												echo "Từ 18h-20h, Thứ 2,4,6";
												break;
											case '2':
												echo "Từ 7h-9h, Thứ 2,4,6";
												break;
											case '3':
												echo "Từ 18h-20h, Thứ 3,5,7";
												break;
											case '4':
												echo "Từ 7h-9h, Thứ 3,5,7";
												break;
										} ?></td>
									<td><?php if($row['status']==0) echo 'Công khai'; else echo'Chưa công khai' ?></td>
									<td class="form-group">
										<a href="index.php?page_layout=edit_class&id=<?php echo $row['id'] ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
										<a onclick="return delItem('<?php echo $row['name']; ?> ')" href="class\delete_khoahoc.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="panel-footer">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<?php echo $list_pages; ?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!--/.row-->
</div>
<!--/.main-->
<?php
}
?>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
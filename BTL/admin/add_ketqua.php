<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trường dạy lái xe Thống Nhất - Administrator</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!--Icons-->
	<script src="https://kit.fontawesome.com/99f845d262.js" crossorigin="anonymous"></script>

	<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Trường dạy lái xe </span>Thống Nhất</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i> Admin
							<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user">
										<use xlink:href="#stroked-male-user"></use>
									</svg> Hồ sơ</a></li>
							<li><a href="#"><svg class="glyph stroked cancel">
										<use xlink:href="#stroked-cancel"></use>
									</svg> Đăng xuất</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="admin.html"><i class="fas fa-columns"></i> Dashboard</a></li>
			<li><a href="hoc_vien.html"><i class="fas fa-user-graduate"></i>Quản lý học viên</a></li>
			<li><a href="khoahoc.html"><i class="fas fa-book-open"></i>Quản lý khóa học</a></li>
			<li><a href="ki_thi.html"><i class="far fa-file-alt fas"></i>Quản lý Thi</a></li>
			<li class="active"><a href="ket_qua.html"><i class=" fas  fa-address-card"></i> Quản lý kết quả</a></li>
			<li><a href="user.html"><i class="fas fa-users"></i> Quản lý người dùng </a></li>
			<li><a href="setting.html"><i class="fas fa-cogs"></i> Cấu hình</a></li>
		</ul>

	</div>
	<!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="admin.html"><i class="fas fa-home"></i></a></li>
                <li><a href="ket_qua.html">Quản lý kết quả</a></li>
				<li class="active">Thêm kết quả</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thêm kết quả</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
                        <div class="col-md-8">
                            <div class="alert alert-danger">số báo danh đã tồn tại !</div>
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Họ & Tên</label>
                                    <input type="text" name="stu_name" required class="form-control"
                                         placeholder="Họ & Tên...">
                                </div>
                                <div class="form-group">
                                    <label>Tên kì thi</label>
                                    <input type="text" name="exam_name" required 
                                        class="form-control" placeholder="Tên kì thi...">
                                </div>
                                <div class="form-group">
                                    <label>Số báo danh</label>
                                    <input type="text" name="result_num" required 
                                        class="form-control" placeholder="Số báo danh...">
                                </div>
                                <div class="form-group">
                                    <label>lớp</label>
                                    <input type="text" name="stu_class" required `
                                        class="form-control" placeholder="lơp...">
                                </div>
                                <div class="form-group">
                                    <label> Kết quả</label>
                                    <select name="result_exam" class="form-control">
                                        <option selected value=1>HOÀN THÀNH</option>
                                        <option value=2>TRƯỢT</option>
                                        
                                    </select>
                                </div>
                                <button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                        </div>
                        </form>
                    </div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->

	</div>
	<!--/.main-->


</body>

</html>
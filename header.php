<!DOCTYPE html>
<html>
<head>
	<title>Phần mềm quản lý bán hàng</title>
	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="public/js/jquery.min.js"></script>
	<script type="text/javascript" src="public/js/popper.min.js"></script>
	<script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/js/load.js"></script>
	<script src="public/js/Chart.min.js"></script>
	<script src="public/js/chartdoashboad.js"></script>
</head>
<body>
	<div class="header-admin">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<ul class="nav navbar-nav float-right">
						<li class=" dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Xin chào <?php 
                            session_start();
                            echo $_SESSION['uid'];
        			?></a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="dangxuat.php">Đăng xuất</a>
				          <a class="dropdown-item" href="#">Tài khoản</a>
				        </div>
      					</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<div class="sidebar sidebar-fixed" id="sidebar">
					<ul class="list-group">
						<li class="list-group-item"><a href="dashboard" class="active"><i class="fa fa-eye" aria-hidden="true"></i>Tổng quan</a>
						</li>
						<li class="list-group-item"><a href="orders"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Hóa đơn</a></li>
						<li class="list-group-item"><a href="merchandise"><i class="fa fa-barcode" aria-hidden="true"></i>Hàng hóa</a></li>
						<li class="list-group-item"><a href="table"><i class="fa fa-table" aria-hidden="true"></i>Phòng/Bàn</a></li>
						<li class="list-group-item"><a href="customer"><i class="fa fa-users" aria-hidden="true"></i>Khách hàng / NCC</a></li>
						<li class="list-group-item"><a href="product"><i class="fa fa-list-alt" aria-hidden="true"></i>Thực đơn</a></li>
						<li class="list-group-item"><a href="warehousing"><i class="fa fa-truck" aria-hidden="true"></i>Nhập kho</a></li>
						<li class="list-group-item"><a href="stocktransfer"><i class="fa fa-truck" aria-hidden="true"></i>Chuyển kho</a></li>
						<li class="list-group-item"><a href="dashboard"><i class="fa fa-file-text-o" aria-hidden="true"></i>Phiếu thu</a></li>
						<li class="list-group-item"><a href="dashboard"><i class="fa fa-file-text-o" aria-hidden="true"></i>Phiếu chi</a></li>
						<li class="list-group-item"><a href="dashboard"><i class="fa fa-signal" aria-hidden="true"></i>Doanh thu</a></li>
						<li class="list-group-item"><a href="config"><i class="fa fa-cogs" aria-hidden="true"></i></i>Thiết lập</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-10">
				<div class="result-content">
					
				</div>
			</div>
		</div>
	</div>
	<div class="alert-login">
		
	</div>

	</body>
</html>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thái Dương</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="top-bar">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<span><i class="fa fa-phone-square" aria-hidden="true"></i> 0123.456.789</span> | <span><i class="fa fa-envelope" aria-hidden="true"></i> thaiduong@batdongsan.com.vn</span>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="collapse navbar-collapse" id="myNavbar">
			        
			        <ul class="nav navbar-nav">
			      	  <?php
			      	  	if (isset($_SESSION['adminh'])) {
			      	  		$username = strtoupper($_SESSION['adminh']);
			      	  	 	echo "<li><a href='index.php?action=admin'><span class='glyphicon glyphicon-user'></span> Xin chào! $username</a></li>
			      	  	 		<li><a href='index.php?action=logout'><span class='glyphicon glyphicon-log-out'></span> Thoát</a></li>";
			      	  	 }else {
			      	  	 	echo "<li><a href='index.php?action=register'><span class='glyphicon glyphicon-user'></span> Đăng ký</a></li>
			          	 		<li><a href='index.php?action=login'><span class='glyphicon glyphicon-log-in'></span> Đăng nhập</a></li>";
			      	  	 }
			      	  ?>
			        </ul>
			        <div class="rearch">
			        	<form action="search.php" method="get">
		                    <input id="search-input" name="search" type="text" placeholder="Tìm Kiếm ...">
		                    <input id="btnSe" type="submit" value="Tìm">
		                </form>
		        	</div>
		        </div>
			</div>
		</div>
	</div>
	<header>
		<nav class="navbar header-logo">
			<div class="container">
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand"><img src="images/logo.png"></a>
				</div>
				
			</div>
		</nav>
		<div class="header-menu">
			<div class="container">
				<ul class="nav navbar-nav">
		          <li><a href="index.php">Trang chủ</a></li>
		          <li><a href="index.php?action=gioithieu">Giới Thiệu</a></li>
		          <li class="dropdown">
		            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bất động sản<span class="caret"></span></a>
		            <ul class="dropdown-menu">
		              <?php
		              	$x = new m_product();
		              	$menu = $x->get_brand();
		              	while ($set = $menu -> fetch()):
		              ?>
		              <li><a href="index.php?action=productbrand&id=<?php echo $set[0];?>"><?php echo $set[1];?></a></li>
		              <?php endwhile; ?>
		            </ul>
		          </li>
		          <li><a href="index.php?action=hoan_thanh">Dự án hoàn thành</a></li>
		          <li><a href="index.php?action=chua_hoan_thanh">Dự án chưa hoàn thành</a></li>
		          <li><a href="index.php?action=tintuc">Tin Tức</a></li>
		          <li><a href="index.php?action=dieukhoan">Điều khoản</a></li>
		          <li><a href="index.php?action=lienhe">Liên Hệ</a></li>
		        </ul>
		        
	        </div>
		</div>
	</header>
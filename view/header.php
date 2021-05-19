<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced custom search, agency, agent, business, clean, corporate, directory, google maps, homes, idx agent, listing properties, membership packages, property, real broker, real estate, real estate agent, real estate agency, realtor">
<meta name="description" content="FindHouse - Real Estate HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Thái Dương</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
<!--	<div class="preloader"></div>-->

	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
		<div class="container-fluid p0">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="images/header-logo.png" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="index.php" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="images/header-logo.png" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="images/header-logo2.png" alt="header-logo2.png">
		            <span>Thái Dương</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
		            <li>
		                <a href="index.php"><span class="title">Trang chủ</span></a>
		            </li>
					<li><a href="index.php?action=gioithieu">Giới thiệu</a></li>
					<li>
		                <a href="#"><span class="title">Bất động sản</span></a>
                        <ul>
                              <?php
                                $x = new m_product();
                                $menu = $x->get_brand();
                                while ($set = $menu -> fetch()):
                              ?>
                              <li><a href="index.php?action=productbrand&id=<?php echo $set[0];?>"><?php echo $set[1];?></a></li>
                              <?php endwhile; ?>
                        </ul>
		            </li>
		            <li>
		                <a href="index.php?action=hoan_thanh"><span class="title">Dự án hoàn thành</span></a>
		            </li>
					<li>
		                <a href="index.php?action=chua_hoan_thanh"><span class="title">Dự án chưa hoàn thành</span></a>
		            </li>
					 <li>
		                <a href="index.php?action=tintuc"><span class="title">Tin tức</span></a>
		            </li>
		            <li>
		                <a href="index.php?action=dieukhoan"><span class="title">Điều khoản</span></a>
		            </li>
		            <li class="last">
		                <a href="index.php?action=lienhe"><span class="title">Liên hệ</span></a>
		            </li>
                  <?php
                    if (isset($_SESSION['adminh'])) {
                        $username = strtoupper($_SESSION['adminh']);
                        echo "<li><a href='index.php?action=admin'><span class='glyphicon glyphicon-user'></span> Xin chào! $username</a></li>
                            <li><a href='index.php?action=logout'><span class='glyphicon glyphicon-log-out'></span> Thoát</a></li>";
                     }else {
                        echo "<li class='list-inline-item list_s'><a href='index.php?action=register' class='btn flaticon-user' data-toggle='modal' data-target='.bd-example-modal-lg'><span class='dn-lg'>Đăng nhập/Đăng ký</span></a></li>";
                     }
                  ?>
<!--	                <li class="list-inline-item list_s"><a href="#" class="btn flaticon-user" data-toggle="modal" data-target=".bd-example-modal-lg"> <span class="dn-lg">Đăng nhập/Đăng ký</span></a></li>-->
		        </ul>
		    </nav>
		</div>
	</header>
	<!-- Modal -->
	<div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      	</div>
		      	<div class="modal-body container pb20">
		      		<div class="row">
		      			<div class="col-lg-12">
				    		<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
							  	<li class="nav-item">
							    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Đăng nhập</a>
							  	</li>
							  	<li class="nav-item">
							    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Đăng kí</a>
							  	</li>
							</ul>
		      			</div>
		      		</div>
					<div class="tab-content container" id="myTabContent">
					  	<div class="row mt25 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					  		<div class="col-lg-6 col-xl-6">
					  			<div class="login_thumb">
					  				<img class="img-fluid w100" src="images/resource/login.jpg" alt="login.jpg">
					  			</div>
					  		</div>
					  		<div class="col-lg-6 col-xl-6">
								<div class="login_form" id="login">
									<form action="?action=loginaction" method="post">
										<div class="heading">
											<h4>Đăng nhập</h4>
										</div>
										<hr>
										<div class="input-group mb-2 mr-sm-2">
										    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="User Name Or Email" name="username">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-user"></i></div>
										    </div>
										</div>
										<div class="input-group form-group">
									    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-password"></i></div>
										    </div>
										</div>
										<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="exampleCheck1">
											<label class="custom-control-label" for="exampleCheck1">Lưu mật khẩu</label>
											<a class="btn-fpswd float-right" href="#">Quên mật khẩu?</a>
										</div>
										<button type="submit" class="btn btn-log btn-block btn-thm">Log In</button>
										<p class="text-center">Bạn chưa có tài khoản? <a class="text-thm" href="?action=register">Đăng ký ngay</a></p>
									</form>
								</div>
					  		</div>
					  	</div>
					  	<div class="row mt25 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					  		<div class="col-lg-6 col-xl-6">
					  			<div class="regstr_thumb">
					  				<img class="img-fluid w100" src="images/resource/regstr.jpg" alt="regstr.jpg">
					  			</div>
					  		</div>
					  		<div class="col-lg-6 col-xl-6">
								<div class="sign_up_form" id="register">
									<div class="heading">
										<h4>Đăng ký</h4>
									</div>
									<form action="?action=registeraction" method="post">
										<hr>
                                        <div class="form-group input-group">
										    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Họ Tên" name="name">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
										    </div>
										</div>
                                        <div class="form-group input-group">
										    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Tên đăng nhập" name="username">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="text" class="form-control" id="exampleInputName" placeholder="Email" name="email">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-user"></i></div>
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="pass">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-password"></i></div>
										    </div>
										</div>
										<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="exampleCheck2">
											<label class="custom-control-label" for="exampleCheck2">Chấp nhận các điều khoản?</label>
										</div>
										<button type="submit" class="btn btn-log btn-block btn-thm">Đăng ký</button>
										<p class="text-center">Đã có tài khoản? <a class="text-thm" href="?action=login">Đăng nhập</a></p>
									</form>
								</div>
					  		</div>
					  	</div>
					</div>
		      	</div>
		    </div>
		</div>
	</div>
	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center">
		            <img class="nav_logo_img img-fluid mt20" src="images/header-logo2.png" alt="header-logo2.png">
		            <span class="mt20">FindHouse</span>
				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="page-register.html"><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li>
					<span><a href="index.html">Trang chủ</a></span>
				</li>
				<li><span>Dự án</span>
					<ul>
						<li>
							<span><a href="page-listing-full-width-grid.html">Dự án hoàn thành</a></span>
						</li>
						<li><span><a href="page-listing-full-width-grid.html">Dự án chưa hoàn thành</a></span>
						</li>
					</ul>
				</li>
				<li><span>Bất động sản</span>
					<ul>
						<li><span><a href="page-listing-grid-v1.html">Nhà</a></span></li>
						<li><span><a href="page-listing-grid-v1.html">Đất</a></span></li>
						<li><span><a href="page-listing-grid-v1.html">Căn hộ</a></span></li>
					</ul>
				</li>
				<li><span><a href="page-blog-v1.html">Tin tức</a></span></li>
				<li><a href="page-terms.html">Điều khoản</a></li>
				<li><a href="page-contact.html">Liên hệ</a></li>
				<li><a href="page-login.html"><span class="flaticon-user"></span> Đăng nhập</a></li>
				<li><a href="page-register.html"><span class="flaticon-edit"></span> Đăng kí</a></li>
			</ul>
		</nav>
	</div>
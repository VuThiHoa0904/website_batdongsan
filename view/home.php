<?php
	include('../view/header.php');
//	include '../view/slideshow.php';
?>

<!-- Home Design -->
	<section class="home-one home1-overlay home1_bgi1">
		<div class="container">
			<div class="row posr">
				<div class="col-lg-12">
					<div class="home_content">
						<div class="home-text text-center">
							<h2 class="fz55">Tìm ngôi nhà mơ ước của bạn</h2>
							<p class="fz18 color-white">Chỉ từ 1 tỷ đồng, bạn có thể sở hữu căn hộ như ý.</p>
						</div>
						<div class="home_adv_srch_opt">
							<div class="tab-content home1_adsrchfrm" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
									<div class="home1-advnc-search">
										<ul class="h1ads_1st_list mb0">
											<li class="list-inline-item col-md-9">
											    <div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Nhập thông tin ...">
											    </div>
											</li>
											<li class="list-inline-item ">
												<div class="small_dropdown2">
												  	<div class="dd_content2">
													    <div class="pricing_acontent">
													    	<span id="slider-range-value1"></span>
															<span id="slider-range-value2"></span>
														    <div id="slider"></div>
													    </div>
												  	</div>
												</div>
											</li>

											<li class="list-inline-item">
												<div class="search_option_button">
												    <button type="submit" class="btn btn-thm">Tìm</button>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
									<div class="home1-advnc-search">
										<ul class="h1ads_1st_list mb0">
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputName2" placeholder="Nhập thông tin...">
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_button">
												    <button type="submit" class="btn btn-thm">Tìm</button>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Feature Properties -->
	<section id="feature-property" class="feature-property bgc-f7">
		<div class="container ovh">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center mb40">
						<h2>Dự án nổi bật</h2>
						<p>Những dự án nổi bật và tầm cỡ của chúng tôi</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="feature_property_slider">
                         <?php
                    $product = $x->get_duan();
                    $count1 = 0;
                    while ($set = $product -> fetch()):
                    $schedule = $set['schedule'];
                        $count1++;
                        if ($count1==11) {
                            break;
                        }
                ?>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/duan/<?php echo $set['images'];?>" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">Cho thuê</a></li>
											<li class="list-inline-item"><a href="#">Bán</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="?action=duandetail&id=<?php echo $set[0] ?>"><?php echo $set['price'];?></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
<!--										<p class="text-thm">Apartment</p>-->
										<h4><a href="?action=duandetail&id=<?php echo $set[0] ?>"><?php echo $set[1];?></a></h4>
										<p><span class="flaticon-placeholder"></span><?php echo $set['vitri'];?></p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Start: <?php echo $set['schedule_start'];?></a></li>
											<li class="list-inline-item"><a href="#">Build: <?php echo $set['schedule_build'];?></a></li>
											<li class="list-inline-item"><a href="#">Success: <?php echo $set['schedule_success'];?></a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><i class="fa fa-check-circle-o"></i></li>
											<li class="list-inline-item"><a href="#">Mức độ hoàn thành</a></li>
										</ul>
										<div class="fp_pdate float-right"><?php echo $set['schedule'];?> %</div>
									</div>
								</div>
							</div>
						</div>
						 <?php endwhile;?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Property Cities -->
	<section id="property-city" class="property-city pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Lĩnh vực của chúng tôi</h2>
						<p>Những lĩnh vực bất động sản chính</p>
					</div>
				</div>
			</div>
             <?php
                $x = new m_product();
                $menu = $x->get_brand();
                $cate = $menu -> fetchAll();
              ?>
			<div class="row">
				<div class="col-lg-12 col-xl-12">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="images/property/pc2.jpg" alt="pc1.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4><?php echo $cate[0]['product_brand_name'];?></h4>
								<p>Các dự án nhà ở</p>
							</div>
						</div>
					</div>
				</div>
                <div class="col-lg-4 col-xl-4">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="images/property/pc4.jpg" alt="pc4.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4><?php echo $cate[1][1];?></h4>
								<p>Các dự án đất đai</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-xl-8">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="images/property/pc3.jpg" alt="pc3.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4><?php echo $cate[2][1];?></h4>
								<p>Các căn hộ, khu trung cư cao cấp</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Why Chose Us -->
	<section id="why-chose" class="whychose_us bgc-f7 pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Tại sao chọn chúng tôi?</h2>
						<p>Chúng tôi cung cấp những dịch vụ uy tín và chất lượng nhất.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-high-five"></span>
						</div>
						<div class="details">
							<h4>Lòng tin của khách hàng</h4>
							<p>Chúng tôi luôn đem lại niềm tin cho khách hàng.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-home-1"></span>
						</div>
						<div class="details">
							<h4>Nhu cầu của khách hàng</h4>
							<p>Chúng tôi luôn sẵn sàng thay đổi để đem lại sự hài lòng cho khách hàng.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-profit"></span>
						</div>
						<div class="details">
							<h4>Hỗ trợ trả góp</h4>
							<p>Khách hàng sẽ sở hữu những căn hộ cao cấp với mức lãi xuất 0% trong 2 năm đầu.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Testimonials -->
	<section id="our-testimonials" class="our-testimonial">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2 class="color-white">Khách hàng đã mua</h2>
						<p class="color-white">Những khách hàng thân thiết của chúng tôi</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="testimonial_grid_slider">
                        <?php
                                $x = new m_product();
                                $order = $x->get_orders();
                                while ($set = $order -> fetch()):
                              ?>
						<div class="item">
							<div class="testimonial_grid">
								<div class="thumb">
									<img src="images/testimonial/1.jpg" alt="1.jpg">
								</div>
								<div class="details">
									<h4><?php echo $set['name'];?></h4>
									<p><?php echo $set['email'];?></p>
									<p class="mt25"><?php echo $set['noidung'];?></p>
								</div>
							</div>
						</div>
						 <?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Blog -->
	<section class="our-blog bgc-f7 pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Tin tức</h2>
						<p>Các tin tức liên quan đến bất động sản.</p>
					</div>
				</div>
			</div>
			<div class="row">
                <?php
                    $tintuc = $x->get_tintuclimit();
                    while ($set = $tintuc -> fetch()):

                ?>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="for_blog feat_property">
						<div class="thumb">
							<img class="img-whp" src="images/tintuc/<?php echo $set['images_url'];?>" alt="bh1.jpg">
						</div>
						<div class="details">
							<div class="tc_content">
								<h4><a href="?action=tintucdetail&id=<?php echo $set[0] ?>"><?php echo $set['tintuc_name'];?></a></h4>
                                <p class=""><?php
									$string = $set['tintuc_detail'];
									if (strlen($string) > 300) {
									$trimstring = substr($string, 0, 300). '...';
									} else {
									$trimstring = $string;
									}
									echo $trimstring;

								?></p>
							</div>
							<div class="fp_footer">
								<a class="fp_pdate float-right" href="?action=tintucdetail&id=<?php echo $set[0] ?>">Đọc tiếp >></a>
							</div>
						</div>
					</div>
				</div>
                <?php endwhile;?>
			</div>
		</div>
	</section>


<?php include('../view/footer.php'); ?>
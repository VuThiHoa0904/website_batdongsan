<?php
	include('../view/header.php');
//	include '../view/slideshow.php';
?>
    <section class="main-content">
	<article>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<h3 class="title">Dự Án Nổi Bật</h3>
							<div class="row">
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
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="margin-bottom:30px;">
									<a href="?action=duandetail&id=<?php echo $set[0] ?>"><div class="product-h">
										<img src="images/duan/<?php echo $set['images'];?>">
									</div></a>

									<h3><a href="?action=duandetail&id=<?php echo $set[0] ?>"><?php echo $set[1];?></a></h3>
									<span class="price"><?php echo $set['price'];?></span>
									<p class="vitri"><?php echo $set['vitri'];?></p>
									<div class="schedule">
										<span><?php echo $schedule; ?>%</span>
									</div>
								</div>
								<?php endwhile;?>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<h3 class="title">Bất Động Sản Nổi Bật</h3>
							<div class="row">
								<?php
									$product = $x->get_product();
									$count1 = 0;
									while ($set = $product -> fetch()):
										$count1++;
										if ($count1==11) {
											break;
										}
								?>
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3  bds-box" style="margin-bottom:30px;">
									<a href="?action=productdetail&productid=<?php echo $set[0] ?>"><div class="product-h">
										<img src="images/product/<?php echo $set[3];?>">
									</div></a>

									<h3><a href="?action=productdetail&productid=<?php echo $set[0] ?>"><?php echo $set[1];?></a></h3>
									<span class="price"><?php echo $set[2];?></span>
									<p class="vitri"><?php echo $set['vitri'];?></p>
								</div>
								<?php endwhile;?>
							</div>
						</div>
						<div class="col-xs-12">
							<h3 class="title">Tin tức mới nhất</h3>
							<div class="row">
								<?php
									$tintuc = $x->get_tintuc();
									$count1 = 0;
									while ($set = $tintuc -> fetch()):
										$count1++;
										if ($count1==11) {
											break;
										}
								?>
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3  bds-box" style="margin-bottom:30px;">
									<a href="?action=tintucdetail&id=<?php echo $set[0] ?>"><div class="product-h">
										<img src="images/tintuc/<?php echo $set['images_url'];?>">
									</div></a>

									<h3><a href="?action=tintucdetail&id=<?php echo $set[0] ?>"><?php echo $set[1];?></a></h3>
									<div class="tintuc_detail">
										<?php
											$string = $set['tintuc_detail'];
											if (strlen($string) > 200) {
											$trimstring = substr($string, 0, 200). '...';
											} else {
											$trimstring = $string;
											}
											echo $trimstring;

										?>
									</div>
								</div>
								<?php endwhile;?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<?php include('../view/tintuc-left.php'); ?>
				</div>
			</div>
		</div>
	</article>
</section>
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
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col-lg-12">-->
<!--					<a href="#feature-property">-->
<!--				    	<div class="mouse_scroll">-->
<!--			        		<div class="icon">-->
<!--					    		<h4>Scroll Down</h4>-->
<!--					    		<p>to discover more</p>-->
<!--			        		</div>-->
<!--			        		<div class="thumb">-->
<!--			        			<img src="images/resource/mouse.png" alt="mouse.png">-->
<!--			        		</div>-->
<!--				    	</div>-->
<!--				    </a>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
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
						<h2>Find Properties in These Cities</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-xl-4">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="images/property/pc1.jpg" alt="pc1.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4>Miami</h4>
								<p>24 Properties</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-xl-8">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="images/property/pc2.jpg" alt="pc2.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4>Los Angeles</h4>
								<p>18 Properties</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-xl-8">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="images/property/pc3.jpg" alt="pc3.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4>New York</h4>
								<p>89 Properties</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xl-4">
					<div class="properti_city">
						<div class="thumb"><img class="img-fluid w100" src="images/property/pc4.jpg" alt="pc4.jpg"></div>
						<div class="overlay">
							<div class="details">
								<h4>Florida</h4>
								<p>47 Properties</p>
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
						<h2>Why Choose Us</h2>
						<p>We provide full service at every step.</p>
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
							<h4>Trusted By Thousands</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-home-1"></span>
						</div>
						<div class="details">
							<h4>Wide Renge Of Properties</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us">
						<div class="icon">
							<span class="flaticon-profit"></span>
						</div>
						<div class="details">
							<h4>Financing Made Easy</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
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
						<h2 class="color-white">Testimonials</h2>
						<p class="color-white">Here could be a nice sub title</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="testimonial_grid_slider">
						<div class="item">
							<div class="testimonial_grid">
								<div class="thumb">
									<img src="images/testimonial/1.jpg" alt="1.jpg">
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid">
								<div class="thumb">
									<img src="images/testimonial/1.jpg" alt="1.jpg">
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid">
								<div class="thumb">
									<img src="images/testimonial/1.jpg" alt="1.jpg">
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid">
								<div class="thumb">
									<img src="images/testimonial/1.jpg" alt="1.jpg">
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid">
								<div class="thumb">
									<img src="images/testimonial/1.jpg" alt="1.jpg">
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
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
						<h2>Articles & Tips</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="for_blog feat_property">
						<div class="thumb">
							<img class="img-whp" src="images/blog/bh1.jpg" alt="bh1.jpg">
						</div>
						<div class="details">
							<div class="tc_content">
								<p class="text-thm">Business</p>
								<h4>Skills That You Can Learn In The Real Estate Market</h4>
							</div>
							<div class="fp_footer">
								<ul class="fp_meta float-left mb0">
									<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
									<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
								</ul>
								<a class="fp_pdate float-right" href="#">7 August 2019</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="for_blog feat_property">
						<div class="thumb">
							<img class="img-whp" src="images/blog/bh2.jpg" alt="bh2.jpg">
						</div>
						<div class="details">
							<div class="tc_content">
								<p class="text-thm">Business</p>
								<h4>Bedroom Colors You’ll Never <br class="dn-1199"> Regret</h4>
							</div>
							<div class="fp_footer">
								<ul class="fp_meta float-left mb0">
									<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
									<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
								</ul>
								<a class="fp_pdate float-right" href="#">7 August 2019</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="for_blog feat_property">
						<div class="thumb">
							<img class="img-whp" src="images/blog/bh3.jpg" alt="bh3.jpg">
						</div>
						<div class="details">
							<div class="tc_content">
								<p class="text-thm">Business</p>
								<h4>5 Essential Steps for Buying an Investment</h4>
							</div>
							<div class="fp_footer">
								<ul class="fp_meta float-left mb0">
									<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
									<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
								</ul>
								<a class="fp_pdate float-right" href="#">7 August 2019</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Partners -->
	<section id="our-partners" class="our-partners">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Our Partners</h2>
						<p>We only work with the best companies around the globe</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/1.png" alt="1.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/2.png" alt="2.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/3.png" alt="3.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/4.png" alt="4.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="images/partners/5.png" alt="5.png">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Start Partners -->
	<section class="start-partners bgc-thm pt50 pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="start_partner tac-smd">
						<h2>Become a Real Estate Agent</h2>
						<p>We only work with the best companies around the globe</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="parner_reg_btn text-right tac-smd">
						<a class="btn btn-thm2" href="#">Register Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include('../view/footer.php'); ?>
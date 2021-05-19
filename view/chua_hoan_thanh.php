<?php
	include('../view/header.php');
	
?>
<!-- Listing Grid View -->
	<section class="our-listing bgc-f7 pb30-991">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">

						<div class="grid_list_search_result style2">
							<div class="col-sm-12 col-md-4 col-lg-3 col-xl-3">
								<div class="left_area">
									<p>Dự án chưa hoàn thành</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
                        <?php
							$hoanthanh = $x->get_duan();
							while ($set = $hoanthanh -> fetch()):
							$schedule = $set['schedule'];
							if($schedule < 100) {

						?>
						<div class="col-md-6 col-lg-4">
							<div class="feat_property home7 style4">
								<div class="thumb">
									<div class="fp_single_item_slider">
										<div class="item">
											<img class="img-whp" src="images/duan/<?php echo $set['images'];?>" alt="fp1.jpg">
										</div>
										<div class="item">
											<img class="img-whp" src="images/duan/<?php echo $set['images'];?>" alt="fp2.jpg">
										</div>
									</div>
									<div class="thmb_cntnt style2">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">Bán</a></li>
											<li class="list-inline-item"><a href="#">Cho thuê</a></li>
										</ul>
									</div>
									<div class="thmb_cntnt style3">
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#"><?php echo $set['price'];?></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<h4><a href="?action=duandetail&id=<?php echo $set[0]; ?>"><?php echo $set['title'];?></a></h4>
										<p><span class="flaticon-placeholder"></span> <?php echo $set['vitri'];?></p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a class="text-thm3" href="#">Start: <?php echo $set['schedule_start'];?></a></li>
											<li class="list-inline-item"><a class="text-thm3" href="#">Build: <?php echo $set['schedule_build'];?></a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><i class="fa fa-check-circle-o"></i></a></li>
											<li class="list-inline-item"><a href="#">Mức độ hoàn thành</a></li>
										</ul>
										<div class="fp_pdate float-right"><?php echo $schedule;?> %</div>
									</div>
								</div>
							</div>
						</div>
                        <?php } endwhile;?>
						<div class="col-lg-12 mt20">
							<div class="mbp_pagination">
								<ul class="page_navigation">
								    <li class="page-item disabled">
								    	<a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">1</a></li>
								    <li class="page-item active" aria-current="page">
								    	<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item"><a class="page-link" href="#">...</a></li>
								    <li class="page-item"><a class="page-link" href="#">29</a></li>
								    <li class="page-item">
								    	<a class="page-link" href="#"><span class="flaticon-right-arrow"></span></a>
								    </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include('../view/footer.php'); ?>
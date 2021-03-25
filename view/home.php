<?php
	include('../view/header.php');
	include '../view/slideshow.php';
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
<?php include('../view/footer.php'); ?>
<?php
	include('../view/header.php');
	
?>
<section class="main-content">
	<article>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
					<h3 class="title"><a href="#">Dự án đã hoàn thành</a></h3>
					<div class="row">
						<?php
							$hoanthanh = $x->get_duan();
							while ($set = $hoanthanh -> fetch()):
							$schedule = $set['schedule'];
							if($schedule == 100) {
						?>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<a href="?action=duandetail&id=<?php echo $set[0] ?>"><div class="product-h">
								<img src="images/duan/<?php echo $set['images'];?>">
							</div></a>
							<p class="name-p"><a href="?action=duandetail&id=<?php echo $set[0] ?>"><?php echo $set[1];?></a></p>
							<div class="schedule">
								<span ><?php echo $set['schedule'];?>%</span>
							</div>
							<span class="price"><?php echo $set['price'];?></span>
							<p class="vitri">Ngày bắt đầu: <?php echo $set['schedule_start'];?></p>
							<p class="vitri">Ngày dự kiến hoàn thành: <?php echo $set['schedule_build'];?></p>
							<p class="vitri">Ngày hoàn thành: <?php echo $set['schedule_success'];?></p>	
							<p class="vitri"><?php echo $set['vitri'];?></p>	
							
						</div>
						<?php } endwhile;?>
						
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
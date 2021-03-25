<?php include '../view/header.php';
	$brand = $_GET['id'];
	$brandid=$brand;
	
?>
<section id="product" class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12"><img src="images/slideshow1.jpg" class="img-responsive banner"></div>
				<div class="col-xs-12 col-sm-12 col-md-8">
					<article>
						
						<?php
							$brand = $x->get_productBrand($brandid);
							$count = 0;
							while ($set = $brand -> fetch()):
						?>
						<div class="col-xs-12 col-sm-4 col-md-4 wow bounceInUp">
							<a href="?action=productdetail&productid=<?php echo $set[0] ?>"><div class="product-h">
								<img src="images/product/<?php echo $set[3]; ?>">
								
							</div>
							</a>
							<h3><a href="?action=productdetail&productid=<?php echo $set[0] ?>"><?php echo $set[1];?></a></h3>
							<span class="price"><?php echo $set[2];?></span>
							<p class="vitri"><?php echo $set['vitri'];?></p>	
							
						</div>
						<?php endwhile;?>
						<div class="clearfix"></div>
						
					</article>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<?php include('../view/tintuc-left.php'); ?>
				</div>
			</div>
		</div>	
	</section>
<?php include'../view/footer.php'; ?>
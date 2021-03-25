<?php
	include('../view/header.php');

?>
<section class="page-tintuc">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
					<h3 class="title"><a href="#">Tin Tức</a></h3>
					<div class="row">
						<?php
							$tintuc = $x->get_tintuc();
							while ($set = $tintuc -> fetch()):
							
						?>
						<div class="tintuc-list col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<a href="?action=tintucdetail&id=<?php echo $set[0] ?>"><div class="product-h">
								<img class="img-responsive" src="images/tintuc/<?php echo $set['images_url'];?>">
							</div></a>
							<p class="name-p"><a href="?action=tintucdetail&id=<?php echo $set[0] ?>"><?php echo $set['tintuc_name'];?></a></p>
							<div class="tintuc_detail">
								<?php 
									$string = $set['tintuc_detail'];
									if (strlen($string) > 300) {
									$trimstring = substr($string, 0, 300). '...';
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
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<?php include('../view/tintuc-left.php'); ?>
				</div>
			</div>
		</div>
</section>
<?php include('../view/footer.php'); ?>
<?php include'../view/header.php'; 
	$detail = new m_product();
	$tintuc = $detail->get_tintucId($_GET['id']);
?>
	<section id="detail-pd" style="margin-top: 50px;">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-9 col-md-9 col-xs-12 col-xs-12">
					<img src="images/tintuc/<?php echo $tintuc['images_url']; ?>"><br>
					<p class="title-p"><?php echo $tintuc['tintuc_name']; ?></p><br>
					<div class="product_details">
						<h4>Chi tiết</h4>
						<p><?php echo $tintuc['tintuc_detail']; ?></p>
					</div><br>
					
				</div>
				<div class="col-lg-3 col-md-3 col-xs-12 col-xs-12">
					<?php include('../view/tintuc-left.php'); ?>
				</div>		
			</div>
		</div>	
	</section>
<?php include'../view/footer.php'; ?>
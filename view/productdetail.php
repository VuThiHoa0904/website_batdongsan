<?php include'../view/header.php'; 
	$detail = new m_product();
	$product = $detail->get_productId($_GET['productid']);
?>
	<section id="detail-pd" style="margin-top: 50px;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
					<div class="row">
						
						<div class="col-xs-12">
							<img src="images/product/<?php echo $product[3] ?>">
						
							<p class="title-p"><?php echo $product[1]; ?></p><br>
							<span class="price-p"><?php echo $product[2]; ?></span><br>
							<div class="product_details">
								<h4>Vị Trí:</h4>
								<p><?php echo $product['vitri'];?></p>

								<h4>Chi tiết:</h4>
								<p><?php echo $product['product_details']; ?></p>
							</div><br>
							<button class="click-show btn btn-warning">Đặt mua</button>
							<form action="?action=orders" class="form-show" method="post" enctype='multipart/form-data'>
							  <div class="form-group">
							    <label>Họ và Tên</label>
							    <input class="form-control" name="name" type="text" placeholder="Họ và Tên" required>
							  </div>
							  <div class="form-group">
							    <label >Email</label>
							    <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
							  </div>
							  <div class="form-group">
							    <label >Số điện thoại</label>
							    <input name="phone" type="text" class="form-control" required>
							  </div>
							  <div class="form-group">
							    <label >Nội dung:</label>
							    <textarea name="noidung" class="form-control" rows="3" required></textarea>
							  </div>
							  <div class="form-group">
							    <input style="display:none;" name="product_order" type="text" class="form-control" value="<?php echo $product[1]; ?>">
							  </div>
							  <button type="submit" class="btn btn-primary">Gửi</button>
							</form>
						</div>
						
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<?php include('../view/tintuc-left.php'); ?>
				</div>
			</div>
		</div>	
	</section>
<?php include'../view/footer.php'; ?>
<script type="text/javascript">
jQuery(".click-show").click(function(){
    jQuery(".form-show").toggle();
});
</script>
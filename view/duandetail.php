<?php include'../view/header.php'; 
	$detail = new m_product();
	$duan = $detail->get_duanId($_GET['id']);
?>
	<section id="detail-pd" style="margin-top: 50px;">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-9 col-md-9 col-xs-12 col-xs-12">
					<img src="images/duan/<?php echo $duan['images'] ?>"><br>
					<p class="title-p"><?php echo $duan['title']; ?></p><br>
					<span class="price-p"><?php echo $duan['price'];?></span>
					<div class="product_details">
						<p>Tiến độ thi công:</p> <?php echo $duan['schedule']; ?>% <br>

						<p>Vị trí:</p> <?php echo $duan['vitri']; ?>

						<h4>Chi tiết:</h4>
						<p><?php echo $duan['intro']; ?></p>
					</div><br>
					<H4>Liên hệ để đặt trước:</H4>
					<form action="?action=orders" method="post" enctype='multipart/form-data'>
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
							    <input style="display:none;" name="product_order" type="text" class="form-control" value="<?php echo $duan['title']; ?>">
							  </div>
							  <button type="submit" class="btn btn-primary">Gửi</button>
							</form>
				</div>

				<div class="col-lg-3 col-md-3 col-xs-12 col-xs-12">
					<?php include('../view/tintuc-left.php'); ?>
				</div>
				
			</div>
		</div>	
	</section>
<?php include'../view/footer.php'; ?>
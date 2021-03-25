<?php
	include('../view/header.php');
?>
<section>
	<article>
		<div class="container">
			<div class="row">
				<div class="col-xs-3">
					<?php include('../view/tintuc-left.php'); ?>
				</div>
				<div class="col-xs-9" style="margin-top:20px;">
					<h4>Trụ sở chính tại Hà Nội</h4>
					<p>Khu 13, Tổ 3, phường Quang Trung, TP.Thái Nguyên 
					<p>Điện thoại: (012) 3 456 789s</p>
					<p>Bạn hãy điền thông tin liên hệ của bạn vào form bên dưới:</p>
					<p>Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất có thể</p>
					<form>
					  <div class="form-group">
					    <label>Họ và Tên</label>
					    <input class="form-control" type="text" placeholder="Họ và Tên">
					  </div>
					  <div class="form-group">
					    <label >Email</label>
					    <input type="email" class="form-control"  placeholder="name@example.com">
					  </div>
					  <div class="form-group">
					    <label >Nội dung:</label>
					    <textarea class="form-control" rows="3"></textarea>
					  </div>

					  <button type="submit" class="btn btn-primary">Gửi</button>
					</form>
				</div>
			</div>
		</div>
	</article>
</section>
<?php include('../view/footer.php'); ?>
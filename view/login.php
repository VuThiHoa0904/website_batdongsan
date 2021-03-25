<?php
  include('../view/header.php');
?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">  

<link rel="stylesheet" href="css/login.css">
<section>
  <article>
    <div class="container">
      <div class="form">
     
        <div class="tab-content">
          
          <form action="?action=loginaction" method="post">
            <div class="field-wrap">
            <input type="text" required autocomplete="off" placeholder="Tài khoản" name="username" />
          </div>
          <div class="field-wrap">
            <input type="password" required autocomplete="off" placeholder="Mật khẩu" name="password" />
          </div>
          <p class="forgot" style="margin-bottom: 25px; float: left;"><a href="?action=register">Đăng ký</a></p>
          <p class="forgot" style="margin-bottom: 25px; float: right;"><a href="#">Quên mật khẩu?</a></p>
          <button class="button button-block"/>Đăng nhập</button>
          </form>
        </div><!-- tab-content -->   
      </div> <!-- /form -->
    </div>
  </article>
</section>
<?php include('../view/footer.php'); ?>
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
                <h1>Đăng ký</h1>
                <form action="?action=registeraction" method="post">
                <div class="top-row">
                  <div class="field-wrap">
                    <input type="text" required autocomplete="off" name="username" placeholder="Tài khoản"/>
                    <span style="color: red;"></span>
                  </div>
                  <div class="field-wrap">
                    <input type="text"required autocomplete="off" name="name" placeholder="Họ và tên" />
                  </div>
                </div>
                <div class="field-wrap">
                  <input type="email"required autocomplete="off" name="email" placeholder="Email" />
                </div>
                <div class="field-wrap">
                  <input type="password"required autocomplete="off" name="pass" placeholder="Mật khẩu" />
                </div>
                <button type="submit" name="submit" class="button button-block"/>Đăng ký</button>
                </form>
            </div><!-- tab-content -->
      </div> <!-- /form -->
    </div>
  </article>
</section>
<?php include('../view/footer.php'); ?>

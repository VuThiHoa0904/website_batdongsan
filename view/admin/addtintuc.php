
    <?php
            include('../view/admin/header.php');
        ?>
    <!-- /#wrapper -->
    <section id="page-wrapper">
            <div class="row">
                <div class="col-xs-12">
                    <form action="?action=adminadd_tintuc" method="post" enctype='multipart/form-data'>
                      <div class="form-row">
                        <div class="form-group col-lg-6">
                          <label for="inputEmail4" class="col-form-label">Tên</label>
                          <input type="text" class="form-control" name="name" required>
                          <p></p>
                          <label for="inputAddress" class="col-form-label">Hình ảnh</label>
                          <input type="file" class="form-control" name="img" required>
                          <p></p>
                        </div>                       
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="inputPassword4" class="col-form-label">Chi tiết</label>
                        <textarea rows="10" class="form-control" name="tintuc_detail" required>
                              
                        </textarea>                       
                      </div>
                      <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-danger">Thêm</button>
                      </div>      
                    </form>
                </div>
            </div>
        </section>
 <?php include('../view/admin/footer.php'); ?>
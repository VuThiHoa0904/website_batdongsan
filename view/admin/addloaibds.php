<?php
    include('../view/admin/header.php');
?>
    <!-- /#wrapper -->
    <section id="page-wrapper">
            <div class="row">
                <div class="col-xs-12">
                    <form action="?action=add_loaibds" method="post" enctype='multipart/form-data'>
                      <div class="form-row">
                        <div class="form-group col-lg-12">
                          <label for="inputPassword4" class="col-form-label">Tên Loại</label>
                          <input type="text" class="form-control" name="name" required>
                      
                        </div>                       
                      </div>
                      <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-danger">Thêm</button>
                      </div>      
                    </form>
                </div>
            </div>
        </section>
<?php
    include('../view/admin/footer.php');
?>
<?php
            include('../view/admin/header.php');
        ?>
    <!-- /#wrapper -->
    <section id="page-wrapper">
            <div class="row">
                
                <?php
                    $v = new m_product();
                    $edit = $v->get_tintucId($_GET['id']);
                    
                ?>
                <div class="col-xs-12">
                    <form action="?action=edittintuc&id=<?php echo $_GET['id'] ?>" method="post">
                          <label for="inputEmail4" class="col-form-label">Tên</label>
                          <input type="text" class="form-control" name="name" value="<?php echo $edit[1] ?>">
                          <p></p>
                          <label for="inputPassword4" class="col-form-label">Chi tiết</label>
                          <textarea rows="10" class="form-control" name="tintuc_detail">
                                <?php echo $edit['tintuc_detail'] ?>
                          </textarea>
                           <p></p>
                        <div class="edit-box">
                          <img src="images/tintuc/<?php echo $edit['images_url'] ?>" width="250px" height="250px">
                          <span id="edit">Thay hình ảnh ( click here )</span>
                          <input style="padding:0;" id="hybrid" type="text" class="form-control" name="img" value="<?php echo $edit['images_url'] ?>">
                        </div>
                         <p></p>
                        <button type="submit" class="btn btn-danger">Lưu</button>               
                    </form>
                </div>
            </div>
        </section>
 <?php include('../view/admin/footer.php'); ?>
  <script type="text/javascript">
    jQuery("#edit").click(function(){
        document.getElementById('hybrid').type = 'file';
    });
  </script>

<?php
    include('../view/admin/header.php');
?>
    <section id="page-wrapper">
            <div class="row">

                <?php
                    $v = new m_product();
                    $edit = $v->get_duanId($_GET['id']);

                ?>
                <div class="col-xs-12">
                    <form action="?action=edit_duan&id=<?php echo $_GET['id'] ?>" method="post">
                      <div class="form-row">
                        <div class="form-group col-lg-6">
                          <label for="inputEmail4" class="col-form-label">Tên dự án</label>
                          <input type="text" class="form-control" name="title" value="<?php echo $edit['title'] ?>">
                          <p></p>
                          <label for="inputPassword4" class="col-form-label">Giá</label>
                          <input type="text" class="form-control" name="price" value="<?php echo $edit['price'] ?>">
                          <p></p>
                          <label for="inputPassword4" class="col-form-label">Mô tả dự án</label>
                          <textarea rows="10" class="form-control" name="intro">
                                <?php echo $edit['intro'] ?>
                          </textarea>
                          <p></p>
                          <label for="inputPassword4" class="col-form-label">Thời gian bắt đầu dự án</label>
                          <input type="text" class="form-control" name="schedule_start" value="<?php echo $edit['schedule_start'] ?>">
                          <p></p>
                          <label for="inputPassword4" class="col-form-label">Dự kiến hoàn thành</label>
                          <input type="text" class="form-control" name="schedule_build" value="<?php echo $edit['schedule_build'] ?>">
                          <p></p>
                          <label for="inputPassword4" class="col-form-label">Thời gian hoàn thành</label>
                          <input type="text" class="form-control" name="schedule_success" value="<?php echo $edit['schedule_success'] ?>">
                        </div>

                      </div>
                      <div class="form-group col-lg-6">
                        <label for="inputPassword4" class="col-form-label">Tiến độ hoàn thành (%)</label>
                        <input type="number" class="form-control" name="schedule" value="<?php echo $edit['schedule'] ?>" min="0" max="100">
                        <p></p>
                        <label for="inputPassword4" class="col-form-label">Vị trí</label>
                        <input type="text" class="form-control" name="vitri" value="<?php echo $edit['vitri'] ?>">
                        <p></p>
                        <div class="edit-box">
                          <img src="images/duan/<?php echo $edit['images'] ?>" width="250px" height="250px">
                          <span id="edit">Thay hình ảnh ( click here )</span>
                          <input id="hybrid" type="text" class="form-control" name="img" value="<?php echo $edit['images'] ?>">
                        </div>
                      </div>

                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-danger">Lưu</button>
                    </div>

                    </form>


                </div>
            </div>
        </section>
<?php
    include('../view/admin/footer.php');
?>
    <script type="text/javascript">
        jQuery("#edit").click(function(){
            document.getElementById('hybrid').type = 'file';
        });
    </script>

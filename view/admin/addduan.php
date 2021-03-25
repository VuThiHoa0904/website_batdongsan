<?php
    include('../view/admin/header.php');
?>
    <section id="page-wrapper">
            <div class="row">
                <div class="col-xs-12">
                    <form action="?action=addduan" method="post" enctype='multipart/form-data'>
                      <div class="form-row">
                        <div class="form-group col-lg-6">
                          <label for="inputEmail4" class="col-form-label">Tên dự án</label>
                          <input type="text" class="form-control" name="title" required>
                          <p></p>
                          <label for="inputPassword4" class="col-form-label">Giá</label>
                          <input type="text" class="form-control" name="price" required>
                          <p></p>
                          <label for="inputAddress" class="col-form-label">Hình ảnh</label>
                          <input type="file" class="form-control" name="img" required>
                          <p></p>
                          <label for="inputPassword4" class="col-form-label">Vị trí</label>
                          <input type="text" class="form-control" name="vitri" required>
                          <p></p>
                          <label for="inputPassword4" class="col-form-label">Thời gian bắt đầu dự án</label>
                          <input type="text" class="form-control" name="schedule_start">
                          <p></p>
                          <label for="inputPassword4" class="col-form-label">Dự kiến hoàn thành</label>
                          <input type="text" class="form-control" name="schedule_build">
                          <p></p>
                          <label for="inputPassword4" class="col-form-label">Thời gian hoàn thành</label>
                          <input type="text" class="form-control" name="schedule_success">
                          <label for="inputPassword4" class="col-form-label">Tiến độ hoàn thành</label>
                          <input type="number" class="form-control" name="schedule" min="0" max="100" required>
                        </div>
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="inputPassword4" class="col-form-label">Miêu tả dự án</label>
                        <textarea rows="10" class="form-control" name="intro" required>

                        </textarea>
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
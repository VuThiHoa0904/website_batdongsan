<?php
    include('../view/admin/header.php');
?>
    <section id="page-wrapper">
            <div class="row">
                <div class="col-xs-12">
                    <form action="?action=adminadd" method="post" enctype='multipart/form-data'>
                      <div class="form-row">
                        <div class="form-group col-lg-6">
                          <label for="inputEmail4" class="col-form-label">Tên</label>
                          <input type="text" class="form-control" name="name" required>
                          <p></p>
                          <label for="inputPassword4" class="col-form-label">Giá</label>
                          <input type="text" class="form-control" name="price" required>
                          <p></p>
                          <label for="inputAddress" class="col-form-label">Hình ảnh</label>
                          <input type="file" class="form-control" name="img" required>
                          <p></p>
                          <label for="inputAddress" class="col-form-label">Hãng</label>
                            <select class="form-control" name="brand">
                                <?php
                                    $x = new m_product();
                                    $brand = $x->get_brand();
                                    while ($set = $brand->fetch()) {
                                ?>
                                <option value="<?php echo $set[0]; ?>"><?php echo $set[1]; ?></option>
                                <?php } ?>
                            </select>
                          <p></p>
                          <label for="inputEmail4" class="col-form-label">Vị trí</label>
                          <input type="text" class="form-control" name="vitri" required>
                        </div>                       
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="inputPassword4" class="col-form-label">Chi tiết</label>
                        <textarea rows="10" class="form-control" name="product_details" required>
                              
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
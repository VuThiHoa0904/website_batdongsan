
<?php
    include('../view/admin/header.php');
?>
    <section id="page-wrapper">
            <div class="row">
                
                <?php
                    $v = new m_product();
                    $edit = $v->get_productId($_GET['id']);
                    
                ?>
                <div class="col-xs-12">
                    <form action="?action=editactive&id=<?php echo $_GET['id'] ?>" method="post">
                      <div class="form-row">
                        <div class="form-group col-lg-6">
                          <label for="inputEmail4" class="col-form-label">Tên</label>
                          <input type="text" class="form-control" name="name" value="<?php echo $edit[1] ?>">
                          <p></p>
                          <label for="inputPassword4" class="col-form-label">Giá</label>
                          <input type="text" class="form-control" name="price" value="<?php echo $edit[2] ?>">
                          <p></p>
                          <div class="form-group">
                            <label for="inputAddress" class="col-form-label">Loại</label>  
                                <select class="form-control" name="brand">
                                    <?php
                                        $x = new m_product();
                                        $brand = $x->get_brand();
                                        while ($set = $brand->fetch()) {
                                    ?>
                                    <option <?php if($edit[4] == $set[0]) {echo 'selected="selected"';} ?> value="<?php echo $set[0]; ?>"><?php echo $set[1]; ?></option>
                                    <?php } ?>
                                </select>
                          </div>
                          <p></p>
                          <label for="inputPassword4" class="col-form-label">Chi tiết</label>
                          <textarea rows="10" class="form-control" name="product_details">
                                <?php echo $edit['product_details'] ?>
                          </textarea>
                            
                        </div>
                        
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="inputPassword4" class="col-form-label">Vị trí</label>
                        <input type="text" class="form-control" name="vitri" value="<?php echo $edit['vitri'] ?>">
                        <p></p>
                        <div class="edit-box">
                          <img src="images/product/<?php echo $edit[3] ?>" width="250px" height="250px">
                          <span  id="edit">Thay hình ảnh ( click here )</span>
                          <input id="hybrid" type="text" class="form-control" name="img" value="<?php echo $edit[3] ?>">
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

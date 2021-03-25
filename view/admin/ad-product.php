
<?php
    include('../view/admin/header.php');
?>
        <section id="page-wrapper">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="alert alert-info">Bất động sản <a style="margin-bottom:30px;" href="?action=adminaddproduct" class="btn btn-danger pull-right"><span class="glyphicon glyphicon-plus"></span> Thêm</a></h3>
                    
                </div>
                <div class="col-xs-12 table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th></th>
                          <th>STT</th>
                          <th>Mã Bất động sản</th>
                          <th>Tên Bất động sản</th>
                          <th>Giá</th>
                          <th>Vị Trí</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $ad = new m_product();
                            $admin = $ad->get_product();
                            $stt = 1;
                            while ($set = $admin->fetch()) {
                        ?>
                        <tr>
                          <td width="150px">
                              <a href="?action=editproduct&id=<?php echo $set[0]; ?>" class="hover btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></a>
                              <a href="?action=deleteproduct&id=<?php echo $set[0]; ?>" class="hover btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                          </td>  
                          <th scope="row"><?php echo $stt++; ?></th>
                          <td><?php echo $set[0]; ?></td>
                          <td><?php echo $set[1]; ?></td> 
                          <td><?php echo $set['price']; ?></td> 
                          <td><?php echo $set['vitri']; ?></td> 
                        
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                </div>
            </div>
        </section>
<?php
    include('../view/admin/footer.php');
?>

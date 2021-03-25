<?php
    include('../view/admin/header.php');
?>
        <section id="page-wrapper">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="alert alert-info" >Loại bất động sản <a href="?action=adminaddloaibds" class="pull-right btn btn-danger"><span class="glyphicon glyphicon-plus"></span> Thêm Loại</a></h3>
                    
                </div>
                <div class="col-xs-12 table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th></th>
                          <th>STT</th>
                          <th>ID</th>
                          <th>Tên</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $ad = new m_product();
                            $admin = $ad->get_brand();
                            $stt = 1;
                            while ($set = $admin->fetch()) {
                        ?>
                        <tr>
                          <td width="150px">
                              <a href="?action=delete_loaibds&id=<?php echo $set[0]; ?>" class="hover btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                          </td>  
                          <th scope="row"><?php echo $stt++; ?></th>
                          <td><?php echo $set[0]; ?></td>
                          <td><?php echo $set[1] ?></td>
                          
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

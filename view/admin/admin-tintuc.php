 <?php
    include('../view/admin/header.php');
        ?>
        <section id="page-wrapper">
            <div class="row">
                <div class="admin-right">
                    <h3 class="alert alert-info">Tin Tức <a href="?action=add_tintuc" class="pull-right btn btn-danger"><span class="glyphicon glyphicon-plus"></span> Thêm</a></h3>
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
                            $admin = $ad->get_tintuc();
                            $stt = 1;
                            while ($set = $admin->fetch()) {
                        ?>
                        <tr> 
                          <td width="150px">
                              <a href="?action=edit_tintuc&id=<?php echo $set[0]; ?>" class="hover btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></a>
                              <a href="?action=delete_tintuc&id=<?php echo $set[0]; ?>" class="hover btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                          </td>   
                          <th scope="row"><?php echo $stt++; ?></th>
                          <td><?php echo $set[0]; ?></td>
                          <td><?php echo $set[1]; ?></td> 
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
 <?php include('../view/admin/footer.php'); ?>
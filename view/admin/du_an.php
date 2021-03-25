<?php
    include('../view/admin/header.php');
?>
        <section id="page-wrapper">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="alert alert-info">Tổng Dự Án <a href="?action=add_duan" class="pull-right btn btn-danger"><span class="glyphicon glyphicon-plus"></span> Thêm dự án</a></h3>
                    
                </div>
                <div class="col-xs-12 table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th></th>
                          <th>STT</th>
                          <th>ID</th>
                          <th>Tên</th>
                          <th>Ngày bắt đầu</th>
                          <th>Ngày dự kiến hoàn thành</th>
                          <th>Giá</th>
                          <th>Vị Trí</th>
                          <th>Ngày hoàn thành</th>
                          <th>Tiến độ hoàn thành</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $ad = new m_product();
                            $admin = $ad->get_duan();
                            $stt = 1;
                            while ($set = $admin->fetch()) {
                        ?>
                        <tr>
                          <td width="150px">
                              <a href="?action=editduan&id=<?php echo $set[0]; ?>" class="hover btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></a>
                              <a href="?action=deleteduan&id=<?php echo $set[0]; ?>" class="hover btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                          </td>  
                          <th scope="row"><?php echo $stt++; ?></th>
                          <td><?php echo $set['id']; ?></td>
                          <td><?php echo $set['title']; ?></td>
                          <td><?php echo $set['schedule_start']; ?></td>
                          <td><?php echo $set['schedule_success']; ?></td>
                          <td><?php echo $set['price']; ?></td> 
                          <td><?php echo $set['vitri']; ?></td>
                           <td><?php echo $set['schedule_build']; ?></td>
                          <td><?php echo $set['schedule'];?>%</td>     
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

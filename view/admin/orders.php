<?php
    include('../view/admin/header.php');
?>
    <section id="page-wrapper">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="alert alert-info" >Orders</h3>
                </div>
                <div class="col-xs-12 table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>BĐS đã đặt</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Số điện thoại</th>
                          <th>Nội dung</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $mem = new m_product();
                        $member = $mem->get_orders();
                        while ($set = $member->fetch()) { 
                      ?>
                        <tr>
                          <th scope="row"><?php echo $set[0]; ?></th>
                          <td><?php echo $set[5]; ?></td>
                          <td><?php echo $set[1]; ?></td>
                          <td><?php echo $set[2]; ?></td>
                          <td><?php echo $set[3]; ?></td>
                          <td><?php echo $set[4]; ?></td>
                          
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
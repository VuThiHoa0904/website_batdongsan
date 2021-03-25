<?php
    include('../view/admin/header.php');
?>
    <section id="page-wrapper">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="alert alert-info" >Thành viên</h3>
                </div>
                <div class="col-xs-12 table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>UserID</th>
                          <th>Username</th>
                          <th>Full name</th>
                          <th>Email</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $mem = new m_product();
                        $member = $mem->get_member();
                        while ($set = $member->fetch()) { 
                      ?>
                        <tr>
                          <th scope="row"><?php echo $set[0]; ?></th>
                          <td><?php echo $set[1]; ?></td>
                          <td><?php echo $set[2]; ?></td>
                          <td><?php echo $set[3]; ?></td>
                          <td width="150px">
                            <a href="?action=edituser&useridd=<?php echo $set[0]; ?>" class=" btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></a>
                            <a href="?action=deleteuser&useridd=<?php echo $set[0]; ?>" class=" btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                          </td>
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
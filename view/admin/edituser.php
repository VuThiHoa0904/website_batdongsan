<?php
            include('../view/admin/header.php');
        ?>
    <!-- /#wrapper -->
    <section id="page-wrapper">
            <div class="row">
                <?php
                    $v = new user();
                    $edit = $v->get_user($_GET['useridd']);
                  
                ?>
               
                <div class="col-xs-12">
                    <form action="?action=editactiveuser&useridd=<?php echo $_GET['useridd'] ?>" method="post">
                        <label for="inputEmail4" class="col-form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="<?php echo $edit[1] ?>">
                        <p></p>
                        <label for="inputEmail4" class="col-form-label">Full name</label>
                        <input type="text" class="form-control" name="fullname" value="<?php echo $edit[2] ?>">
                        <p></p>
                        <label for="inputEmail4" class="col-form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $edit[3] ?>">
                        <p></p>
                        
                        <input type="hidden" type="text" class="form-control" name="password" value="<?php echo $edit[4] ?>">
                        
                        <button type="submit" class="btn btn-danger">Sửa</button>               
                    </form>
                </div>
               
            </div>
        </section>
 <?php include('../view/admin/footer.php'); ?>
 
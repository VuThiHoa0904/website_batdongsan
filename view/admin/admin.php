        <?php
            include('../view/admin/header.php');
        ?>
        <div id="page-wrapper" class="admin-home">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="images/giao-dien.png"> 
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="bds-list">
                        <h4>Số BĐS</h4>
                        <?php
                            $ad = new m_product();
                            $tong = $ad->get_product();
                            $i = 1;
                            while ($set = $tong -> fetch()):
                            $i_mang = array($i);
                            $show_tong = max($i_mang);
                        ?>
                        <?php $i++; endwhile; ?>
                        <span><?php echo $show_tong;?></span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="bds-list">
                        <h4>Số dự án</h4>
                        <?php
                            $ad = new m_product();
                            $tong = $ad->get_duan();
                            $i = 1;
                            while ($set = $tong -> fetch()):
                            $i_mang = array($i);
                            $show_tong = max($i_mang);
                        ?>
                        <?php $i++; endwhile; ?>
                        <span><?php echo $show_tong;?></span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="bds-list">
                        <h4>Dự án đã hoàn thành</h4>
                        <?php
                            $ad = new m_product();
                            $tong = $ad->get_duan();
                            $i = 1;
                            while ($set = $tong -> fetch()):
                                if( $set['schedule'] == 100 ) {
                                    $i_mang = array($i);
                                }
                            $ht = max($i_mang);
                        ?>
                        <?php $i++; endwhile; ?>
                        <span><?php echo $ht;?></span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="bds-list">
                        <h4>Dự án chưa hoàn thành</h4>
                        <span><?php echo ($show_tong - $ht);?></span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="bds-list">
                        <h4>Thành Viên</h4>
                        <?php
                            $mem = new m_product();
                            $member = $mem->get_member();
                            $i = 1;
                            while ($set = $member -> fetch()):
                            $i_mang = array($i);
                            $show_tong = max($i_mang);
                        ?>
                        <?php $i++; endwhile; ?>
                        <span><?php echo $show_tong;?></span>
                    </div>
                </div>
                
                
            </div>
<?php
    include('../view/admin/footer.php');
?>